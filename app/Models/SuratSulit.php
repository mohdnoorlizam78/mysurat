<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratSulit extends Model
{
    use HasFactory;
    protected $table = 'suratsulit';

    protected $fillable = [
        
        'nombor',
        'tarikh_surat',
        'rujukan_surat',
        'perkara',
        'dikeluarkan_oleh_kemjab',
        'pengelasan' ,
        'dikelaskan_semula_oleh',
        'tarikh',
        'tandatangan',
        'catatan'    
    ];
}
