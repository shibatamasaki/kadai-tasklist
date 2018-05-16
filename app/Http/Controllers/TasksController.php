<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\task;    // 追加

class TasksController extends Controller
{
    
    //index -> View
    public function index()
    {
        //$tasks に taskにある全データを代入
        $tasks = task::all();
        
        //View の中の tasks の中の index に値を返す
        return view('tasks.index', [
            
            //tasks.index に渡すデータは $tasks ですよ
           'tasks' => $tasks, 
            
        ]);
        
    }
    
    //@show(詳細)View設定
    public function show($id)
    {
        //tasks に task id=$id のデータを代入する
        $task = task::find($id);
        
        //View の中の tasks の中の show に値を返す
        return view('tasks.show', [
            
           'task' => $task, 
            
        ]);
        
    }
    
    //@create（新規作成）View の設定
    public function create()
    {
        // task = new App\task
        $task = new task;
        
        // View の中の tasks の中の create に値を返す
        return view('tasks.create', [
            
            'task' => $task,
            
        ]);
        
    }
    
    public function store(Request $request)
    {
        
        $this->validate($request, [
           
           'status' => 'required|max:10',
           'content' => 'required|max:191', 
            
        ]);
        
        //インスタンス生成
        $task = new task;
        
        //task:content に request:content を代入
        //フォームから送られてきたデータが $request に入っている
        $task->status = $request->status;
        $task->content = $request->content;
        
        //save()
        $task->save();
        
        //リダイレクト
        return redirect('/');
        
    }
    
    public function edit($id)
    {
        
        $this->validate($request, [
           
           'status' => 'required|max:10',
           'content' => 'required|max:191', 
            
        ]);
        
        //$task に 編集するtaskID を代入する
        $task = task::find($id);
        
        //View の中の tasks の中の edit に値を返す
        return view('tasks.edit', [
            
            'task' => $task,
            
        ]);
        
    }
    
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
           
           'status' => 'required|max:10',
           'content' => 'required|max:191', 
            
        ]);
        
        $task = task::find($id);
        $task->status = $request->status;
        $task->content = $request->content;
        $task->save();
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $task = task::find($id);
        $task->delete();
        
        return redirect('/');
        
    }
    
}
