<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['author_id', 'title', 'publish_date', 'isbn', 'description'];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
