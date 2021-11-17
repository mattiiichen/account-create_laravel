<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function user(){
        return $this->belongsTo('App\Models\Account');
    }

    protected $fillable = ['acc','accName','accSex','accBirthday','accMail','accNote'];
}
