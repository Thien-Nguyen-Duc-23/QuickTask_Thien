<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\QuickTask;
use Illuminate\Support\Facades\Session;

class QuickTasks extends Controller
{
    public function getIndex(){
    	$listTask = Task::orderBy('created_at', 'asc')->get();
    	return view('tasks',compact('listTask'));
    }

    public function postTask(QuickTask $req){
	    $task = new Task;
	    $task->name = $req->name;
	    $task->save();
	    return redirect()->route('getIndex')->with(['flag'=>'success','message'=>trans('home.message')]);
    }

    public function getDeleteTask(Request $req, $id){
        try {
            $delete = Task::find($id);
            $delete->delete($id);
            $req->session()->flash('message', trans('home.messageDelete'));
        } catch (Exception $ex) {
            $req->session()->flash('errors', $ex->getMessage());
        }
        return redirect()->route('getIndex');
    }
}
