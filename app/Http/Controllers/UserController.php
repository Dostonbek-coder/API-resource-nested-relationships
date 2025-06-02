<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return response()->json(UserResource::collection($users));
    }
    public function store(Request $request){
        
    }
}


