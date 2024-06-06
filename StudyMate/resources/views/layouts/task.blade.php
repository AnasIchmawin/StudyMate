<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Study Mate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/task.css')}}">
    <link rel="stylesheet" href="{{asset('css/module2.css')}}">

</head>

<body>

    <!-- ------------ -->
    <div id="nav-bar">
        <div id="nav-header">
            <a id="nav-title" target="_blank">
                Study Mate
            </a>
            <hr />
        </div>
        <div id="nav-content">
            <div class="nav-button">
                <a href="modules">
                    <i class="fas fa-palette">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M11 17c0 .55.45 1 1 1s1-.45 1-1-.45-1-1-1-1 .45-1 1zm0-14v4h2V5.08c3.39.49 6 3.39 6 6.92 0 3.87-3.13 7-7 7s-7-3.13-7-7c0-1.68.59-3.22 1.58-4.42L12 13l1.41-1.41-6.8-6.8v.02C4.42 6.45 3 9.05 3 12c0 4.97 4.02 9 9 9 4.97 0 9-4.03 9-9s-4.03-9-9-9h-1zm7 9c0-.55-.45-1-1-1s-1 .45-1 1 .45 1 1 1 1-.45 1-1zM6 12c0 .55.45 1 1 1s1-.45 1-1-.45-1-1-1-1 .45-1 1z" />
                        </svg>
                    </i>
                    <span style="margin-left: 25px;">Modules</span>
                </a>
            </div>

            <div class="nav-button">
                <a href="tasks">
                    <i class="fas fa-images">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M11 17c0 .55.45 1 1 1s1-.45 1-1-.45-1-1-1-1 .45-1 1zm0-14v4h2V5.08c3.39.49 6 3.39 6 6.92 0 3.87-3.13 7-7 7s-7-3.13-7-7c0-1.68.59-3.22 1.58-4.42L12 13l1.41-1.41-6.8-6.8v.02C4.42 6.45 3 9.05 3 12c0 4.97 4.02 9 9 9 4.97 0 9-4.03 9-9s-4.03-9-9-9h-1zm7 9c0-.55-.45-1-1-1s-1 .45-1 1 .45 1 1 1 1-.45 1-1zM6 12c0 .55.45 1 1 1s1-.45 1-1-.45-1-1-1-1 .45-1 1z" />
                        </svg>
                    </i>
                    <span style="margin-left: 25px;">Tasks</span>
                </a>
            </div>

            <div class="nav-button">
                <a href="events">
                    <i class="fas fa-thumbtack">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M11 17c0 .55.45 1 1 1s1-.45 1-1-.45-1-1-1-1 .45-1 1zm0-14v4h2V5.08c3.39.49 6 3.39 6 6.92 0 3.87-3.13 7-7 7s-7-3.13-7-7c0-1.68.59-3.22 1.58-4.42L12 13l1.41-1.41-6.8-6.8v.02C4.42 6.45 3 9.05 3 12c0 4.97 4.02 9 9 9 4.97 0 9-4.03 9-9s-4.03-9-9-9h-1zm7 9c0-.55-.45-1-1-1s-1 .45-1 1 .45 1 1 1 1-.45 1-1zM6 12c0 .55.45 1 1 1s1-.45 1-1-.45-1-1-1-1 .45-1 1z" />
                        </svg>
                    </i>
                    <span style="margin-left: 25px;">Events</span>
                </a>
            </div>

            <div id="nav-content-highlight"></div>
        </div>
        <div id="nav-footer">
            <div id="nav-footer-heading">
                <div id="nav-footer-avatar"><img src="https://gravatar.com/avatar/4474ca42d303761c2901fa819c4f2547" />
                </div>
                <div id="nav-footer-titlebox">
                    <a id="nav-footer-title" target="_blank">uahnbu</a>
                    <span id="nav-footer-subtitle">Admin</span>
                </div>
            </div>

        </div>
    </div>
    <!-- ------------ -->

    <div id="mainContainer">
        <div class="head">
            <div class="titlePage">Tasks</div>
            <div class="buttons">
                <a href="{{ route('task.create') }}" class="btn">Add Task</a>
                <form action="/search" method="get">
                    <div class="input-group mb-3">
                        <input type="search" name="task" class="search form-control" placeholder="Recherche">
                        <button class="btn btn-outline-secondary" type="submit">search</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="discription">
            <div class="headtask">
                <div class="headpart1">
                </div>
                <div class="headpart2">
                    <label for="task1">Name</label>
                </div>
                <div class="headpart3">
                    <label for="task1">Created date</label>
                </div>
                <div class="headpart4">
                    <label for="task1">Due date</label>
                </div>
                <div class="headpart5">
                    <label for="task1">Description</label>
                </div>
            </div>
        </div>
        <div class="tasks">
            @foreach($tasks as $task)
            @if($task->checked == 0)
            <div class="task" data-id="{{ $task->id }}">
                <div class="part1">
                    <input type="checkbox" id="task1">
                </div>
                <div class="part2">
                    <label for="task1">{{ $task->task }}</label>
                </div>
                <div class="part3">
                    <label for="task1">{{ $task->created_at }}</label>
                </div>
                <div class="part4">
                    <label for="task1">{{ $task->due_date }}</label>
                </div>
                <div class="part5">
                    <label for="task1">{{ $task->description }}</label>
                </div>
                <form action="/delete-task/{{ $task->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" style="background-color: #1c2839;color:white;transform:translateY(15px)">Delete</button>
                </form>
            </div>
            @endif
            @endforeach
        </div>
        <div class="tasks-checked">
            @foreach($tasks as $task)
            @if($task->checked == 1)
            <div class="task checked" data-id="{{ $task->id }}" style="transform: scale(1); opacity: 1;">
                <div class="part1">
                    <input type="checkbox" id="task1" checked>
                </div>
                <div class="part2">
                    <label for="task1">{{ $task->task }}</label>
                </div>
                <div class="part3">
                    <label for="task1">{{ $task->created_at }}</label>
                </div>
                <div class="part4">
                    <label for="task1">{{ $task->due_date }}</label>
                </div>
                <div class="part5">
                    <label for="task1">{{ $task->description }}</label>
                </div>
                <form action="/delete-task/{{ $task->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" style="background-color: #1c2839;color:white;transform:translateY(15px)">Delete</button>
                </form>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <script src="{{asset('js\task.js')}}"></script>
</body>

</html>