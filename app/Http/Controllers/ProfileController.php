<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     *  HOME_PROFILE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getHomeProfile(Request $request)
    {
        $users = User::orderBy('created_at', 'asc')->get();
        $groups = Group::get();
        return view('homepages.profile_home', [
            'users' => $users,
            'groups' => $groups,
        ]);
    }

    /**
     *  ADMIN_PROFILE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getAdminProfile(Request $request)
    {
        $group = Group::first();
        $users = User::orderBy('created_at', 'asc')->get();
        return view('admins.admin_profile', [
            'group' => $group,
            'users' => $users
        ]);
    }

    /**
     *  GROUP_PROFILE編集
     * 
     *  @param Request $request
     *  @return Response
     */
    public function updateGroupProfile(Request $request)
    {
        $this->validate($request, Group::$rules);
        $group = Group::first();
        if($group === null){
            $group = new Group;
            $group->message = $request->message;
            $group->save();
        }else{
            $group->message = $request->message;
            $group->save();
        }

        return redirect('/admin/profile');
    }
}
