<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin1',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'name' => 'Hanavi Alvarel',
            'email' => 'hanavi@gmail.com',
            'password' => Hash::make('hanavi'),
        ]);
    }
}
