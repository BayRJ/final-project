<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //Define the table name associated with the model
    protected $table = 'products';


    //Specify the columns that can be mass-assigned
    protected $fillable = ['name', 'description', 'quantity', 'price'];


    //Add a new product to the database
    public static function addItem($name, $description, $quantity, $price)
    {
        return self::create([
            'name' => $name,
            'description' => $description,
            'quantity' => $quantity,
            'price' => $price,
        ]);
    }


    //Update an existing inventory item by its ID

    public static function updateItem($id, $name, $description, $quantity, $price)
    {
        $item = self::find($id);
        if ($item) {
            $item->update([
                'name' => $name,
                'description' => $description,
                'quantity' => $quantity,
                'price' => $price,
            ]);
        }
        return $item; //Return the updated item, or null if not found 
    }

    //Delete an inventory items by its ID
    public static function deleteItem($id)
    {
        $item = self::find($id); // Find the item by its ID
        if ($item) {
            $item->delete(); //Delete the item
        }
        return $item; //Return the deleted item, or null if not found
    }
}
