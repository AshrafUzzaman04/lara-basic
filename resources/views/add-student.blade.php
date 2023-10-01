<x-layout>
    <x-slot:pageTitle>Student Add</x-slot:pageTitle>
    <x-slot:heading>Add Student</x-slot:heading>
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
                    {{-- check the validation errors --}}
                       @if ($errors->any())
                       <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $errorMsg)
                            <span>{{$errorMsg}}</span>
                        @endforeach
                        </div>
                       @endif
                        @if (session()->get("msg"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span>{{session("msg")}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                </div>
                <div class="col-md-6">
                    <img src="https://source.unsplash.com/random/600x400" alt="random image">
                </div>
            </div>
        </form>
</x-layout>
