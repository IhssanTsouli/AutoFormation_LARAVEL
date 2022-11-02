<?php

namespace App\Models;
use App\Models\Detail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function detail():HasOne
    {
        return $this->hasOne(Detail::class);
    }
}
