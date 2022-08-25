<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>吃起來~<br>
    <h1>我是{{$data['name']}} ， 我要吃 {{$data['num']}} 份</h1>
    </h1>


    @php
        echo "我是{$data['name']}";
        dd($data);
    @endphp
</body>
</html>