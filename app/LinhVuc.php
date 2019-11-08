<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{
    protected $table = 'linh_vuc';

    protected function create(array $data){
        linh_vuc::create([
            'ten_linh_vuc'=>$data['ten_linh_vuc'],
            
        ]);
    }
}
