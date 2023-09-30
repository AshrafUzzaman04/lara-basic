<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle ?? "Laravel CRUD"}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-student.navbar></x-student.navbar>
    <h1 class="text-center">{{$heading}}</h1>
    <div class="main container">
        <form action={{route('student.store')}} method="POST">
            {{-- Cross Site Forgery attacks --}}
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="my-2">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="sname" placeholder="username" value={{old('sname')}}>
                    </div>
                    <div class="my-2">
                        <input type="submit" class="btn btn-primary">
                    </div>
                       @if ($errors->any())
                       <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $errorMsg)
                            <span>{{$errorMsg}}</span>
                        @endforeach
                        </div>
                       @endif

                </div>
                <div class="col-md-6">
                    <img src="https://source.unsplash.com/random/600x400" alt="random image">
                </div>
            </div>
        </form>
    </div>
    {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
