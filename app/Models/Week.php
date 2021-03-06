<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['week_no', 'quest'];

    public function game() {
        return $this->belongsTo(Game::class);
    }

    public function actions() {
        return $this->embedsMany(Action::class);
    }
}
