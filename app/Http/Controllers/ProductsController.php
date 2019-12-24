<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    function new_product(Request $request)
    {
       // dd($request->name);

       $products = Products::where('id', '=', $request->id)->first();
       if($products)
       {
        $products->name = $request->name;

        if($products->save())
           {
           return "data updated";
           }
           else
           {
            return "saveing Faled";
           }
       }
       else
       {

           $products = new Products();

           $products->name = $request->name;

           if($products->save())
           {
               return json_encode($products);
           }
           else
           {
               return "not saved";
           }
       }

    }
}
