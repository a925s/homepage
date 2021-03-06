<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Group;
use App\Schedule;
use App\Schedule_user;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *  Home表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getHome(Request $request)
    {
        $articles = Article::orderBy('created_at', 'desc')->limit(3)->get();
        $users = User::orderBy('created_at', 'asc')->get();
        $groups = Group::get();

        $schedules = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->limit(5)->get();
        $first = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->first();
        $count = 0;
        return view('homepages.index', [
            'articles' => $articles,
            'users' => $users,
            'groups' => $groups,
            'schedules' => $schedules,
            'first' => $first,
            'count' => $count
        ]);
    }

    /**
     *  HomeNext表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getHomeNext(Request $request)
    {
        $articles = Article::orderBy('created_at', 'desc')->limit(3)->get();
        $users = User::orderBy('created_at', 'asc')->get();
        $groups = Group::get();

        $schedules = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->limit(5)->get();
        $first = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->first();
        $count = 0;
        return view('homepages.home', [
            'articles' => $articles,
            'users' => $users,
            'groups' => $groups,
            'schedules' => $schedules,
            'first' => $first,
            'count' => $count
        ]);
    }
}
