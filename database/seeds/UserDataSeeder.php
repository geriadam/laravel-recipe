<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password'          => bcrypt('admin123'),
        ]);
    }
}
