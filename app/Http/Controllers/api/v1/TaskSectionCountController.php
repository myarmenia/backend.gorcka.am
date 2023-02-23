<?php

namespace App\Http\Controllers\api\v1;

use App\Events\ExecutorSectionTaskCountEvent;
use App\Events\SectionTaskCountEvent;
use App\Http\Controllers\Controller;
use App\Services\ExecutorTaskCountService;
use App\Services\TaskCountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskSectionCountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {

        $user_id = Auth::user()->id;
        $notappliedtaskservice = TaskCountService::notappliedtask($user_id);
        $respondedtaskService = TaskCountService::respondedExecutor($user_id);
        $inprocesstaskservice = TaskCountService::inProcessTask($user_id);
        $completedtaskservice = TaskCountService::completedTasks($user_id);
        $specialtaskcountservice = TaskCountService::specialTaskcount($type,$user_id);
        $arr=[
            'user_id' => $user_id,
            'notappliedtask' => $notappliedtaskservice,
            'respondedtask' => $respondedtaskService,
            'inprocesstask' => $inprocesstaskservice,
            'completedtask' => $completedtaskservice,
            'specialtask'=> $specialtaskcountservice
        ];


        event(new SectionTaskCountEvent($user_id,$arr));

        return response()->json($arr);

    }
    public function executor($type){

       $user_id = Auth::id();
    //    $showalltasktoexecutorservice = ExecutorTaskCountService::showalltasktoexecutor($user_id );
    //    $respondedtaskforexecutorservice = ExecutorTaskCountService::respondedtaskforexecutor( $user_id );
    //    $tasksinprogressforexecutorservice = ExecutorTaskCountService::tasksinprogressforexecutor( $user_id );
    //    $completedtaskexecutorservice = ExecutorTaskCountService::completedtasksforexecutor( $user_id );
    //    $specialtaskexecutorservice = ExecutorTaskCountService::specialtaskexecutor($type,$user_id );

    //     $exec_arr=[
    //         'user_id' => $user_id,
    //         'showalltasktoexecutor' => $showalltasktoexecutorservice['task_length'],
    //         'respondedtaskforexecutor' => count($respondedtaskforexecutorservice),
    //         'tasksinprogressforexecutor' => count($tasksinprogressforexecutorservice),
    //         'completedtaskexecutor'  => count($completedtaskexecutorservice),
    //         'specialtaskexecutor'=> count($specialtaskexecutorservice)
    //     ];

    //     event(new ExecutorSectionTaskCountEvent($user_id,$exec_arr));

        $get_executor_tasks_section_count=ExecutorTaskCountService::get($type,$user_id);

        return response()->json($get_executor_tasks_section_count);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
