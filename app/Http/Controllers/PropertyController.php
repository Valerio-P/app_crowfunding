<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function allProperties()
    {

        $properties = Property::all();

        return $properties;
    }

    public function show(Request $request, $id)
    {

        $property = Property::find($id);

        if ($property) {

            return $property;
        }

        return response()->json("The property don't exist");
    }
}
