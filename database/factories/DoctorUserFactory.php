<?php

namespace Database\Factories;

use App\Models\DoctorUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class DoctorUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'harshwardhan singh',
            'email' => 'doctor2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
