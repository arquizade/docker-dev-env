<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{   
    /**
     * The name of the factory corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'post_id' => $this->faker->numberBetween(1,12),
            'content' => $this->faker->text(128)
        ];
    }
}
