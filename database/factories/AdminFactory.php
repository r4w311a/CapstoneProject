<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $password = 'edraakMC_admin';
        $hashedPassword = Hash::make($password);
        return [
            'name' => 'Admin',
            'email' => 'admin@edraakmc.com',
            'email_verified_at' => now(),
            'password' => $hashedPassword, // password
            'remember_token' => Str::random(10),
        ];
    }
}
