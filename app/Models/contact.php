<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'contact_subtitle',
        'presencia',
        'address',
        'phone1',
        'mobile1',
        'mobile2',
        'website',
        'facebook',
        'email',
        'instagram',
        'tiktok'
    ];
}

