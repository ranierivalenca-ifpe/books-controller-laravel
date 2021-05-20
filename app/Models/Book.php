<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'my_books'; // por default seria "books"

    protected $fillable = ['name', 'year', 'author'];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id'); // default FK: "owner_id"
    }
}
