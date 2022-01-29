<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $data['cats']= Cat::select('id', 'name')->orderBy('id', 'DESC')->get();
        return view ('admin.cats.index')->with($data);
    }
    protected function create()
    {
        return view('admin.cats.create');
    }
    protected function store(Request $request)
    {
        $data= $request->validate([
           'name' =>'required|string|max:20'
        ]);
        Cat::create($data);
        return redirect (route('admin.cats.index'));
    }
    protected function edit($id)
    {
        $data['cats']=Cat::findOrFail($id);
        return view('admin.cats.edit')->with($data);
    }
    protected function update(Request $request)
    {
        $data= $request->validate([
            'name' =>'required|string|max:20'
        ]);
        Cat::findOrFail($request->id)->update($data);
        //return redirect (route('admin.cats.index'));
        return back();
    }
    public function delete($id)
    {
        Cat::findOrFail($id)->delete();
        //return redirect (route('admin.cats.index'));
        return back();
    }
}
