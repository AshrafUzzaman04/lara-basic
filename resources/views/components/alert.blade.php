<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Lara Basic"}}</title>
</head>
<body>
    <h1>My Name is {{$userName}}.</h1>

    {{$slot}}

</body>
</html>

