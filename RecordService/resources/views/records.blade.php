<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Records</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <style>
        .record-form {
            margin-top: 10px;
            padding: 10px;
            background: #c3c3c3;
        }
        .records-container {
            width: 100%;
            background: #c3c3c3;
            padding: 3px;
        }
        .record-container {
            width: 100%;
            border: 3px solid #000000;
            padding: 3px;
            margin-bottom: 3px;
        }
        .user-info {
            display: block;
        }
        .user-info-container {
            font-size: 15px;
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-group record-form" method="POST" action="/create-records">
                    <div class="form-group">
                        <label>Почта</label>
                        <input name="user_email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Введите почту">
                    </div>
                    <div class="form-group">
                        <label>Имя</label>
                        <input name="user_name" type="text" class="form-control" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label>Данные</label>
                        <textarea name="data" class="form-control" rows="3"></textarea>
                    </div>

                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 records-container">
                @foreach($records as $record)
                <div class="record-container">
                    <div class="user-info-container">
                        <span class="user-info">{{$record->user_name}}</span>
                        <span class="user-info">{{$record->user_email}}</span>
                    </div>

                    <p>{{$record->data}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
