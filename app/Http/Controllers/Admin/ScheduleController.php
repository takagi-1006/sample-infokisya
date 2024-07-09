<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Illuminate\Http\Response;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(): Collection
    {
        $schedules = Schedulers::all();

        return $schedules;
    }
}
