<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::index();
        
        $inventory->json_encode();
        /* return $response->
        ; */
        /* $response = {

        } */
    }

    public function show()
    {
        $inventory = Inventory::index();
        
        $inventory->json_encode();
    
        /* return [
            $request->json_decode
            ('texto',$inventory)]; */
    }

    public function create(Request $request)
    {

    }

    //si
    public function store(Request $request)
    {

    }

    public function edit(Request $request)
    {

    }

    //si
    public function update($id ,Request $request)
    {

    }

    public function delete(Request $request)
    {

    }

    //si
    public function destroy($id, Request $request)
    {

    }
}
