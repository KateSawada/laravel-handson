<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="{{asset('static/css/style.css')}}" >
    </head>

    <body>
        <h1>タスク一覧</h1>
            <table border="1">
            @foreach ($tasks as $task)
            <tr>
                @if($task->isDone)
                <td>済</td>
                @else
                <td class="background_yellow">未</td>
                @endif
                <td><a href="{{url('task/details/' . $task->id)}}">{{ $task->title }}</a></td>
            </tr>
            @endforeach
            </table>
    </body>
</html>