<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Create_role;
use Hash;
use Session;

class maincontroller extends Controller
{
   public function login()
    {
      return view('Auth.login');
    }

    public function Register(){
        $datas = Create_role::all();
        return view('Auth.Register', compact('datas'));
    }


    public function get(Request $request){
        $request->validate([
         "username"=> "required",
         "email" => "required|email|unique:registers",
         "password" => "required|min:5|max:7"
        ]);

        $data= ['username'=>$request->username, 
                'email' => $request->email, 
                'password'=> Hash::make($request->password),
                'Role' => $request->Role
           ];
         $obj= new Register($data);
        // $obj->username =$request->username;
        // $obj->email =$request->email;
        // $obj->password =Hash::make($request->password);
        // $obj->Role=$request->Role;
          $result =$obj->save();

        if($result)
        {
           return back()->with('success' , 'You have registered successfully');
        }
        else{
            return back()->with('failed', 'Something wrong');

        }

        
    }


    public function loginuser(Request $request) {
        $request->validate([
            
            "email" => "required|email",
            "password" =>"required"

        ]);

        $user= Register::where('email', '=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password ,$user->password))
            {
                return redirect('dashboard');

            }
            else{
                return back()->with('failed' , 'password not matches');
            }
        }
        else{

            return back()->with('failed' , "This Email is not registered");
        }


    }


    public function dashboard(){
        $data = Register::all();

        return view('Auth.dashboard', compact('data'));
    }

    public function destroy($id) 
       {
          $user = Register::where('id', $id)->delete();
          return redirect('dashboard');
       }


       public function edit($id)
       {
        $student = Register::find($id);
        $data = Create_role::all();
        return view('Auth.edit',compact('student', 'data'));
       }

       public function update(Request $request){
        $student = Register::find($request->id);
        $student->username = $request->input('username');
        $student->email = $request->input('email');
        $student->Role = $request->input('Role');
        // $student->password = $request->input('password');
        $student->update();
        return redirect('/dashboard');


       }


       public function show($id){
        $student = Register::find($id);
        return view('Auth.show',compact('student'));
       }

       public function createrole(){
           return view('Auth.Role');
       }


       public function getrole(Request $request){
        $data=['Role_name'=> $request->Role];
         $obj= new Create_role($data);
        
        
         $result=$obj->save();     
         return redirect('/Register'); 

       }


       public function rolesmanagement(){
           $data=Create_role::all();
           return view('Auth.rolesmanage',compact('data'));

       }

       public function roledelete($id ){
         $role=Create_role::find($id);
         $data=Register::where('Role','=', $role->Role_name)->first();
         if($data)
         {
             return back()->with('falied' ,'Assigned User');
         }
         else{

            $role->delete();
            return redirect('/rolesmanagement');


         }
   
          
       }

      
        
}
 