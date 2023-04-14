<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
