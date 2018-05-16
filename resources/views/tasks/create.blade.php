@extends('layouts.app')

@section('content')

    <h1>New Task Add</h1>
    
    <!--フォームの開始 $task を task.store に引継ぎ -->
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task#') !!}
        {!! Form::text('content') !!}

        {!! FORm::label('status', 'Status#') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('Done') !!}

    {!! Form::close() !!}

@endsection