<?php

namespace App;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{

    use SoftDeletes;
    protected $table = 'linh_vuc';
    protected $fillable = ['id','ten_linh_vuc'];
    protected $deleted = ['deleted_at'];

    protected function create(array $data){
        LinhVuc::create([
            'ten_linh_vuc'=>$data['ten_linh_vuc'],

        ]);
    }
}
