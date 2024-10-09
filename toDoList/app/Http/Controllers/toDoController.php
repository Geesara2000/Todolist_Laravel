<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class toDoController extends Controller
{

    protected $task;

    public function __construct()
    {
        $this->task = new Todolist();
    }

    public function index(){
        $response['tasks'] = $this->task->all();
        return view('pages/todo/index')->with($response);
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->back();
    }

    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();
        return redirect()->back();
    }

    public function done($task_id){
        $task = $this->task->find($task_id);
        $task->done=1;
        $task->update();
        return redirect()->back();
    }

}
