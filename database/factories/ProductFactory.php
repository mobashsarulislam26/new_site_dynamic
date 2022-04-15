<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name= $this->faker->unique()->words($nb=2, $asText=true);
        $slug= Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description'=>$this->faker->text(200),
            'description'=>$this->faker->text(200),
            'sale_price'=>$this->faker->numberBetween(100,200),
            'stock_status'=>'in_stock',
            'image'=>'digital_'.$this->faker->numberBetween(1,22).'.jpg',
            'category_id'=>$this->faker->numberBetween(1,5)


                ];

    }
}
