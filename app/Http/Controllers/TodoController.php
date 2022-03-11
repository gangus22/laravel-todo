<?php

namespace App\Http\Controllers;

use App\Models\Todoitem;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index(){
        try{
            $index = view('index',['todos' => Todoitem::all()->sortBy('deadline')]);
        }catch (QueryException $qe){
            $index = view('index',['todos' => NULL, 'dberror' => $qe]);
        } finally {
            return $index;
        }
    }

    public function save_todo(Request $rq){

        $this->validate($rq, [
            'deadline' => 'required|date|after:yesterday',
            'task' => 'required|String|max:70|regex:/[A-Z]+.*\!$/'
        ]);

        $newTodo = new Todoitem;
        $newTodo->task = $rq->post('task');
        $newTodo->deadline = $rq->post('deadline');
        $newTodo->save();
        //return dd($newTodo->toJson(JSON_PRETTY_PRINT));
        return redirect()->route('index');
    }

    //preg match check is redundant, maybe organize it better

    public function tick_todo($id){
        if(!preg_match('/^[1-9][0-9]{1,20}$/',$id)) return redirect()->route('index');
        $item = Todoitem::find($id);
        if($item == NULL) return redirect()->route('index');
        $item->done = 1;
        $item->save();
        return redirect()->route('index');
    }

    public function drop_todo($id){
        if(!preg_match('/^[1-9][0-9]{1,20}$/',$id)) return redirect()->route('index');
        $item = Todoitem::find($id);
        if($item == NULL) return redirect()->route('index');
        $item->delete($id);
        return redirect()->route('index');
    }

}
