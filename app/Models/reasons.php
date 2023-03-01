<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reasons extends Model
{
    use HasFactory;

    protected $table = 'reasons';

    protected $fillable = [
        'title',
        'description',
        'reason1',
        'reason2',
        'reason3',
        'reason4',
        'reason5',
        'reason6',
        'reason7',
        'reason8'
    ];
}
