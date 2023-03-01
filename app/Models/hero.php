<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hero extends Model
{
    use HasFactory;

    protected $table = 'heroes';

    protected $fillable = [
        'writeword',
        'header',
        'title',
        'subtitle',
        'brochureUrl'
    ];
}
