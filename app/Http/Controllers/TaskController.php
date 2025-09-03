<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;



class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Auth::user()->tasks;
        return view('/', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:tasks',
            'description' => 'nullable|string|max:500',
            'priority' => 'required|in:low,medium,high',
            'due_date' => 'nullable|date',
        ]);
        $validated['user_id'] = Auth::id();
        Task::create($validated);
        return redirect('/');
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:tasks,title,' . $task->id,
            'description' => 'nullable|string|max:500',
            'priority' => 'required|in:low,medium,high',
        ]);

        $task->update($validated);
        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

    public function markAsCompleted(Task $task)
    {
        $user = Auth::user();
        if ($user) {
            $user->addPoints(10);
        }
        $task->delete();
        return redirect('/');
    }
}
