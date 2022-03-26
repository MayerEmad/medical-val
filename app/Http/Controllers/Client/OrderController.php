<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\MyFatoorahService;
use App\Services\IsAdminService;
use Redirect;

class OrderController extends Controller
{

    public function createInvoice()
    {
        $postFields = [
            //Fill required data
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => '50',
            'CustomerName'       => 'fname lname',
                //Fill optional data
                //'DisplayCurrencyIso' => 'KWD',
                //'MobileCountryCode'  => '+965',
                //'CustomerMobile'     => '1234567890',
                //'CustomerEmail'      => 'email@example.com',
                'CallBackUrl'        => route('paymentSuccess'),
                'ErrorUrl'           => route('paymentFailure'),
                //'Language'           => 'en', //or 'ar'
                //'CustomerReference'  => 'orderId',
                //'CustomerCivilId'    => 'CivilId',
                //'UserDefinedField'   => 'This could be string, number, or array',
                //'ExpiryDate'         => '', //The Invoice expires after 3 days by default. Use 'Y-m-d\TH:i:s' format in the 'Asia/Kuwait' time zone.
                //'SourceInfo'         => 'Pure PHP', //For example: (Laravel/Yii API Ver2.0 integration)
                //'CustomerAddress'    => $customerAddress,
                //'InvoiceItems'       => $invoiceItems,
        ];

        //IsAdminService::test();
        $data=(new MyFatoorahService())->sendPayment($postFields);
        $invoiceId   = $data->InvoiceId;
        $paymentLink = $data->InvoiceURL;

        error_log($invoiceId);
        error_log($paymentLink);
        return Redirect::to($paymentLink);
    }

    public function paymentFailure(){
        return "failure dont delete cart";
    }

    public function checkout()
    {
        //$products = get them from cart;
        return view('checkout');//->with('products',$parentCategories);
    }

    public function payOrder(Request $request)
    {
        $this->onlysuperadmin();
        // pull cart's products
        // then pay them (transactions)
        // if ok delete cart table / create order
        // create an order[order column and orderProductItem columns]
        //get invoice
        return back()->with('success', 'Successful create operation.');
    }


}
