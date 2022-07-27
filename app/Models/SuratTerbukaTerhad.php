<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTerbukaTerhad extends Model
{
    use HasFactory;
    protected $table = 'suratterhad';

    protected $fillable = [
        'bil_suratmenyurat' ,
        'nombor',
        'tarikh_penerimaan',
        'no_fail_kementerian_ibu_pejabat',
        'nombor_yang_lain',
        'tarikh_surat',
        'daripada_siapa' ,
        'perkara',
        'dirujukkan_kepada'  ,
        'catatan'    
    ];
}
