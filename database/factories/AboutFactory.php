<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'personality' => $this->faker->name,
            'hobbies' => $this->faker->name,
            'birthdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'contact_id' => Contact::factory()->create()->id,
        ];
    }
}
