<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showItemList()
    {
        return view('items.itemList', [
            'itemList' => Item::all()
        ]);
    }
}
