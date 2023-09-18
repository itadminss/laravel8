<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeaveRequest>
 */
class LeaveRequestFactory extends Factory
{
  
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $date = $this->faker->dateTimeThisYear('+3 months');
        $date = $this->faker->dateTimeThisYear()+new Date('Ymd');

        return [
            //
            'user_id' => User::factory(),
            'leave_type_name' => $this->faker->randomElement(['sick', 'personal', 'vacation']),
            'start_date' => $date,
            'end_date' => $date,
            'total_leave' => 1,
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']) ,
            'comments' => "",
            'approver_id' => 1,

        ];
    }
}
