<?php

namespace App\Http\Controllers;

use App\Guideline;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    /**
     *  GUIDELINE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getGuideline(Request $request)
    {
        $guidelines = Guideline::get();
        return view('homepages.guideline', [
            'guidelines' => $guidelines,
        ]);
    }

    /**
     *  ADMIN_GUIDELINE表示
     * 
     *  @param Request $request
     *  @return Response
     */
    public function getAdminGuideline(Request $request)
    {
        $guidelines = Guideline::get();
        return view('admins.admin_guideline', [
            'guidelines' => $guidelines,
        ]);
    }

    /**
     *  GUIDELINE編集
     * 
     *  @param Request $request
     *  @return Response
     */
    public function updateGuideline(Request $request)
    {
        $this->validate($request, Guideline::$rules);
        $guideline = Guideline::find(1);
        $guideline->message = $request->message;
        $guideline->save();

        return redirect('/admin/guideline');
    }
}
