<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type','technologies')->orderBy('date','DESC')->paginate(10);
        return response()->json(
            [
                "success"=> true,
                "results"=> $projects,
            ]
        );
    }
    public function show(Project $project){
        $project = Project::with('type','technologies')->orderBy('date','DESC')->paginate(10);
        return response()->json(
            [
                "success"=> true,
                "results"=> $project,
            ]
        );
    }
}
