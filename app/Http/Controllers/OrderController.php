<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{

    function neworder()
    {
     return view('neworder');
    }
   public function createorder(Request $request){
        $rules = [
			'productId' => 'required|numeric',			
			'totalQty' => 'required|numeric',
                        'rejectQty' => 'required|numeric',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('neworder')
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
				return redirect('neworder')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('neworder')->with('failed',"operation failed");
			}
		}
    }

     function vieworders(){

     $orders= DB::table('orders')->get();
     return view('orders_view',['orders' => $orders]);

    }

     function edit(Request $request,$id) {

     $request->validate([
                'rejectQty' => 'required|numeric',
                'statusId' => 'required|numeric',
                      ]);
     $rejectQty = $request->input('rejectQty');
     $statusId = $request->input('statusId');
     $dateCollection = $request->input('dateCollection');
     $dateReturn = $request->input('dateReturn');

     //$data=array('rejectQty'=>$rejectQty,"statusId"=>$statusId,"dateCollection"=>$dateCollection,"dateReturn"=>$dateReturn);

     try{
      //DB::table('orders')->update($data);
      //DB::table('orders')->whereIn('id', $id)->update($request->all());
      DB::update('update orders set rejectQty = ?,statusId=?,dateCollection=?,dateReturn=? where id = ?',[$rejectQty,$statusId,$dateCollection,$dateReturn,$id]);
       return redirect('vieworders')->with('status',"Insert successfully");		
	}
       catch(Exception $e){
       return redirect('vieworders')->with('failed',"operation failed");
	}
    }

    public function show($id) {
    $orders = DB::select('select * from orders where id = ?',[$id]);
    return view('updateorder',['orders'=>$orders]);
   }
}
