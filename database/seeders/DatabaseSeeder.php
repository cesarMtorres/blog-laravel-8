<?php

namespace Database\Seeders;
use App\database\Seeders\EntryTableSeeder;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        User::factory(3)->create()
      ]);
    }
          /*
      * php artisan db:seed
      * php artisan db:seed --class=UserSeeder
      *php artisan migrate:fresh --seed
      * */
}
