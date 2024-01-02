<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;
 
    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {   
        $whereClause = ['status' => 'true', 'user_id' => $request->user()->id];
        $tasks = Task::where($whereClause)->orderBy('created_at', 'asc')->get();
        
        return view('tasks.index', [           
            //'tasks' => $this->tasks->forUser($request->user()),
            'tasks' => $tasks
        ]);
        
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
    
        // Create The Task...
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);
     
        return redirect('/tasks');
    }

    /**
     * Update the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function Update(Request $request, Task $task)
    {
        $this->authorize('update', $task);
    
        // update The Task...
        $task = $task->find($task->id);        
        $task->status = 0;
        $task->update();
 
        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);
    
        // Delete The Task...
        $task->delete();
 
        return redirect('/tasks');
    }
}
