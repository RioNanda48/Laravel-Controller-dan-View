<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $name = 'Rio';

    return view('index',compact('name'));
    }

    public function profile()
    {
    $name = 'Rio Nanda Prasetyo';
    $hobi = 'Main Game | Begadang | Nonton Anime | Badminton | futsal | Night Ride';

    $data['name'] = $name;
    $data['hobi'] = $hobi;
    

    return view('profile', $data);
    }

    public function uni()
    {
    $name = 'Universitas AKI';
    return view('uni',compact('name'));
    }
}
