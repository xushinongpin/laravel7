<?php

namespace App\Http\Controllers;

use App\Services\Twitter;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
//use phpDocumentor\Reflection\Project;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index',compact('projects'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
        // 验证其他规则查看地址 https://laravel.com/docs/5.7/validation#available-validation-rules
        request()->validate([
            'title' => ['required','min:3','max:255'],
            'description' => ['required','min:3','max:255'],
        ]);
//        $project = new Project();
//        $project->title = $request['title'];
//        $project->description = $request['description'];
//        $project->save();
        Project::create([
            'title' => $request['title'],
            'description' => $request['description'],
        ]);
        return redirect('/projects');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
          $this->authorize('update',$project);
//        $this->authorize('view',$project);
//        abort_unless(auth()->user()->owns($project),403);
//        abort_if($project->owner_id !== auth()->id(),403);
//        $twitter = app('twitter');
//        dd($twitter);
//        $project = Project::findOrFail($id);
        return view('projects.show',compact('project'));
//        return $project;
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
        $project = Project::findOrFail($id);
        return view('projects.edit',compact('project'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        $project->update(request(['title','description']));
//        $project = Project::findOrFail($id);
//        $project->title = $request['title'];
//        $project->description = $request['description'];
//        $project->save();
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
