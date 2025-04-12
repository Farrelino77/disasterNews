<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = News::with(['user', 'category'])
            ->latest() 
            ->take(3) 
            ->get();
            
        // Pass articles to the view
        return view('pages.landing', compact('articles'));
    }
}