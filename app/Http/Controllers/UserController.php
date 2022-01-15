<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *  USER追加
     * 
     *  @param Request $request
     *  @return Response
     */
    public function createUser(Request $request)
    {
        $request->validate([
            'image' => 'required|file|image'
        ]);
        $upload_image = $request->file('image');

        if($upload_image){
            $path = $upload_image->store('uploads', "public");
            if($path){
                $this->validate($request, User::$rules);
                $user = new User;
                $user->name = $request->name;
                $user->catchcopy = $request->catchcopy;
                $user->message = $request->message;
                $user->image_name = $upload_image->getClientOriginalName();
                $user->image_path = $path;
                $user->save();
            }
        }

        return redirect('/admin/profile');
    }

    /**
     *  ADMIN_PROFILE_USER表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getEditUser(Request $request, $id)
    {
        $user = User::find($id);
        $name = $user->name;
        $catchcopy = $user->catchcopy;
        $message = $user->message;
        $image_name = $user->image_name;
        $image_path = $user->image_path;
        return view('admins.admin_user', [
            'user' => $user,
            'id' => $id,
            'name' => $name,
            'catchcopy' => $catchcopy,
            'message' => $message,
            'image_name' => $image_name,
            'image_path' => $image_path,
        ]);
    }

    /**
     *  USER編集
     * 
     *  @param Request $request
     *  @return Response
     */
    public function updateUser(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);

        if($request->image){
            $request->validate([
                'image' => 'file|image'
            ]);
            $upload_image = $request->file('image');

            if($upload_image){
                $path = $upload_image->store('uploads', "public");
                if($path){
                    $user->image_name = $upload_image->getClientOriginalName();
                    $user->image_path = $path;
                }
            }
        }

        $user->name = $request->name;
        $user->catchcopy = $request->catchcopy;
        $user->message = $request->message;
        $user->save();

        return redirect('/admin/profile');
    }

    /**
     *  USER削除
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
