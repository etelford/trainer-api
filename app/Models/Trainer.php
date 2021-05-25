<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Trainer extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    /**
     * Fields guarded from mass assignment
     *
     * @var array
     */
    protected $guarded = ['id'];

    public static function boot()
    {
        static::creating(function ($instance) {
            $instance->id = Str::uuid();
        });

        parent::boot();
    }
}
