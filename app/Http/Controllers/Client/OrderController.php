<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProductItem;
use App\Services\MyFatoorahService;
use Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{

    public function checkOrderData()
    {
        $user = Auth::user();
        if( $user->phone=='' ||
            $user->address=='' ||
            $user->block=='' ||
            $user->street=='' ||
            $user->house_building_number=='' )
            {
               return back()->with('data-error','Fill mandatory profile data to make your order.' );
            }
        return redirect(route('createInvoice'));
    }

    public function createInvoice()
    {
        $total=0;
        foreach (Cart::content() as $item){
            $total+=$item->price*$item->qty;
        }
        $postFields = [
            //Fill required data
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => $total,
            'CustomerName'       => Auth::user()->name,
                //Fill optional data
                //'DisplayCurrencyIso' => 'KWD',
                //'MobileCountryCode'  => '+965',
                //'CustomerMobile'     => '1234567890',
                //'CustomerEmail'      => 'email@example.com',
                'CallBackUrl'        => route('paymentSuccess'),
                'ErrorUrl'           => route('paymentFailure'),
                //'Language'           => 'en', //or 'ar'
                //'CustomerCivilId'    => 'CivilId',
                //'ExpiryDate'         => '', //The Invoice expires after 3 days by default. Use 'Y-m-d\TH:i:s' format in the 'Asia/Kuwait' time zone.
        ];

        $data=(new MyFatoorahService())->sendPayment($postFields);
        $invoiceId   = $data->InvoiceId;
        $paymentLink = $data->InvoiceURL;

        error_log($invoiceId);
        error_log($paymentLink);
        return Redirect::to($paymentLink);
    }

    public function paymentFailure(){
        return redirect('/checkout')->with('error','Payment failed try again please');
    }

    public function paymentSuccess(){
        $total=0;
        foreach (Cart::content() as $item){
            $total+=$item->price*$item->qty;
        }
        try{
            DB::transaction(function() use ($total)
            {
                $order=new Order;
                $order->user_id=Auth::user()->id;
                $order->user_name=Auth::user()->name;
                $order->total_price=$total;
                $order->save();
                foreach (Cart::content() as $item){
                    $orderProductItem=new OrderProductItem;
                    $orderProductItem->order_id=$order->id;
                    $orderProductItem->product_id=$item->id;
                    $orderProductItem->quantity=$item->qty;
                    $orderProductItem->save();
                }
            });
        } catch (\Exception $e) {
            //return $e->getMessage();
            return back()->with('error',$e->getMessage());
        }
        Cart::destroy();
        return redirect('thanks');
    }
}
