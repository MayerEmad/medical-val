<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'name'=>$this->faker->name,
            'ar_name'=>$this->faker->ar_name,
            'description'=>$this->faker->description,
            'ar_description'=>$this->faker->ar_description,
            'image'=>'',
            'price'=>$this->faker->price,
            'discount'=>$this->faker->discount,
            'rate'=>$this->faker->rate,
            'quantity'=>$this->faker->quantity,
            'category_id'=>$this->faker->category_id,
            'created_at'=>$this->faker->created_at,
            'instock'=>$this->faker->instock,     
           ];
    }
}
