<?php

namespace App\Http\Controllers;

 
use App\todo;
use App\node;
use Mail;
use Session;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;


class youtube extends Controller
{
    //  

public function join()
   {
            //echo "helloslkf lsjdf ";
             $data=DB::table('todos')
             ->select('regis.name','regis.contact','todos.name')
             ->join('regis','todos.id','regis.id')
             
             ->get();

           
           return view('admin.join',['data'=>$data]);

 

   }


   public function err()
   {
            //echo "helloslkf lsjdf ";
              
              return view('admin.err');

   }



   public function log()
   {
            //echo "helloslkf lsjdf ";
              
              return view('login');

   }



   public function logout()
   {
            //echo "helloslkf lsjdf ";
               return view('login');
   }




   public function board()
   {
            //echo "helloslkf lsjdf ";
              
              

              return view('board');

   }



   public function logged(Request $request)
   {
            
              $a=$request->input('username');

              $b=$request->input('password');
              //return view('login');
 
          
            $data=DB::table('node')->where(['email'=>$a,'name'=>$b])->get(); 
              

            if(count($data)>0)
            {
                 
                     $request->Session()->put('user','login Successfully done !');
             
              return view('dash');

            }
            else{

                     $request->Session()->put('users','login failed !');
             return back()->withInput();


            }      

   }

 public function mail()
   {
      
$message="this is a first good thingasj lk";
Mail::send('mail',['name','Ripon Uddin Arman'],function($message){
    $message->to('acomboj@gmail.com')->subject("Email test");
    $message->from('ajaysahu120895@gmail.com','mashroom tesing ');
    //$message->from(‘SENDER_EMAIL_ADDRESS’,’Test Mail’);
});


  /* $to_name = "ajay";
   $to_email = "ajaysahu120895@gmail.com";
   $text = "hello this is a test message";
   Mail::send("mail", ['name' => $to_name], function 
    ($message) use ($to_name, $to_email) {
     $message->to($to_email, $to_name)
     ->subject("Response Available");
     $message->from("acomboj@gmail.com", "The Boring  
     Solutions");
   }); */

   return "message sent check your email!";

   }

   public function check(Request $request)
   {
             
         $messsages = array(
    'email.required'=>'You cant leave Email field empty',
    'pass.required'=>'You cant leave name field empty',
                'pass.min'=>'The field has to be :min chars long',
  );


            $validated = $request->validate([
        'email' => 'required|email',
        'pass' => 'required|min:6',
    ]);


   




              return view('admin.dash');

   }



      public function index(Request $request)
   {
            //echo "helloslkf lsjdf ";
             return view('todo');
            //return ["site"=>$site];
   }

     public function in(Request $request)
   {

   	    return $request->title;
           $todo=new todo();
           $todo->title=$request->title;
           $todo->save();

           return redirect()->back();
            // return view('todo');
            //return ["site"=>$site];
   }


 public function v(
 	$name)
 {
 	 $a='this is a view page ';
 	 return view("youtube",['data'=>$name]);
 }

 public function b()
 {
 	 //$a='this is a view page ';
 	 return view("b");
 }


public function xyz()
{
	$data=["name"=>'ajay',"age"=>25,"pass"=>'<h1>pub G</h1>'];
	return view('home',['list'=>$data]);
}


public function login(Request $request)
{
	 $request->validate([
        "email"=>'required',
        "pass"=>'min:4|max:8'
	 ]);
     
     
     $data=$request->input('email');

	 $request->session()->flash("userdata",$data);

    return view('home');
	//return "form page access";
	//print_r($request->session()->get('userdata'));
}



public function db()
{
   //  $users = DB::select('select * from demo');
    // return $users;

     $a="nutan";
     $u=DB::insert('insert into demo (name,class,marks) values (?,?,?)', [$a, 'bca','90']);
    
    if($u)
    {
    	 $users = DB::select('select * from demo');
    	 return view('data',['users' => $users]);
         
    }else
    {
    	 echo "data not saved ";
    }

     //return $users;
     //   return view('data',['users' => $users]);
}



public function delete(Request $request)
{
   
  if($request->isMethod("Get"))
   {

	//echo $request->id;

	$deleted = DB::delete('delete from demo where id = :id', ['id' =>$request->id ]);
  
    //echo $deleted; 
     if($deleted)
    {
    	 $users = DB::select('select * from demo');
    	 return view('data',['users' => $users]);
         
    }else
    {
    	 echo "data not deleted ";
    }


   }
   else
   {
   	  echo "not";
   }
}


}
