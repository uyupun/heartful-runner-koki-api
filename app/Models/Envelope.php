<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envelope extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'sender_id',
        'holder_id',
        'state',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
