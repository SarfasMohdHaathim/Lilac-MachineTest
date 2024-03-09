<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
                $users = User::where('name', 'LIKE', "%$query%")
                ->orWhere('phone_number', 'LIKE', "%$query%")
                ->orWhereHas('department', function($q) use ($query) {
                    $q->where('name', 'LIKE', "%$query%");
                })
                ->orWhereHas('designation', function($q) use ($query) {
                    $q->where('name', 'LIKE', "%$query%");
                })
                ->orderBy('name')
                ->get();
        } else {
            $users = User::all();
        }

        if ($request->ajax()) {
            return view('user_cards', compact('users'));
        }

        return view('index', compact('users'));
    }
}
