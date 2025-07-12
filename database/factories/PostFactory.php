<?php
namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    private $title;

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $this->title = fake()->sentence(6, false);

        return [
            "title"  => $this->title,
            "slug"   => $this->title,   
            "body"   => fake()->text(),
            "user_id" => User::factory(),
        ];

    }
}
