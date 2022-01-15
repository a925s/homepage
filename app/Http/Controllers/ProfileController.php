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
     *  USER_PROFILE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getUserProfile(Request $request, $id)
    {
        $user = User::find($id);
        $name = $user->name;
        $catchcopy = $user->catchcopy;
        $message = $user->message;
        $image_name = $user->image_name;
        $image_path = $user->image_path;

        $users = User::where('id', '!=', $id)->orderBy('created_at', 'asc')->get();
        return view('homepages.profile', [
            'user' => $user,
            'name' => $name,
            'catchcopy' => $catchcopy,
            'message' => $message,
            'image_name' => $image_name,
            'image_path' => $image_path,
            'users' => $users
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
        $this->validate($request, Group::$rules);
        $group = Group::find(1);
        $group->message = $request->message;
        $group->save();
        return redirect('/admin/profile');
    }

    
}
