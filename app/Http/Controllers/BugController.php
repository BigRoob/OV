<?php

namespace App\Http\Controllers;

use App\Bug;
use Auth;
use Illuminate\Http\Request;

class BugController extends Controller
{

    public function index()
    {
        $activeClass = "bugs";

        $bugs = Bug::all()->sortByDesc('report');

        return view('bugs.index', compact('activeClass', 'bugs'));
    }

    public function create()
    {
        $activeClass = "bugs";

        return view('header.blade', compact('activeClass'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $input['user'] = Auth::user()->first_name;

        Bug::create($input);

        return redirect()->back();

       // if ($bugs->id)
         //   return response()->json(['status' => 'success', 'message' => 'Cadastrado com sucesso!']);

       // return response()->json(['status' => 'error', 'message' => 'Ocorreu um erro!']);
    }

    public function edit($id)
    {
        $activeClass = "bugs";

        $bugs = Bug::find($id);

        return view('bugs.edit', compact('activeClass', 'bugs'));
    }

    public function update(Request $request, $id)
    {
        Bug::find($id)->update($request->all());

        return response()->json(['status' => 'success', 'message' => 'Relato atualizado com sucesso!']);
    }

    public function destroy($id)
    {
        Bug::destroy($id);
        return response()->json(['status' => 'success', 'message' => 'Relato excluído com sucesso!']);
    }

}
