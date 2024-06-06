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
            <form action="{{ route('documents.store',['id' => $id])}}" method="POST" class="custom-form">
                @csrf
                <h1>Add Document</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Name Document</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="name" name="name" style="background-color: white;">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Path Documents</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="path" name="path" style="background-color: white;">
                    </div>
                </div>
                <input type="hidden" name="module_id" value="{{$id}}" style="background-color: white;">
                <button class="btn btn-light submit-button" type="submit">Add Module</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>