<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Model
{
    protected $table = 'nguoi_chois';

    protected function create(array $dulieu)
    {
        nguoi_chois::create(['ten_dang_nhap'=>$dulieu['ten_dang_nhap'],
        'mat_khau'=>$dulieu['mat_khau'],
        'email'=>$dulieu['email'],
        'hinh_dai_dien'=>$dulieu['hinh_dai_dien'],
        'diem_cao_nhat'=>$dulieu['diem'],
        'credit'=>$dulieu['credit']
        ]);
    }
    use SoftDeletes;

    protected $delete =["deleted_at"];
}
