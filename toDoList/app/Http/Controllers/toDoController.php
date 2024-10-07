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
        return view('pages/todo/index');
    }

    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->back();
    }
}
