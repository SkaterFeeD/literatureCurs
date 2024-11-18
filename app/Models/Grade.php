<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['comment', 'grade', 'user_id', 'history_id'];

    public function users() {
        return $this->belongsTo(User::class);
    }
    public function histories() {
        return $this->belongsTo(History::class);
    }
}
