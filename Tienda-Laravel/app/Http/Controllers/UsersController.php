<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
class UsersController extends Controller
{
    public function index(){
        $datos = User::all();
        return response()->json([
            'status'=>'success',
            'data'=>$datos
        ]);
    }

    public function show($id){
        if(User::where('id',$id)->exists()){
            $user = User::find($id);
            return response()->json([
                'status'=>'success',
                'data'=>$user
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'data'=>'User not found'
            ],201);
        }
        
    }//llave show

    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|min:4|required_with:password_confirm|same:password_confirm',
            'password_confirm'=>'required|min:4',
            'address'=>'required|min:4',
            'phone'=>'required|min:4',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->img = 'default.jpg';
            $user->save();
            return response()->json([
                'status'=>'succes',
                'data'=>$user
            ]);
        }//llave del else
    }//llave store

    public function update(Request $request,$id){
        if(!User::where('id',$id)->exists()){
            return response()->json([
                'status'=>'error',
                'data'=>'User not found'
            ],201);    
        }
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:3',
            'address'=>'required|min:4',
            'phone'=>'required|min:4',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $user = User::find($id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return response()->json([
                'status'=>'succes',
                'data'=>$user
            ]);
        }//llave del else
    }//llave update

    public function destroy($id){
        if(User::where('id',$id)->exists()){
            $user = User::find($id);
            if($user->img!='default.jpg'){
                if(file_exists(public_path('users/').$user->img)){
                    unlink(public_path('users/').$user->img);
                }
            }
            $user->delete();
            return response()->json([
                'status'=>'success',
                'data'=>'User deleted'
            ],200);
            
        }else{
            return response()->json([
                'status'=>'error',
                'data'=>'User not found'
            ],201);
        }
    }//llave destroy
}
