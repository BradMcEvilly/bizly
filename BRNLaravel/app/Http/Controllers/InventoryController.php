<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();

        return response()->json($inventories);
    }
}
