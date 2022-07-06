<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
         
        ]);
      
        User::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('editor123')
        ]);

        User::create([
            'name' => 'pembaca',
            'email' => 'pembaca@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('pembaca123')
        ]);
    }
}
