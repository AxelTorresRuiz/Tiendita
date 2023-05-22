<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use App\Models\SellItem;
use Illuminate\Http\Request;
use Validator;

class SellsController extends Controller
{
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'ap'=>'required',
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
           /* $sell=new Sell();
            $sell->status = $request-> status;
            $sell->ship_tax = $request-> ship_tax;
            $sell->id_user = $request-> id_user;
            $sell->save();
            foreach($request->products as $p){
                $sell_item=new SellItem();
                $sell_item->price=$p['price'];
                $sell_item->quantity=$p['quantity'];
                $sell_item->id_product=$p['id_product'];
                $sell_item->id_sell=$sell->id;
                $sell_item->save();
            }*/
           /* return response()->json([
                'status'=>'Success',
                'message'=>$sell_item*/
                return response()->json([
                    'status' => 'success'
                ]);
            
        }
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
