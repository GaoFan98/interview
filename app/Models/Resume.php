<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Resume
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'fileName',
        'S30bjectKey',
        'uploadedBy',
    ];


}
