@extends('layouts.app')

@section('content')

  　@if(Auth::check())
    <h1>タスク一覧</h1>
    
    
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>id</th>
                   <th>タスク</th>
                   <th>ステータス</th>
                   <th>ユーザーid</th>
               </tr>
           </thead>
           <tbody>
               @foreach($user->tasks as $task)
               <tr>
                   <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                   <td>{{ $task->content }}</td>
                   <td>{{ $task->status }}</td>
                   <td>{{ $task->user_id }}</td>
                 
               </tr>
               @endforeach
           </tbody>
       </table>
    
    @endif
    
    
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

    
@endsection