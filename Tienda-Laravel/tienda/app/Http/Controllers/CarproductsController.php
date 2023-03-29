<?php

namespace App\Http\Controllers;

use App\Models\CarProduct;
use Illuminate\Http\Request;
use Validator;

class CarproductsController extends Controller
{
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'id_user'=>'required',
            'id_product'=>'required',
            'quantity'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
            'status'=>'error',
            'message'=>'Error de validacion',
            'data'=>$reglas->errors()
            ],201);
        }else{
            $car = new CarProduct();
            $car->id_user = $request->id_user;
            $car->id_product = $request->id_product;
            $car->quantity = $request->quantity;
            $car->save();
            return response()->json([
                'status'=>'succes',
                'message'=>$car
                ]);
        }
    }
    public function destroy($id){
        if(CarProduct::where('id',$id)->exists()){
            $car=CarProduct::find($id);
            $car->delete();
            return response()->json([
                'status'=>'Succes',
                'message'=>'Car Product Delete'
                ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Car Product Not Found'
                ],201);
        }
    }
}
