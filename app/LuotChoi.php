<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class LuotChoi extends Model
{

    protected $table = 'luot_chois';
    protected $fillable = [  'id',
                            'nguoi_choi_id',
                            'so_cau',
                            'diem',
                            'ngay_gio'];
    protected $dates = ["deleted_at"];
}
