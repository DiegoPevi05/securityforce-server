<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industries extends Model
{
    use HasFactory;

    protected $table = 'industries';

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'pretitle',
        'subpretitle',
        'imageUrl'
    ];
}
