<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function list_register(Request $request, User $user, DataTables $datatables)
    {
        if( $request->ajax() )
            return $datatables::of($user->query()->with('profile'))->make(true);
    }
}