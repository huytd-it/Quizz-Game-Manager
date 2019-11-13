<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauHoi extends Model
{
    protected $table = 'cau_hois';

    protected function create(array $data)
    {
        cau_hois::create(['noi_dung'=>$data['noi_dung_cau_hoi'],
        'id_linh_vuc'=>$data['id_linh_vuc'],
        'phuong_an_A'=>$data['phuong_an_A'],
        'phuong_an_B'=>$data['phuong_an_B'],
        'phuong_an_C'=>$data['phuong_an_C'],
        'phuong_an_D'=>$data['phuong_an_D'],
        'dap_an'=>$data['dap_an'],
        ]);
    }
    use SoftDeletes;
    
    protected $delete =["deleted_at"];
}
