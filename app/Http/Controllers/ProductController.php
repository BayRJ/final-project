<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get all the products
        $productItems = ProductModel::all();

        //Show the product list page and send all the items to it
        return view('products.index', compact('productItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Show the page where users can add a new item.

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Check if the user entered everything correctly
        $validated = $request->validate([
            'name' => 'required|string|min:3', //Name must have at least 3 letters
            'description' => 'required|string|min:20', //Description must have at least 20 words
            'quantity' => 'required|integer|min:0', //Quantity must be a number and not a negative
            'price' => 'required|numeric|min:0', // Price must be a number or decimal and not a negative
        ]);

        //Save the new item to the inventory.
        ProductModel::create($validated);

        //Go back to the list of items and show a success 
        return redirect()->route('products.index')
            ->with('success', 'Item added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Find the item by its ID.

        $productItem = ProductModel::find($id);

        //If the item is not found, go back to the list with an error message.
        if (!$productItem) {
            return redirect('/')
                ->with('error', 'Item not found');
        }

        //Show the page to edit the item.
        return view('products.show', compact('productItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    public function edit($id)
    {
        $fetchedRecord = ProductModel::where('id', $id)->first();
        return view('products.edit', $fetchedRecord->toArray());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Check if the user entered everything correctly.

        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:20',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0'
        ]);

        // Find the item by its ID.
        $productItem = ProductModel::find($id);

        // If the item is not found, go back to the list with an error message.

        if (!$productItem) {
            return redirect('/')
                ->with('error', 'Item not found.');
        }

        //Update the item with the new details.

        $productItem->update($validated);

        // Go back to the list of items and show a success message.
        return redirect()->route('products.index')
            ->with('success', 'Item updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Find the item by its ID.
        $productItem = ProductModel::find($id);

        // IF the item is not found, go back to the list with an error message.

        if (!$productItem) {
            return redirect()->route('products.index')
                ->with('error', 'Item not found');
        }

        //Remove the item from the inventory
        $productItem->delete();

        // Go back to the list of items and show a success message.
        return redirect()->route('products.index')
            ->with('success', 'Item deleted successfully.');
    }
}
