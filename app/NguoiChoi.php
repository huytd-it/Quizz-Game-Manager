<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;

class NguoiChoi extends Authenticatable implements JWTSubject
{
    protected $table = 'nguoi_chois';
    protected $hidden =['mat_khau'];
    protected $fillable = ['ten_dang_nhap','mat_khau','email','id','hinh_dai_dien','diem_cao_nhat','credit','trang_thai'];
    protected function create(array $dulieu)
    {
        NguoiChoi::create(['ten_dang_nhap'=>$dulieu['ten_dang_nhap'],
        'mat_khau'=>$dulieu['mat_khau'],
        'email'=>$dulieu['email'],
        'hinh_dai_dien'=>$dulieu['hinh_dai_dien'],
        'diem_cao_nhat'=>$dulieu['diem'],
        'credit'=>$dulieu['credit']
        ]);
    }
    use SoftDeletes;

    protected $delete =["deleted_at"];

    public function getPasswordAttribute(){
        return $this->mat_khau;
    }

    public function getJWTIdentifier()
    {
      return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
      return [];
    }
}
