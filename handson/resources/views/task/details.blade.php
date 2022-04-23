<!DOCTYPE html>
<html lang="ja">
    <body>
        <h1>{{$task->title}}</h1>
        <div>
            @if($task->isDone)
            完了済
            @else
            {{ Form::open(['method'=>'post', 'url' => '/api/tasks/done', 'class'=>'form-article' ]) }}
            {{ Form::textarea('memo', '', ['placeholder'=>'memo...', 'cols'=>'40' ]) }}
            {{ Form::hidden('id', $task->id) }} 
            {{ Form::submit( '完了済にする' ) }}
            {{ Form::close() }}
            @endif
        </div>
    </body>
</html>