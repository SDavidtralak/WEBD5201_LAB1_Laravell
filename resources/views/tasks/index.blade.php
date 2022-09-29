<!DOCTYPE html>
<html>
    <head>


        <title>Home Page</title>


    </head>
    <body >

            <ul>
            @foreach ($tasksdb as $taskdb)
                <li>
                    <a href="/tasks/{{$taskdb->id}}">
                     {{$taskdb->body }}
                    </a>

                </li>
            @endforeach
            </ul>




    </body>
</html>
