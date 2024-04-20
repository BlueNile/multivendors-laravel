<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Session;
class SectionController extends Controller
{
    public function sections() {
        Session::put("page","sections");
        $sections=Section::get();
        //dd($sections);
        return view("admin.sections.sections",compact('sections'));
     }
    public function addEditSection(Request $request,$id=""){
        Session::put('page',"addeditsection");
            $data=$request->all();
             if($id==""){
                $section=new Section();
                $title="Add_new_Section";
                $success_message="added successfully";
                    }else{
                    $section=Section::find($id);
                    $title="Edit_new_Section";
                    $success_message="updated successfully";
                }
                if($request->isMethod('post')){
                    $section->name=$data['section_name'];
                    $section->status=1;
                    $section->save();
                }
                
           return view('admin.sections.addEditSection',compact('title','section','success_message'));

    }
    function updateSectionStatus(Request$request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']="active"){
                $status=1;
            }else{
                $status=0;
            }
            Section::where("id",$data['section_id'])->update(['status'=>$status]);
             return response()->json(['status'=>$status,'section_id'=>$data['section_id']]);
        }
        
    }
       
    }

