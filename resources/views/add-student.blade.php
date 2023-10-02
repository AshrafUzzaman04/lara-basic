<x-layout>
    <x-slot:pageTitle>Student Add</x-slot:pageTitle>
    <x-slot:heading>Add Student</x-slot:heading>

            <div class="row my-5">
                <div class="col-md-6" style="height: max-content;">
                    <form action={{route('student.store')}} method="POST" enctype="multipart/form-data" class=" shadow p-4">
                        {{-- Cross Site Forgery attacks --}}
                        @csrf
                        <div class="my-4">
                            <input type="file" class="form-control" name="stdimg" value={{old('stdimg')}}>
                            @if ($errors->has("stdimg"))
                                <span class="text-danger">{{$errors->first("stdimg")}}</span>
                            @endif
                        </div>
                    <div class="my-4">
                        <input type="text" class="form-control" name="sname" placeholder="username" value={{old('sname')}}>
                        @if ($errors->has("sname"))
                                <span class="text-danger">{{$errors->first("sname")}}</span>
                        @endif
                    </div>
                    <div class="my-4">
                        <input type="submit" class="btn btn-primary">
                    </div>
                    {{-- check the validation errors --}}
                       {{-- @if ($errors->any())
                       <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $errorMsg)
                            <span>{{$errorMsg}}</span>
                        @endforeach
                        </div>
                       @endif --}}
                        @if (session()->get("msg"))
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
