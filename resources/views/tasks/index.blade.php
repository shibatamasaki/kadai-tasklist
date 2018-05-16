@extends('layouts.app')

@section('content')

    <h1>タスク管理ツール</h1>
    
    <div class="alert alert-info" role="alert">{{ count($tasks) }}件のタスクがあります</div>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('tasks.create','タスクを追加する',null, ['class' => 'btn btn-primary']) !!}

@endsection