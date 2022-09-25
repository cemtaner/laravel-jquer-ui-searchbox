<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()->orderBy('id','asc')->get();
        return view('articles',compact('articles'));
    }

    public function searchArticle(Request $request)
    {
        $data = Article::query()
            ->select("title as value", "id")
            ->where('title', 'LIKE', '%'. $request->get('search'). '%')
            ->get();
    
        return response()->json($data);
    }
}
