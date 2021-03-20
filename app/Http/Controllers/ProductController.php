<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\Product;
use Auth;

class ProductController extends Controller
{              
 function newproduct()
    {
     return view('newproduct');
    }
   public function createproduct(Request $request){
        $rules = [ 
			'name' => 'required|string',	
 		        'description' => 'required|string',
			'price' => 'required|numeric',
                        'rejectFee' => 'required|numeric',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('newproduct')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$product = new Product;
                                $product->name = $data['name'];
                                $product->description = $data['description'];
                                $product->price = $data['price'];
                                $product->rejectFee = $data['rejectFee'];
                           	$product->save();
				return redirect('newproduct')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('newproduct')->with('failed',"operation failed");
			}
		}
    }

function viewproducts()
    {
     $products= DB::table('products')->get();
     return view('viewproducts',['products' => $products]);
    }

    public function show($id) {
    $products = DB::select('select * from products where id = ?',[$id]);
    return view('neworder1',['products'=>$products]);
    }
       function neworder1()
    {
     return view('neworder1');
    }
       function createorder1 (Request $request){
        $rules = [
			'productId' => 'required|numeric',			
			'totalQty' => 'required|numeric', 
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('neworder1')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$order = new Order;
                                $order->productId = $data['productId'];
                                $order->userId = Auth::user()->id;
                                $order->totalQty = $data['totalQty'];
                                $order->rejectQty = 0;
                                $order->statusId = 1;
				$order->save();
				return redirect('viewproducts')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('viewproducts')->with('failed',"operation failed");
			}
		}
    }

   
}
