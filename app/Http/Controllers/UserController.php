<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']); 
    }

    public function uploadDocuments(Request $request) {

        $auth_user = $request->user();

        $auth_user->addMedia($request->document)
            ->preservingOriginal()
            ->toMediaCollection();
    
    
        return response('success', 200);

    }

    // User options

    public function destroy(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $check = Hash::check($request['password'], $user->password);

        if ($check) {

            Auth::logout();
    
            $user->delete();
        
            return redirect('/')->with('global', 'Your account has been deleted!');
        }
    
        return redirect()->back()->with('message', 'Password does not match');
    }
}
