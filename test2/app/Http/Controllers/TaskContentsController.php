<?php

/***************************************************************************************
* FileName      : TaskContentsController.php
* Description   : 주간업무보고시스템 Controller
* Company       : (주)한국공학기술연구원
* Author        : 김건영
* Created Date  : 2020.12.28
* Modifide Date : 2021.01.05 : KGY : 보고서 열람 시 빈 페이지 추가
                  2021.01.07 : KGY : 주간, 일일 별로 업무 보고서 분리
* Reference     :
***************************************************************************************/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskContents;

class TaskContentsController extends Controller
{
    /* START : 2020.12.28 : KGY : 메인페이지 보고서 작성 날짜 검색 기능. */

    public function list(Request $request)
    {
      if(!isset($request->input_date)){
        $date = getTheFirstMondayOfWeek();
      }
      else
        $date = $request->input_date;

      return view('ctm.main', ['date'=>$date]);
    }

    /* END */


    /* START : 2020.12.28 : KGY : 메인페이지 */
    public function main(Request $request)
    {
      $date = getTheFirstMondayOfWeek();

      return view('ctm.main', ['date'=>$date]);
    }

    /* END */


    /* START : 2020.12.28 : KGY : 보고서 작성하기 */

    public function create(Request $request)
    {


      $date = date('Y-m-d');

      return view('ctm.create', ['date'=>$date]);
    }

    public function store(Request $request)
    {
      TaskContents::create(request()->validate([
        'name' => ['required'],
        'date' => ['required'],
        'lastweek_start' => [''],
        'lastweek_end' => [''],
        'thisweek_start' => [''],
        'thisweek_end' => [''],
        'complete' => [''],
        'incomplete' => [''],
        'monday_am_before' => [''],
        'monday_pm_before' => [''],
        'tuesday_am_before' => [''],
        'tuesday_pm_before' => [''],
        'wednesday_am_before' => [''],
        'wednesday_pm_before' => [''],
        'thursday_am_before' => [''],
        'thursday_pm_before' => [''],
        'friday_am_before' => [''],
        'friday_pm_before' => [''],
        'weekend_am_before' => [''],
        'weekend_pm_before' => [''],
        'monday_am_after' => [''],
        'monday_pm_after' => [''],
        'tuesday_am_after' => [''],
        'tuesday_pm_after' => [''],
        'wednesday_am_after' => [''],
        'wednesday_pm_after' => [''],
        'thursday_am_after' => [''],
        'thursday_pm_after' => [''],
        'friday_am_after' => [''],
        'friday_pm_after' => [''],
        'weekend_am_after' => [''],
        'weekend_pm_after' => [''],
        'etc' => [''],
        'help' => [''],
      ]));

      return redirect("/ctm");
    }

    /* END */


    /* START : 2020.12.28 : KGY : 보고서 열람하기 */

    public function show($date = 0, $name, Request $request, $how)
    {
        // request가 없고 date가 있으면 date 출력
      if(!isset($request->input_date)){
        // request가 없고 date가 0일 경우 이번주 월요일 출력
        if($date == 0){ $date = getTheFirstMondayOfWeek(); }
      }
      else{
        // request가 있으면 request 출력
        $date = $request->input_date;
      }

        $ctm = TaskContents::where(['name'=>$name, 'thisweek_start'=>$date])->first();
        $thisweek_start_before = getTheFirstMondayOfLastWeek($date);
        $ctm_week = TaskContents::where(['name'=>$name, 'thisweek_start'=>$thisweek_start_before])->first();

    /* 2021.01.05 : KGY : 보고서가 없을 때 빈 페이지 출력 */
    /* 2021.01.07 : KGY : 일일, 주간 업무 보고로 페이지 분리 */
      if(isset($ctm))
    /* 일일 업무 보고 */
        if($how == 'daily'){ return view('ctm.showDaily', ['ctm'=>$ctm, 'date'=>$date, 'how'=>$how]); }
    /* 주간 업무 보고 */
        else{ return view('ctm.showWeekly', ['ctm'=>$ctm, 'date'=>$date, 'ctm_week'=>$ctm_week, 'how'=>$how]); }
      else
    /* 빈 페이지 출력 */
        return view('ctm.showEmpty', ['ctm'=>$ctm, 'date'=>$date, 'how'=>$how]);

    }

    /* END */


    /* START : 2020.12.28 : KGY : 보고서 수정하기 */

    public function edit(TaskContents $ctm, Request $request)
    {

      $date = $ctm->thisweek_start;

      return view('ctm.edit', ['ctm'=>$ctm, 'date'=>$date]);
    }

    public function update(Request $request, TaskContents $ctm)
    {


      $ctm->update(request(['name', 'date', 'lastweek_start', 'lastweek_end', 'thisweek_start', 'thisweek_end',
       'complete', 'incomplete', 'monday_am_before', 'monday_pm_before', 'tuesday_am_before', 'tuesday_pm_before',
    'wednesday_am_before', 'wednesday_pm_before', 'thursday_am_before', 'thursday_pm_before', 'friday_am_before', 'friday_pm_before', 'weekend_am_before', 'weekend_pm_before',
     'monday_am_after', 'monday_pm_after', 'tuesday_am_after', 'tuesday_pm_after', 'wednesday_am_after', 'wednesday_pm_after', 'thursday_am_after', 'thursday_pm_after',
      'friday_am_after', 'friday_pm_after', 'weekend_am_after', 'weekend_pm_after', 'etc', 'help']));

      $date = $ctm->thisweek_start;

      if(!isset($date))
        $date = date('Y-m-d');


      return redirect("/ctm/date/".$date."/".$ctm->name."/daily");
    }

    /* END */
}
