<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Module</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/button.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Pretty-Registration-Form-.css')}}">
</head>

<body>
    <div class="row register-form" style="margin-top: 250px;">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('modules.store') }}" method="POST" class="custom-form">
                @csrf
                <h1>Add Module</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Module Name</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="module" id="module">
                    </div>
                </div>
                <button class="btn btn-light submit-button" type="submit">Add Module</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>