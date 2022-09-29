<!DOCTYPE html>
<html>
    <head>


        <title>Home Page</title>


    </head>
    <body >

        <h1>Hello, <?php //$name;  ?></h1>
            <ul>
            <?php foreach($tasks as $task) : ?>
                <li><?= $task; ?></li>
            <?php endforeach; ?>
            </ul>
            <ul>
            @foreach ($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
            </ul>
            <ul>
            @foreach ($tasksdb as $taskdb)
                <li>{{ $taskdb->body }}</li>
            @endforeach
            </ul>




    </body>
</html>
