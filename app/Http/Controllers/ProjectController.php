<?php

namespace Learn\Http\Controllers;

use Auth;
use Learn\Comment;
use Illuminate\Http\Request;
use Learn\Project;

class ProjectController extends Controller
{

    public function show($id)
    {
        $project = Project::find($id);
        $comments = $project->comments()->get();

        return view('project.show', compact('project', 'comments'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|max:255',
            'description' => 'required|max:255',
            'category'    => 'required',
            'url'         => 'required',
        ]);

        $url = explode('=', $request->input('url'));
        $url = end($url);

        $request['url'] = $url;
        $request['user_id'] = Auth::user()->id;

        Project::create($request->all());

        return redirect('profile');
    }

    public function comment(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::user()->id;
        $comment->project_id = $request->input('project_id');
        $comment->save();

        $name = Auth::user()->name;
        $comment = $request->input('comment');

        return compact('name', 'comment');
        ;
    }
}
