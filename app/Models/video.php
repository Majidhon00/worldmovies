<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    public function comment()
    {
        return $this->hasMany(comment::class,'v_id');
    }
}
