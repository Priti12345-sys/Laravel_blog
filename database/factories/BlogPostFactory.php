<?php

namespace Database\Factories;
use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'image_url' => 'uploads/' . $this->faker->image('storage/app/public/uploads', 640, 480, null, false), // Generates a random image and stores it in the specified directory
        ];
    }
}
