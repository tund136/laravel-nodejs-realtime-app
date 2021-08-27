<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Real time app</title>
</head>
<body>
<div class="row p-5">
    @foreach($items as $item)
        <div class="col-lg-4">
            <div class="card my-2 shadow">
                <div class="card-body">
                    <h3>{{$item->name}}</h3>
                    <p class="text-muted">{{$item->description}}</p>
                    <p class="fw-bold">Price: {{number_format($item->price, 2, '.', ',')}}</p>
                    <button class="btn btn-primary">BUY</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
