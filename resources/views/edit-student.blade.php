<x-layout>
    <x-slot:pageTitle>Edit Student</x-slot:pageTitle>
    <x-slot:heading>Edit Student</x-slot:heading>
    <div class="row">
        <div class="col-md-6">
            <form action={{route('student.update', $student->id)}} method="POST">
                {{-- Cross Site Forgery attacks --}}
                @csrf
                @method("PUT")
            <div class="my-2">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" name="sname" placeholder="username" value="{{old("sname") ?? ($student->name) ?? null}}">
            </div>
            <div class="my-2">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
            {{-- check the validation errors --}}
               @if ($errors->any())
               <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $errorMsg)
                    <span>{{$errorMsg}}</span>
                @endforeach
                </div>
               @elseif (session()->get("msg"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>{{session("msg")}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


            </form>
        </div>

        <div class="col-md-6">
            <img src="https://source.unsplash.com/random/600x400" alt="random image">
        </div>
    </div>
</x-layout>
