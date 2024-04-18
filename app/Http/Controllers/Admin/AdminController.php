<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\models\Admin;
use App\models\AdminTranslation;
use Auth;
use Image;
class AdminController extends Controller
{
 public function dashboard()
 {
return view('Admin.dashboard');
 }
 public function logout(Request $request)
 {
   Auth::guard('admin')->logout();
   return  redirect('admin/login');
 }
 public function updateAdminPassword(Request $request){
    if($request->isMethod('post')){
      $data=$request->all();
      //echo '<pre/>'; print_r($data); die;
   
      //$success_message="Your password updated successfully";
      //$error_message="there is a problem in updating your password!";
   
      $success_message="";
      $error_message="";
 
      if(Hash::check($data['admin_current_password'],Auth::guard('admin')->user()->password)){
         if($data['new_admin_password']==$data['confirm_admin_password']){
            Admin::where('email',Auth::guard('admin')->user()->email)->update(['password'=>Hash::make($data['new_admin_password'])]);
            return redirect()->back()->with("success_message",$success_message);
         }else{
            return  redirect()->back()->with("error_message","new and confirm password do not match");
         }     
         return redirect()->back()->with("success_message",$success_message);
      }
      else{
         return  redirect()->back()->with("error_message",$error_message);
      }
     }
   
    return  view('Admin.settings.update-admin-password');
 }
public function updateAdminDetails(Request $request) {
   if($request->isMethod('post')){
      $data=$request->input();
      //echo '<pre/>'; print_r($data); die;  
      $success_message="";
      $error_message="";
      //echo '<pre/>'; print_r($data); die;
      if(Hash::check($data['admin_current_password'],Auth::guard('admin')->user()->password)){
         $admin=Admin::where('email',Auth::guard('admin')->user()->email)->first();
         //echo '<pre/>'; print_r($admin); die;
         $admin->phone=$data['admin_phone'];
      if($request->hasFile('admin_image')){
         $img=$request->file('admin_image');
         if($img->isValid()){
            $ext=$img->getClientOriginalExtension();
            $img_name=rand(1111,9999).'.'.$ext;
            $path='admin/images/admin_photo/';
            Image::make($img)->resize(200, 200)->save(public_path($path).$img_name);
            $admin->image=$img_name;

         }else{
            $admin->image="";
         }

      }

     foreach(['ar','en'] as $locale){
      if(app()->getLocale() == $locale){ 
         //echo '<pre/>'; print_r("admin_".$locale."_name"); die; 
         //echo '<pre/>'; print_r(app()->getLocale());  die;       
         $admin->translate($locale)->name = $data["admin_".$locale."_name"];
         $admin->translate($locale)->address = $data["admin_".$locale."_address"];
      }
     }
         $admin->save();
         return redirect()->back()->with("success_message",$success_message);
      }
      else{
         return  redirect()->back()->with("error_message",$error_message);
      }
      
   }
      return view('Admin.settings.update-admin-data');
}
 public function chart()
 {
return view('Admin.charts');

}

 public function login(Request $request)
 {
   if($request->isMethod('post')){
      //$admin=Admin::where('email',$request->input('email'))->get()->first();
      //client side validation 
      //$validated=$request->validate(['email'=>'required','password'=>'required']);
      $data=$request->all();
      //echo '<pre/>'; print_r($data); die;
      $success_message="تم تسجيل الدخول بنجاح";
      $error_message="لديك مشكلة فى عملية الدخول";
      $rules=['email'=>'required|max:255','password'=>'required'];
      $custom_messages=[
         'email.required'=>'الايميل مطلوب',
         //'email.unique'=>'الايميل موجود بالفعل',
         'password.required'=>'كلمة السر مطلوبة',
   ];
      $this->validate($request,$rules,$custom_messages);
      if(Auth::guard('admin')->attempt(['email' => $data['email'],'password' =>$data['password'],"status"=>1])){
         if(isset($data['remember'])&& !empty($data['remember'])){
            setcookie("email",$data['email'],time()+3600);
            setcookie("password",$data['password'],time()+3600);
         }

          return redirect('/admin/dashboard')->with("success_message",$success_message);
      }else{
         return  redirect()->back()->with("error_message",$error_message);
      }
     }
    return view('admin.login');
 }

 public function register(Request $request)
 {
    return view('admin.register');
 }
 public function addNewAdmin(Request $request)
 {     
   $success_message="تم الحفظ  بنجاح";
   $error_message="لديك مشكلة فى الحفظ ";
   
   
             if($request->isMethod('post')){
               $data=$request->input();
               $rules=[
                  'email'=>'required|max:255|unique:admins',
                  'password'=>'required',
                  'name'=>'string|required',
                  'phone'=>'numeric|required|max:14',
                  'address'=>'string|required',
                  'type'=>'address|required'
               ];
                  $custom_messages=[
                     'email.required'=>'الايميل مطلوب',
                     'email.unique'=>'الايميل موجود بالفعل',
                     'password.required'=>'كلمة السر مطلوبة',
                     'name.required'=>'الاسم مطلوب',
                     'name.string'=>'اكتب الاسم بطريقة صحيحة ',   
                     'type.required'=>'النوع مطلوب',
                     'type.string'=>'اكتب النوع بطريقة صحيحة ',
                     'address.required'=>'العنوان مطلوب',
                     'address.string'=>'اكتب العنوان بطريقة صحيحة ',
                     //'email.unique'=>'الايميل موجود بالفعل',
                     'phone.numeric'=>'اكتب صيغة الهاتف بطريقةارقام فقط',
                     'phone.required'=>'رقم الهاتف مطلوب',
               ];
                  $this->validate($request,$rules,$custom_messages);
              // echo '<pre/>'; print_r($data); die;
               //DB::beginTransaction();
               $admin=new Admin();
               $admin->phone=$data['admin_phone'];
               //$admin->email=$request->input('admin_email_address');
               $admin->email="admin1000@gmail.com";
               $admin->password=Hash::make($request->input('admin_password'));
               $admin->status=1;
               $admin->vendor_id=1;
               $admin->image="";
               //$last_InsertID=PDO::getLastInsertID();
              // Now just pass date for storing in our database.   
              $admin->translateOrNew('en')->name=$request->input('en_name');
              $admin->translateOrNew('en')->address=$request->input('en_address');
              $admin->translateOrNew('en')->type=$request->input('en_type');
              $admin->translateOrNew('ar')->name=$request->input('ar_name');
              $admin->translateOrNew('ar')->address=$request->input('ar_address');
              $admin->translateOrNew('ar')->type=$request->input('ar_type');
              $admin->save();
            //    return redirect('admin/add-new-admin')->with("success_message",$success_message);
            //  }else{
            //    return  redirect('admin/add-new-admin')->with("error_message",$error_message);
            //   //DB::commit();
            // //echo '<pre/>'; print_r($data); die;
            //    // Redirect to the previous page successfully    
              
                         }  
      return view('admin.settings.add-admin-data');
   }
   public function subadmins(){
 /**  $subadmins=Admin::whereHas('translations',function($query){
      $query->where('locale','en')
            ->where('type','vendor')->get();})->toArray();
            dd($subadmins);*/
      $subadmins=Admin::get();
      return view('admin.subadmins.subadmins',Compact('subadmins'));      
   }

}
