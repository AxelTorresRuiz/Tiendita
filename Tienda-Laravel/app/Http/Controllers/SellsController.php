<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use App\Models\SellItem;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;

class SellsController extends Controller
{
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            //'ap'=>'required',
            'address' =>'required',
            'phone' => 'required',
            'items' => 'required'

        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
                ],201);
        }else{
                try{
                    $user = User::where('email',$request->email)->first();
                    if (is_null($user)){
                        $user = new User();
                        $user->name = $request->name;
                        $user->email = $request->email;
                        $user->password = Hash::make($request->email);
                        $user->phone = $request->phone;
                        $user->address = $request->address;
                        $user->img = 'default.jpeg';
                        $user->save();
                    }//llave if user null
                    $sell = new Sell();
                    $sell->status = 'preparacion';
                    $sell->ship_tax = 150.50;
                    $sell->id_user = $user->id;
                    $sell->save();
                    //Guardar productos de la venta
                    foreach($request->items as $item){
                        $sellItem = new SellItem();
                        $sellItem->price = $item['price'];
                        $sellItem->quantity = $item['cantidad'];
                        $sellItem->id_product = $item['id'];
                        $sellItem->id_sell = $sell->id;
                        $sellItem->save();
                    }//llave del foreacidh
                    return response()->json([
                        'status' => 'success',
                        'sell'=>$sell
                    ],200);
                }catch(Exception $e){
                    return response()->json([
                        'error'=>$e->getMessage()
                    ],201);
                }
        }// llave else
    }
    public function index(){
        $datos=Sell::select('sells.*','users.name as user_name')
        ->join('users','sells.id_user','=','users.id')
        ->get();
        $arr = [];
        foreach($datos as $s){
            $sell_item = SellItem::select('sellitems.*','products.name as product_name')
            ->join('products','sellitems.id_product','=','products.id')
            ->get();
            $arr[]=[
                'sell'=>$s,
                'sell_items'=>$sell_item
            ];
        }
        return response()->json([
            'status'=>'succes',
            'data'=>$arr
        ]);
    }
    public function show($id){
        if(Sell::where('id',$id)->exists()){
            $sell=Sell::find($id)
            ->select('sells.*','users.name as user_name')
            ->join('users','sells.id_user','=','users.id')
            ->get();
            return response()->json([
                'status'=>'succes',
                'data'=>$sell
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'data'=>'Sell not found'
            ],201);
        }
    }
}
