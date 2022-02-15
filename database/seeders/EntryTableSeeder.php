<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Entry;

use Illuminate\Database\Seeder;

class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::all();
      $user->each(function($user){
        factory(Entry::class,3)->create([
          'user_id' => $user->id
        ]);
      });
    }
}
