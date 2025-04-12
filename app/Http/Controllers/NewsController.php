<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::with('user', 'category')
            ->latest();
            
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%");
        }
        
        $articles = $query->paginate(12);
        
        return view('pages.article.index', compact('articles'));
    }
    
    public function show($id)
    {
        $article = News::with('user', 'category')->findOrFail($id);
        
        return view('pages.article.show', compact('article'));
    }
}