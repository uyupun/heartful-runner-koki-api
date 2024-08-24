<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Envelope;
use Carbon\Carbon;

class EnvelopeSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        Envelope::insert([
            [
                'code' => Str::uuid()->toString(),
                'title' => "aaa",
                'sender_id' => 1,
                'holder_id' => 3,
                'state' => 'RECEIVED',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => Str::uuid()->toString(),
                'title' => "bbb",
                'sender_id' => 2,
                'holder_id' => 4,
                'state' => 'IN_PROGRESS',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => Str::uuid()->toString(),
                'title' => "ccc",
                'sender_id' => 3,
                'holder_id' => 3,
                'state' => 'IN_PROGRESS',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
