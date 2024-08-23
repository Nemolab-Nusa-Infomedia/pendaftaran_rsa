<?php

namespace App\Models;

use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory, HasApiTokens;

    protected $guarded = [];

    public function getCreatedAtAttribute($value)
    {
        Carbon::setLocale('id');
        return Carbon::parse($value)
                     ->timezone('Asia/Jakarta')
                     ->translatedFormat('d F Y H:i:s');
    }

    // Accessor for updated_at
    public function getUpdatedAtAttribute($value)
    {
        Carbon::setLocale('id');
        return Carbon::parse($value)
                     ->timezone('Asia/Jakarta')
                     ->translatedFormat('d F Y H:i:s');
    }
}
