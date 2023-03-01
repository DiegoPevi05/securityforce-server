<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class us extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'us';

    protected $fillable = [
        'title',
        'content',
        'imageUrl'
    ];
}
