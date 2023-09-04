<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
}
