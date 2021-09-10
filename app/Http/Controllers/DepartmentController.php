<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   	public function index()
   	{
   		$Departments = Department::orderBy('id' , 'DESC')->get();
   		return view ('admin.layout.user.department', compact('Departments'));
   	}

       public function create(Request $request)
       {
         Department::create([
               'name'=>$request->name,
               'description'=>$request->description,
               'status'=>$request->status,
           ]);

           return redirect()->route('department')->with('msg','New Department Added Successfully');
       }

       public function view($id)
       {
         $Departments = Department::all();
         return view ('admin.layout.permission.permissionList', compact('Departments'));
       }

       public function departmentActive($id)
   	{
   		$roles= Department::find($id);
   		if($roles->status==1)
   		{
   			$roles->status = 0;
   			$roles->save();
   		}
   		else
   		{
   			$roles->status = 1;
   			$roles->save();
   		}
   		return redirect()->back();
	   }
}
