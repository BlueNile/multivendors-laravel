<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Admin;
use App\models\AdminTranslation;
use Illuminate\Support\Facades\Hash;
class AdminTableSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
  'en' => ['title' => 'My first post'],
  'fr' => ['title' => 'Mon premier post'],*/
        $passowrd=Hash::make(123456);
        //$adminRecord=["phone"=>"0123456789123","email"=>"admin@gmail.com","password"=>$passowrd,"status"=>1,"vendor_id"=>0,"image"=>""];
        //Admin::insert($adminRecord);
        //$adminRecordAr=['name' => 'وليد','address' => 'مصر','type' => 'ادمين','locale'=>'ar','admin_id'=>'1'];
        //$adminRecordEn=['name' => 'waleed','address' => 'egypt','type' => 'admin','locale'=>'en','admin_id'=>'1'];
        //AdminTranslation::insert($adminRecordEn);
        //AdminTranslation::insert($adminRecordAr);
        //هنشتغل بدون ترجمة عشان تفهم هنعمل ايه وبعدين نضيف الترجمة للحلقة
        $subAdmin=['phone'=>'0112233445566','email'=>'subadmin@gmail.com','password'=>$passowrd,'status'=>1,'vendor_id'=>0,'image'=>''];
        $subadmindata_en=['name' => 'ahmed','address' => 'syria','type' => 'subadmin','locale'=>'en','admin_id'=>'17'];
        $subadmindata_ar=['name' => 'احمد','address' => 'سوريا','type' => 'مشرف فرعى','locale'=>'ar','admin_id'=>'17'];
        //Admin::insert($subAdmin);
        AdminTranslation::insert($subadmindata_ar);
        AdminTranslation::insert($subadmindata_en);
    }
}
