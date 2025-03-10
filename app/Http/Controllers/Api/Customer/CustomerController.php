<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Customer\AddRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return response()->json([
            "status" => Response::HTTP_ACCEPTED,
            "data" => $customers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddRequest $request)
    {
        $save = new Customer();
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->save();

        return response()->json([
            "status" => Response::HTTP_ACCEPTED,
            "message" => "Successfully insert customer"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return response()->json([
            "status" => Response::HTTP_ACCEPTED,
            "data" => $customer,
        ]);
    }
}
