<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashraf Uzzaman</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div style="min-height: 100vh; display: flex; justify-content: center; align-items:center">
        <h1 style="text-align: center; color: blue;">WebCoder Ashraf is awesome! His age is {{($age == 0) ? "Undefined" : $age}}.&nbsp;</h1>

        @foreach ($ashraf as $ash)
        <h2>{{$ash}},&nbsp;</h2>
        @endforeach
    </div>

</body>
</html>
