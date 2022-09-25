<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        
        $order = Order::where(['is_confirmed' => 1])->get();

        return view('Backend.order.index',['order' => $order, 'menu' =>'order']);
    }

    public function invoice($id)
    {
    
        $invoice = Order::where(['id'=> $id])->with('billing')->with('shipping')->first();
        $orderDetails = OrderDetails::where(['order_id'=> $invoice->id])->with('order')->with('product')->get();
        
        return view('Backend.order.invoice',['invoice' => $invoice,'orderDetails'=>$orderDetails]);
    }
}
