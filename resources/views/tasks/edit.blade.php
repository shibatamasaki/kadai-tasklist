@extends('layouts.app')

@section('content')

    <h1>Task #{{ $task->id }} Edit</h1>
    
    <!--フォームの開始 / tasks.update に編集したら接続 / $task->id 引継ぎ / PUT -->
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'Task#') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'Status#') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection