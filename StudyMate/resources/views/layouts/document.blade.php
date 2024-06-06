<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/module.css')}}">
    <link rel="stylesheet" href="{{asset('css/module2.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ajouter Document</title>
</head>

<body>

    <div id="mainContainer">
        <section class="py-4 py-xl-5 w-100">
            <div class="container">
                <div class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5" data-bs-theme="light">
                    <div class="text-center text-lg-start py-3 py-lg-1">
                        <h2 class="fw-bold mb-2"><strong>{{ $module->module }}</strong></h2>
                        <p class="mb-0">{{ $module->created_at->format('F j, Y') }}</p>

                    </div>
                </div>
            </div>
        </section>
        <div class="containerNav">
            <a href="{{ route('documents.create',['id' => $id])}}" class="btn" style="width:250px;">Ajouter Documents</a>
        </div>
        <div id="modules">
            @foreach($documents as $doc)
            <div class="card">
                <a href="{{ url($doc->path) }}" class="card__content">
                    <h3 class="card__title">{{ $doc->name }}</h3>
                    <div class="card__date">{{ $doc->path }}</div>
                </a>
            </div>
            @endforeach
        </div>

    </div>


</body>

</html>