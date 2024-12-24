<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();
        return response()->json([
            'status' => true,
            'message' => 'Menu items retrieved successfully',
            'data' => $menuItems
        ], 200);
    }

    public function show($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        return response()->json([
            'status' => true,
            'message' => 'Menu item found successfully',
            'data' => $menuItem
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
            'description' => 'required|string'
        ]);
        

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $menuItem = MenuItem::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Menu item created successfully',
            'data' => $menuItem
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $menuItem = MenuItem::findOrFail($id);
        $menuItem->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Menu item updated successfully',
            'data' => $menuItem
        ], 200);
    }

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Menu item deleted successfully'
        ], 204);
    }
}
