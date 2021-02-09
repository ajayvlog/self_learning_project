<?php

namespace App\Http\Controllers;

use App\todo;
use App\regi;
use Illuminate\Http\Request;
use Crypt;
use Session;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  echo 
         
            
            // echo  $request->input('ok');

              $todo=new todo();
              $todo->title=$request->ok;
              $todo->name=$request->name;
              $todo->save();

             $request->Session()->flash('success','Inserted data succussfully Done!');
           return redirect()->back();

         

    }


    public function reg()
    {
        
             return view('register');
         

    }


     public function img()
    {
       // echo "helkmsdlkjf ";
            // return view('register');

          //$data = DB::table('regis')->paginate(3);
          $data= regi::all();
        return view('img',['data'=>$data]); 
    }


     public function admin()
    {
        return view('admin.dash');
    }


    public function register(Request $request)
    {
        
             //return view('register');
         
        // echo "hello ";    
          
      
        $regi=new regi();
 
              $image=$request->file('file');
             $reImage = time().'_'.$image->getClientOriginalName();
             $dest=public_path('/uploads');

             $image->move($dest,$reImage);          
 
              $regi->name=$request->name;
              $regi->password=Crypt::encrypt($request->input('password'));
              $regi->contact=$request->contact;
              $regi->photo= $reImage;
              $regi->save();

             $request->Session()->put('user',$request->name);
           return redirect()->back();


 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(todo $todo)
    {
        //

        return view('data1')->with('todos', todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //

        $data=  todo::find($request->id);

        return view('edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //  
          $todo=todo::find($request->id);
              $todo->title=$request->ok;
              $todo->name=$request->name;
              $todo->save();

             $request->Session()->flash('success','Update data succussfully Done!');
           return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
            todo::find($request->id)->delete();

              $request->Session()->flash('success','Delete data succussfully Done!');
           return redirect('/show');

    }
}
