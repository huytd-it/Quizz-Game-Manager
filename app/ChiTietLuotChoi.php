<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class ChiTietLuotChoi extends Model
{
    use SoftDeletes;
    protected $table = 'chi_tiet_luot_chois';
    protected $fillable = [  'id',
                            'luoc_choi_id',
                            'cau_hoi_id',
                            'phuong_an',
                            'diem',
                            ];
    protected $dates = ["deleted_at"];
}
