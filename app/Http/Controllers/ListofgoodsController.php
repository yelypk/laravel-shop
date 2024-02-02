<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class ListofgoodsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('listofgoods', [
        ]);
    }
}


