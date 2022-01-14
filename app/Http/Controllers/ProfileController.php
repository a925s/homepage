<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     *  ADMIN_GROUP_PROFILE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getAdminProfile(Request $request)
    {
        $groups = Group::get();
        return view('admins.admin_profile', [
            'groups' => $groups,
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
