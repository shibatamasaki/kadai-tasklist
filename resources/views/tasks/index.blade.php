@extends('layouts.app')

@section('content')

    <h1>タスク管理ツール</h1>
    <p>作成者：Masaki Shibata<br>作成日：2018.5.15</p>
    
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show','Task #'.$task->id, ['id' => $task->id]) !!} : {{ $task->content }} >> {{ $task->status }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create','タスクを追加する')!!}

@endsection