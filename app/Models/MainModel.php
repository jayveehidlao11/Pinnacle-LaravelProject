<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class MainModel extends Model
{
    public $table ="applicants";
    protected $primaryKey ="id";
    protected $fillable=['id','profile_pic','firstname','lastname','middlename','birthday','age','birthplace','gender','email','phonenumber','address','postalcode','password','agreement'];

    public static function getList(){
        $list = DB::table('applicants')->select('firstname','lastname','middlename','birthday','age','birthplace','gender','email','phonenumber','address','postalcode','agreement')->get()->toArray();
        return $list;
    }
}
