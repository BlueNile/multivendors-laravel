<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\models\AdminTranslation;
class Admin extends Authenticatable implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table="admins";
    public $translatedAttributes = ['name','type','address'];
    protected $fillable = ['vendor_id','name','type','address','email','phone','image','status'];
    protected $hidden=[
        'password',
    ];
    
    
}
