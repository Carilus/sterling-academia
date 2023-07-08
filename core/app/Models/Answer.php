<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];
    protected $casts = [
        'choices' => 'array'
    ];

    public function question()
    {
        return $this->BelongsTo('App\Models\Question');
    }
}
