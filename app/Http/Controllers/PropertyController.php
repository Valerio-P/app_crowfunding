<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function userProperties()
    {

        $user = Auth::user();

        $user_properties = $user->properties()->get();

        return response()->json($user_properties);
    }
}
