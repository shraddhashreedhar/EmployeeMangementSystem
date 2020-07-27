<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;

use App\employee;

use App\leave;

class AdminController extends Controller
{
    public function adminlogin(Request $req)

   {
        $un=$req->input('un');
    	$pw=$req->input('pw');
    	$sql = admin::where('username','=',$un) // Select query
    				->where('password','=',$pw)
    				->get();
    	if(count($sql)>0)
    	{
            $unm=admin::where('username','=',$un)
                    ->where('password','=',$pw)
                    ->value('username');
                       Session()->put('unm',$unm);
            return redirect('/index');
    	}
    	else
    	{
    		echo"
    		<script>
    		alert('Illegal');
    		window.location='/cadmin';
    		</script>
    		";
    	}
    
   }

   public function alogout()
    {
        Session()->forget('unm');
        Session()->flush();
        return redirect('/cadmin');

    }

    public function addqry(Request $req)
    {
    	$st = new employee();
    	$st->First_name=$req->input('fname');
    	$st->Last_name=$req->input('lname');
    	$st->Employee_id=$req->input('eid');
    	$st->email=$req->input('em');
    	$st->password=$req->input('pw');
    	if($st->save())
    	{
    		echo"
    		<script>
    		alert('inserted');
    		window.location='/employeeinsert';
    		</script>
    		";
    	}
    }

     public function addqry1(Request $req)
    {
        $st = new leave();
        $st->Employee_name=$req->input('ename');
        $st->Employee_id=$req->input('eid');
        $st->From_date=$req->input('fd');
        $st->To_date=$req->input('td');
        $st->Type_of_leave=$req->input('tol');
        $st->Description=$req->input('desp');
        
        if($st->save())
        {
            echo"
            <script>
            alert('Leave apllication successful');
            window.location='/leave';
            </script>
            ";
        }
    }


     public function edit($id)
    {
        $res=employee::where('id','=',$id)->get(); //select * from
        return view('admin/edit',compact('res')); // returning to view page
    }

    public function editqry(Request $req)
    {
        $id=$req->input('id');
        $fname=$req->input('fname');
        $lname=$req->input('lname');
        $eid=$rseq->input('eid');
        $em=$req->input('em');
        $pw=$req->input('pw');

        $update= employee::where('id','=',$id)->update(['First_name'=> $fname,'Last_name'=> $lname,'Employee_id'=> $eid,'email'=> $em,'password'=> $pw]);

        if($update==true)
        {
            echo"
            <script>
            alert('Updated');
            window.location='/employeeview';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/employeeview';
            </script>
            ";
        }
    }

    
   

    
    public function delete($id)
    {
        $delete= employee::where('id','=',$id)->delete();
        if($delete==true)
        {
            echo"
            <script>
            alert('Deleted');
            window.location='/employeeview';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/employeeview';
            </script>
            ";
        }
    }

    public function approve($id)
    {
        $res= leave::where('id','=',$id)->get();
        if($res==true)
        {
            echo"
            <script>
            alert('Leave Sanctioned');
            window.location='/leave';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/leave';
            </script>
            ";
        }
    }
    public function reject($id)
    {
        $res= leave::where('id','=',$id)->get();
        if($res==true)
        {
            echo"
            <script>
            alert('Leave not sanctioned');
            window.location='/leave';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Error');
            window.location='/leave';
            </script>
            ";
        }
    }


}
