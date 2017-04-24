<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Type;
use \App\User;
use \App\Work;

class WorkController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('works.index', [
           'works' => Work::orderByDesc('created_at')->get()
        ]);
    }

   
    public function create()
    {
         return view('works.create',[
             'types'=> Type::all(),
             'users'=> User::all()
         ]);
        
    }

    
    public function store(Request $request)
    {
        $work = new Work();
        $work->type_id = $request->type;
        $work->executor_id = $request->executor;
        $work->points = $request->points;
        $request->user()->works()->save($work);
        
        return redirect('/works');
        
    }
   
    public function edit($id)
    {
        return view('works.edit',[
            'work'=>Work::findOrFail($id),
            'types'=> Type::all(),
            'users'=> User::all()
        ]);
    }

    
    public function save(Request $request, $id)
    {
        $work = Work::findOrFail($id);
        $work->type_id = $request->type;
        $work->executor_id = $request->executor;
        $work->points = $request->points;
        $work->save();
        
        return redirect('/works');
    }

   
    public function destroy(Request $request,$id)
    {
        $request->user()->works()->findOrFail($id)->delete();
        return redirect('/works');
    }
}
