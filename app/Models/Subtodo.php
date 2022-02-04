<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtodo extends Model
{
    use HasFactory;

    protected $fillable = [
        'todo_id',
        'nama'
    ];

    public function Todo()
    {
        return $this->belongsTo(Todo::class);
    }
}
