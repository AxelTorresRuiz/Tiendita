<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Models\Question;
use App\Models\Review;
use Illuminate\Http\Request;
use Validator;

class ProductsController extends Controller
{
    public function index(){

        $datos = Product::select('products.*','categorys.name as name_cate',
        'users.name as user_name','users.img as user_img')
        ->join('categorys','products.id_category','=','categorys.id')
        ->join('users','products.id_user','=','users.id')
        ->orderby('products.id','DESC')
        ->get();
        $arr = [];
        foreach($datos as $d){
            $likes = Like::where('id_product',$d->id)->get()->count();
            $reviews= Review::where('id_product',$d->id)->get();
            $productmedias=ProductMedia::where('id_product',$d->id)->get();
            $questions=Question::where('id_product',$d->id)
            ->select('questions.*','users.name as user_name','products.name as product_name')
            ->join('users','questions.id_user','=','users.id')
            ->join('products','questions.id_product','=','products.id')
            ->get();
            
            $arr[]=[
                'product'=>$d,
                'likes'=>$likes,
                'reviews'=>$reviews,
                'questions'=>$questions,
                'reviews'=>$reviews,
                'productmedias'=>$productmedias
            ];
        }
        
        return response()->json([
            'status'=>'success',
            'data'=>$arr
        ]);
    }
    public function doLike(Request $request){
        $reglas=Validator::make($request->all(),[
            'id_user'=>'required',
            'id_product'=>'required'
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
        $like=new Like();
        $like->id_user=$request->id_user;
        $like->id_product=$request->id_product;
        $like->save();
        return response()->json([
            'status'=>'success',
            'message'=>'Like OK',
        ],200);
    }
    }

    public function doQuestion(Request $request){
        $reglas=Validator::make($request->all(),[
            'question'=>'required',
            'id_product'=>'required',
            'id_user'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
        $questions=new Question();
        $questions->question=$request->question;
        $questions->answer="";
        $questions->id_product=$request->id_product;
        $questions->id_user=$request->id_user;
        $questions->save();
        return response()->json([
            'status'=>'success',
            'message'=>'Question OK',
        ],200);
    }
    }

    public function doReview(Request $request){
        $reglas=Validator::make($request->all(),[
            'stars'=>'required',
            'id_product'=>'required',
            'id_user'=>'required'
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
        $reviews=new Review();
        $reviews->stars=$request->stars;
        $reviews->id_product=$request->id_product;
        $reviews->id_user=$request->id_user;
        $reviews->save();
        return response()->json([
            'status'=>'success',
            'message'=>'Review OK',
        ],200);
    }
    }
    public function doMedia(Request $request){
        $reglas=Validator::make($request->all(),[
            'file'=>'required',
            'id_product'=>'required',

        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
        $productmedias=new ProductMedia();
        $productmedias->file=$request->file;
        $productmedias->id_product=$request->id_product;
        $productmedias->save();
        return response()->json([
            'status'=>'success',
            'message'=>'Media OK',
        ],200);
    }
    }
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:3',
            'price'=>'required',
            'condition'=>'required|min:4',
            'description'=>'required|min:4',
            'ship'=>'required',
            'stock'=>'required',
            'size'=>'required',
            'status'=>'required|min:4',
            //'slug'=>'required|min:4',
            'id_category'=>'required',
            'id_user'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->img = 'defaultproduct.jpg';
            $product->condition = $request->condition;
            $product->description = $request->description;
            $product->ship = $request->ship;
            $product->stock = $request->stock;
            $product->size = $request->size;
            $product->status = $request->status;
            //$product->slug = $request->slug;
            $product->id_category = $request->id_category;
            $product->id_user = $request->id_user;
            $product->save();
            return response()->json([
                'status'=>'succes',
                'data'=>$product
            ]);
        }//llave del else
    }//llave store


    public function update(Request $request,$id){
        if(!Product::where('id',$id)->exists()){
            return response()->json([
                'status'=>'error',
                'data'=>'User not found'
            ],201);    
        }
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:3',
            'price'=>'required',
            'condition'=>'required|min:4',
            'description'=>'required|min:4',
            'ship'=>'required',
            'stock'=>'required',
            'size'=>'required',
            'status'=>'required|min:4',
            'slug'=>'required|min:4',
            'id_category'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error de validacion',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->condition = $request->condition;
            $product->description = $request->description;
            $product->ship = $request->ship;
            $product->stock = $request->stock;
            $product->size = $request->size;
            $product->status = $request->status;
            $product->slug = $request->slug;
            $product->id_category = $request->id_category;
            $product->save();
            return response()->json([
                'status'=>'succes',
                'data'=>$product
            ]);
        }//llave del else
    }//llave update
    public function show($id){
        if(Product::where('slug',$id)->exists()){
            $product = Product::where('slug',$id)->first();
            return response()->json([
                'status'=>'success',
                'data'=>$product
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Product not found'
            ],201);
        }//llave else
    }//llave show
    public function destroy($id){
        if(Product::where('id',$id)->exists()){
            $product= Product::find($id);
            $media=ProductMedia::where('id_product',$id);
            $like=Like::where('id_product',$id);
            $review=Review::where('id_product',$id);
            $question=Question::where('id_product',$id);
            $media->delete();
            $like->delete();
            $review->delete();
            $question->delete();
            $product->delete();
            return response()->json([
                'status'=>'succes',
                'message'=>'Product deleted'
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Product not found'
            ],201);
        }//llave else
    }//llave destroy
}
