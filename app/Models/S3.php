<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class S3
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'key'
    ];
}
