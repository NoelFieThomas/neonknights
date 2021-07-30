<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class GameRound extends Model
{
    use HasFactory;

    public function weeks() {
        return $this->embedsMany(Week::class);
    }
}
