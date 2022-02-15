<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        User::create([
        	'name' => 'cesar',
            // 'username' => 'cesarmolina',
        	'email' => 'juanmayer@hotmail.com',
        	'password' => bcrypt('12345678')
        ]);

        // factory(User::class,10)->create(); //llama la factory y crear usuario
    }
}
