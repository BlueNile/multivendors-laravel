<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Admin;
class AdminTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['vendor_id', 'name','type','address','email','phone','image','status'];
    protected $hidden=['password'];

}