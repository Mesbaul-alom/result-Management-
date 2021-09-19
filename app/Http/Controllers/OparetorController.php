<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class OparetorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('oparetor.index');
    }

   
}
