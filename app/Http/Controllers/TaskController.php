<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     *  TASK追加
     * 
     *  @param Request $request
     *  @return Response
     */
    public function createTask(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        $task->question = $request->question;
        $task->answer = $request->answer;
        $task->user_id = $request->user_id;
        $task->save();
        return redirect(route('edit.user', [
            'id' => $request->user_id,
        ]));
    }
}
