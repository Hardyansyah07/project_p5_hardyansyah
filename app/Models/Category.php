<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    protected $visible = ['nama'];

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}
