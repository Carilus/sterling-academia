<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function topic()
    {
        return $this->belongsTo('App\Models\Topic', 'topic_id');
    }
}
