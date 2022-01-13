<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     *  ニュース記事一覧(Home)
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getArticle(Request $request)
    {
        $articles = Article::orderBy('created_at', 'asc')->get();
        return view('homepages.index', [
            'articles' => $articles,
        ]);
    }
}
