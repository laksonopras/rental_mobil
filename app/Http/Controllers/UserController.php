<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $rules = array(
            'username' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'no_telp' => ['required'],
            'password' => ['required'],
        );

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->messages()->first()
            ]);
        } else {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'password' => Hash::make($request->password),
            ]);
            return view(); 
        }
    }

    public function login(Request $request)
    {
        $rules = array(
            'email' => ['required', 'email'],
            'password' => ['required']
        );
        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->messages()->first()
            ]);
        } else {
            $credentials = request(['email', 'password']);
            if (!$token = Auth::guard('user')->attempt($credentials)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email and password invalid.'
                ]);
            }
            $user = User::where('email', $request->email)->first();
            $user->token = $token;
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'successfully login',
                'token' => $user->token,
                'user' => $user
            ]);
        }
    }

    public function logout()
    {
        $user = user::where('email', auth('user')->user()->email)->first();
        $user->token = null;
        $user->save();
        auth('user')->logout();
        return response()->json([
            'status' => true,
            'message' => 'Successfully logged out'
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();

        return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        return view(); //isi view disini
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        return view(); //isi view disini
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
