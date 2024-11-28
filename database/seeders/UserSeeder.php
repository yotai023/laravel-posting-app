<?php

namespace Database\Seeders;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
         $user->name = "太郎";
         $user->email = 'tarou@example.com';
         $user->email_verified_at = Carbon::now();
         $user->password = Hash::make('password');
         $user->save();
    }
}
