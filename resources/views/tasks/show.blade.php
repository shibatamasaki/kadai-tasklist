@extends('layouts.app')

@section('content')

    <h1>Task #{{ $task->id }} の詳細</h1>

    <p>{{ $task->content }}</p>
    <p>{{ $task->status}}</p>
    
    {!! link_to_route('tasks.edit', 'Task Edit', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    
        {!! Form::submit('delete') !!}
    
    {!! Form::close() !!}
    
@endsection