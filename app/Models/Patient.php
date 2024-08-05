<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getPhotoUrlAttribute()
    {
        return asset('storage/' . $this->photo);
    }

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
