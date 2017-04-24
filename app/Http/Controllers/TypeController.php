<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view ('types.index', [
            'types' => Type::all()
        ]);
    }

   
    public function create()
    {
        return view ('types.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'unique:types|required|min:3|max:255'
        ]);
        
        $type = new Type();
        $type->name = $request->name;
        $request->user()->types()->save($type);
        
        return redirect('/types');
    }

  
    public function show($id)
    {
        return view ('types.show', [
            'type' => Type::findOrFail($id)
        ]);
    }

   
    public function edit($id)
    {
        return view ('types.edit', [
           'type' => Type::findOrFail($id) 
        ]);
    }

   
    public function save(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'unique:types|required|min:3|max:255'
        ]);
        
        $type = Type::findOrFail($id);
        $type->name = $request->name;
        $type->save();
        
        return redirect('/types');
    }

    
    public function destroy(Request $request, $id)
    {
        $request->user()->types()->findOrFail($id)->delete();
        return redirect('/types');
    }
}
