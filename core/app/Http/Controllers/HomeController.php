<?php

namespace App\Http\Controllers;

use App\Models\Basicuserdetail;
use App\Models\Educationlevel;
use App\Models\Task;
use App\Models\Usereducation;
use App\Models\Userprefferedtask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userDetails()
    {
        $tasks = Task::get();
        return view('client.user-details');
    }

    public function userEducationDetails()
    {
        $educationLevels = Educationlevel::get();
        return view('client.user-education', compact('educationLevels'));
    }

    public function userTasks()
    {
        $tasks = Task::get();
        return view('client.user-tasks', compact('tasks'));
    }

    public function submitUserDetails()
    {
        return view('client.submit-user-details');
    }


    public function saveBasicUserDetails(Request $request)
    {

        if ($basicUserDetails = Basicuserdetail::create([
            'user_id' => Auth::id(),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'mobile_number' => $request->mobile_number
        ])) {
            return redirect()->route('userTasks');
        } else {
            return redirect()->back();
        }
    }

    public function saveUserPrefferedTasks(Request $request)
    {
        $request = $request->except("_token");
        $tasks = [];
        foreach ($request as $key => $item) {
            $tasks[$key] = $item;
        }
        $userTask = Userprefferedtask::create([
            'tasks' => json_encode($tasks),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('userEducationDetails');
    }

    public function saveUserEducation(Request $request)
    {
        $userEducation = Usereducation::create([
            'education_level' => $request->educationLevel,
            'institution' => $request->institutionName,
            'field' => $request->educationMajor,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('submitUserDetails');
    }


    public function savePrefferedTasks(Request $request)
    {
        $userTasks = Userprefferedtask::create([
            'tasks' => $request->tasks,
        ]);

        return $userTasks;
    }
}
