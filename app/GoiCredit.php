<?php

namespace App;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;


class GoiCredit extends Model
{
    use SoftDeletes;
    protected $table='goi_credit';
    protected $deleted = ['deleted_at'];
    protected function create(array $data){
        goi_credit::create([
            'ten_goi'=>$data['ten_goi_credit'],
            'credit'=>$data['so_credit'],
            'so_tien'=>$data['so_tien'],
        ]);
    }
    protected $filldable = ['id',
    'ten_goi',
    'credit',
    'so_tien',
                           ];

}
