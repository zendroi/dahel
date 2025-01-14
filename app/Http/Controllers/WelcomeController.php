<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 
class WelcomeController extends Controller 
{ 
    function index() 
    { 
        $pageTitle = 'Jelajah Desa'; 
 
        return view('welcome', ['pageTitle' => $pageTitle]); 
    }
}
   