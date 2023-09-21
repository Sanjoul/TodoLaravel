<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        Todo List
    </h1>
    @if($errors->any())
        <ul>
            @foreach ($errors->all as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif
    <form action="{{ route('todo.store') }}" method="POST">
        @csrf
        @method('post')
        <label for="name">Task</label>
        <input type="text" name="name" placeholder="Task">


        <label for="desc">Description</label>
        <input type="text" name="task" placeholder="Description">

        <input type="submit" value="Add New Task">

    </form>

</body>

</html>
