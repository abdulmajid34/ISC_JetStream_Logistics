<?php

namespace App\Http\Controllers;

use App\Models\CustomerList;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCustomerList()
    {
        return view('customer.customerList', [
            'customerList' => CustomerList::all()
        ]);
    }
}
