<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\User;
use App\Schedule_User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     *  SCHEDULE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getSchedule(Request $request)
    {
        $schedules = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->paginate(20);
        $first = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->first();
        $count = 0;
        return view('homepages.schedule', [
            'schedules' => $schedules,
            'first' => $first,
            'count' => $count
        ]);
    }

    /**
     *  ADMIN_SCHEDULE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getAdminSchedule(Request $request)
    {
        $schedules = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->get();
        $first = Schedule::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->first();
        $count = 0;
        $users = User::orderBy('created_at', 'asc')->get();
        return view('admins.admin_schedule', [
            'schedules' => $schedules,
            'first' => $first,
            'count' => $count,
            'users' => $users
        ]);
    }

    /**
     *  SCHEDULE追加
     * 
     *  @param Request $request
     *  @return Response
     */
    public function createSchedule(Request $request)
    {
        $this->validate($request, Schedule::$rules);
        $schedule = new Schedule;
        $schedule->title = $request->title;
        $schedule->start_date = $request->start_date;
        $schedule->start_time = $request->start_time;
        $schedule->save();

        foreach($request->users as $user){
            $schedule->users()->attach($user);
        }

        return back();
    }

    /**
     *  SCHEDULE削除
     * 
     *  @param Request $request
     *  @return Response
     */
    public function deleteSchedule(Request $request)
    {
        Schedule::find($request->id)->delete();
        return redirect('/admin/schedule');
    }
}
