<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class FileImageHelper
{
    public static function generateFileName($name, $file)
    {
        $namaAwal = explode(' ', trim($name))[0];
        $tanggal = Str::random(3).now()->format('ymd');
        $extension = $file->getClientOriginalExtension();
        
        return $tanggal . $namaAwal . '.' . $extension;
    }
}
