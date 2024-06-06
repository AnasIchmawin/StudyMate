<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Mate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/module.css')}}">
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
        <div class="containerNav">
            <div class="titlePage">Sessions</div>
            <a href="{{ route('modules.create') }}" class="btn">Ajouter Module</a>
        </div>

        <div id="modules">
            @foreach($modules as $module)
            <div class="card">
                <a href="{{ route('modules.show',['id' => $module->id]) }}">
                    <h3 class="card__title">{{ $module->module }}</h3>
                    <div class="card__date">{{ $module->created_at->format('F j, Y') }}</div>
                    <div class="card__arrow">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                            </path>
                        </svg>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>