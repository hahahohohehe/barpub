<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class khachHangModel extends Model
{
    //
    static function getAll()
    {
    	$sql="select * from tblkhachhang where makhachhang=''";
    	$arrkhachhang=DB::select($sql);
    	return $arrkhachhang;
    }
}