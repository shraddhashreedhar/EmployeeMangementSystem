<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\leaveapp;
use App\internship;

class EmployeeController extends Controller
{
    
      public function employeelogin(Request $req)

   {
        $em=$req->input('em');
    	$pw=$req->input('pw');
    	$sql = employee::where('email','=',$em)
    				->where('password','=',$pw)
    				->get();
    	if(count($sql)>0)
    	{
    		$id=employee::where('email','=',$em)
    				  ->where('password','=',$pw)
    				  ->value('id');
    				    Session()->put('id',$id);
    		return redirect('/employeeindex');
    	
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Error');
    		window.location='/cemployee';
    		</script>
    		";
    	}

   }

   public function a1logout()
   {
     Session()->forget('id');
     Session()->flush();
     return redirect('/cemployee');
   }


   // public function get($id)
    //{
    	//$res=employee::where('id','=',$id)->get();
    //}

    public function addqry1(Request $req)
    {
    	$stu = new leaveapp();
    	$stu->Ename=$req->input('enm');
    	$stu->Eid=$req->input('eno');
    	$stu->Type=$req->input('Type');
    	$stu->From=$req->input('fr');
    	$stu->To=$req->input('to');
    	$stu->Description=$req->input('text');
    	
    	if($stu->save())
    	{
    		echo"
    		<script>
    		alert('Leave Application is successful');
    		window.location='/leave';
    		</script>
    		";
    	}
    }

    public function addqry2(Request $req)
    {
        $stu = new internship();
        $stu->name=$req->input('nm');
        $stu->college=$req->input('cnm');
        $stu->course=$req->input('course');
        $stu->email=$req->input('em');
        $stu->contact=$req->input('cn');
        
        
        if($stu->save())
        {
            echo"
            <script>
            alert('Registration is successful');
            window.location='/intern';
            </script>
            ";
        }
    }
}    
