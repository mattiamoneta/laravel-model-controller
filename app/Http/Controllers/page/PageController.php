<?php



namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class PageController extends Controller
{
    public function index(){

       
        $movies = [
            "table" => Movie::all()
        ];

        return view('index', $movies);
    }
}
