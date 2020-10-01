<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Records</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .create-app-form {
            margin-top: 10px;
            padding: 10px;
            background: #c3c3c3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-group create-app-form" method="POST" action="/create-app-client">
                    <div class="form-group">
                        <label>Имя</label>
                        <input name="name" type="text" class="form-control" placeholder="Введите имя">
                    </div>

                    <div class="form-group">
                        <label>Обработчик</label>
                        <input name="url_handler" type="text" class="form-control" placeholder="Введите ссылку обработчика">
                    </div>

                    @foreach($events as $event)
                    <div class="form-check">
                        <input name="selected_event[]" class="form-check-input" type="checkbox" value="{{$event->id}}">
                        <label class="form-check-label">
                            {{$event->name}}
                        </label>
                    </div>
                    @endforeach

                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-primary">Зарегистрировать</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
