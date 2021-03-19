<?php

namespace Database\Factories;


use App\Models\Contact;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'photo' => $this->faker->unique()->safeEmail,
            'phone_number' => now(),
            'mailbox' => $this->faker->unique()->safeEmail,
            'github' => 'github_link',
            'linkedin' => 'linkedin_link',
            'user_id' => User::factory()->create()->id,
        ];
    }
}
