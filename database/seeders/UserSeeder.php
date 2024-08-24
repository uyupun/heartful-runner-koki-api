<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        User::insert([
            [
                'user_id' => 'neko',
                'password' => Hash::make('nekoneko'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 'inu',
                'password' => Hash::make('inuinuinu'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 'syati',
                'password' => Hash::make('syatisayti'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 'harinezumi',
                'password' => Hash::make('harinezumi'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
