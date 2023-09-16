<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuotationDetail>
 */
class QuotationDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $amount = $this->faker->numberBetween(1, 3);
        $price = $this->faker->numberBetween(100, 100);
        $total = $amount * $price;

        return [
            //
            'amount' => $amount,
            'price' => $price,
            'total' => $total,
            'remark' => "",
            'quotation_id' => Quotation::factory(),
            'product_id' => Product::factory(),

        ];
    }
}
