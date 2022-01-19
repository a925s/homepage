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
        $groups = Group::get();
        $users = User::orderBy('created_at', 'asc')->get();
        return view('admins.admin_profile', [
            'groups' => $groups,
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
        if(empty($groups)){
            $this->validate($request, Group::$rules);
            $group = new Group;
            $group->message = $request->message;
            $group->save();

        }else{
            $this->validate($request, Group::$rules);
            $group = Group::find(1);
            $group->message = $request->message;
            $group->save();
        }

        return redirect('/admin/profile');
    }
}
