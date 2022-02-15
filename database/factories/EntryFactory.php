<?php

namespace Database\Factories;

use App\Models\Entry;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntryFactory extends Factory
{
  protected $model = Entry::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return Entry::factory()
      ->has(User::factory()->count(1))
      ->create();
        // ->forUser([
        // 'name' => 'Cesar Molina'
      // ])
      // ->create();
    // return [
    //   'title'   => $this->faker->name(),
    //   'content' => $this->faker->sentences(4, true),
    //   'user_id' => $this->faker->forUser(),
    //   'slug'    => $this->faker->name()
    // ];
  }
}
