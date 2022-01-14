<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     *  NEWS表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getNews(Request $request)
    {
        $articles = Article::orderBy('created_at', 'asc')->paginate(20);
        return view('homepages.news', [
            'articles' => $articles,
        ]);
    }

    /**
     *  ARTICLE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getNewsArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $title = $article->title;
        $message = $article->message;
        $date = $article->created_at->format('Y-m-d');
        return view('homepages.news_article', [
            'title' => $title,
            'message' => $message,
            'date' => $date
        ]);
    }

    /**
     *  ADMIN_NEWS表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getAdminNews(Request $request)
    {
        $articles = Article::orderBy('created_at', 'asc')->paginate(20);
        return view('admins.admin_news', [
            'articles' => $articles,
        ]);
    }

    /**
     *  ADMIN_EDIT_ARTICLE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getEditNewsArticle(Request $request, $id)
    {
        $article = Article::find($id);
        $title = $article->title;
        $message = $article->message;
        return view('admins.admin_news_edit', [
            'title' => $title,
            'message' => $message,
        ]);
    }
}

