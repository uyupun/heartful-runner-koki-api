<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;
use Carbon\Carbon;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        Message::insert([
            [
                'envelope_id' => 1,
                'content' => "がんばれ",
                'writer_id' => 1,
                'writer_name' => "ねこ",
            ],
            [
                'envelope_id' => 1,
                'content' => "ふぁいと",
                'writer_id' => 2,
                'writer_name' => "いぬ",
            ],
            [
                'envelope_id' => 2,
                'content' => "げんきだせよ",
                'writer_id' => 2,
                'writer_name' => "いぬ",
            ],
            [
                'envelope_id' => 2,
                'content' => "だいじょうぶ",
                'writer_id' => 4,
                'writer_name' => "はりねずみ",
            ],
            [
                'envelope_id' => 3,
                'content' => "まけないで",
                'writer_id' => 3,
                'writer_name' => "しゃち",
            ],
        ]);

    }
}
