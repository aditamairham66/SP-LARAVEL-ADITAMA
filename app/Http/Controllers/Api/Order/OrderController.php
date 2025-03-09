<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\AddRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();

        return response()->json([
            "status" => Response::HTTP_ACCEPTED,
            "data" => $order,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddRequest $request)
    {
        $save = new Order();
        $save->customer_id = $request->customer_id;
        $save->order_date = $request->order_date;
        $save->total_price = $request->total_price;
        $save->status = $request->status;
        $save->save();

        return response()->json([
            "status" => Response::HTTP_ACCEPTED,
            "message" => "Successfully insert customer"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return response()->json([
            "status" => Response::HTTP_ACCEPTED,
            "data" => $order,
        ]);
    }
}
