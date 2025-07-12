<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    protected $model = User::class;

    public function definition(): array
    {
        return [
            "username"      => fake()->userName(),
            "email"         => fake()->safeEmail(),
            "jenis kelamin" => fake()->randomElement(["P", "W"]),
        ];
    }
}
