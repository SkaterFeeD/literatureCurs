<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['content', 'read_time', 'confirmation', 'name', 'description', 'photo'];

    public function grades() {
        return $this->hasMany(Grade::class);
    }
}
