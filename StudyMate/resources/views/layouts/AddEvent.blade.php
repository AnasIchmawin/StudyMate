<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Event</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/button.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Pretty-Registration-Form-.css')}}">
</head>

<body>
    <div class="row register-form" style="margin-top: 250px;">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('events.store') }}" method="POST" class="custom-form">
                @csrf
                <h1>Add Event</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Event Name</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="day-input-field">Event Day</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <select class="form-control" name="day" id="day">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="hour-input-field">Event Hour</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="hour" id="hour">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="type-input-field">Event Type</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <select class="form-control" name="type" id="type">
                            <option value="Module">Module</option>
                            <option value="Revision">Revision</option>
                            <option value="Parascholaire">Parascholaire</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-light submit-button" type="submit">Add Event</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
