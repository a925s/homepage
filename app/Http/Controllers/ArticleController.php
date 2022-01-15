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
        $articles = Article::orderBy('created_at', 'desc')->paginate(20);
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
        $articles = Article::orderBy('created_at', 'desc')->paginate(20);
        return view('admins.admin_news', [
            'articles' => $articles,
        ]);
    }

    /**
     *  ARTICLE追加
     * 
     *  @param Request $request
     *  @return Response
     */
    public function createArticle(Request $request)
    {
        $this->validate($request, Article::$rules);
        $article = new Article;
        $article->title = $request->title;
        $article->message = $request->message;
        $article->save();
        return redirect('/admin/news');
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
            'id' => $id,
            'title' => $title,
            'message' => $message,
        ]);
    }

    /**
     *  ARTICLE編集
     * 
     *  @param Request $request
     *  @return Response
     */
    public function updateArticle(Request $request)
    {
        $this->validate($request, Article::$rules);
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->message = $request->message;
        $article->save();
        return redirect('/admin/news');
    }

    /**
     *  ARTICLE削除
     * 
     *  @param Request $request
     *  @return Response
     */
    public function deleteArticle(Request $request)
    {
        Article::find($request->id)->delete();
        return redirect('/admin/news');
    }
}

