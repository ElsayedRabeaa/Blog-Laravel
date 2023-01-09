<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    User::create([
        'name'=>'Elsayed Rabea',
        'email'=>'Elsayed@100.local',
        'password'=>bcrypt('12345678'),
        'role_name'=>'admin',
    ]);
    }
}
