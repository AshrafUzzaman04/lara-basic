<x-layout>
    <x-slot:pageTitle>Studtent List</x-slot:pageTitle>
    <x-slot:heading>Studtent List</x-slot:heading>
    @if ($allstudents->firstItem() != 0)
    <table class="table table-dark table-hover text-center">
        <t-head>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </t-head>
        <t-body>
            @foreach ($allstudents as $allstd)
            <tr valign="middle">
                {{-- loop the serial no --}}
                <th>{{$allstudents->firstItem() + $loop->index}}</th>
                {{-- fetch the all name --}}
                <th>{{$allstd->name}}</th>
                <th ><img src="{{asset("uploads/". $allstd->image)}}" alt="" style="object-fit:cover" width="80px" height="80px"></th>
                <th>
                    <a href="{{route("student.show", $allstd->id)}}"><button class="btn btn-primary">View</button></a>
                    <a href="{{route("student.edit", $allstd->id)}}"><button class="btn btn-warning">Edit</button></a>
                    <form action="{{route("student.destroy",  $allstd->id)}}" method="post" class="d-inline">
                        @csrf
                        @method("delete")
                       <button class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </t-body>
    </table>
    {{-- to fetch errors and session data after the mysql data delete or not --}}
        @if ($errors->any())
            @foreach ($errors->all() as $errorMsg)
            <span>{{$errorMsg}}</span>
            @endforeach
        @elseif (session()->get("msg"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span>{{session("msg")}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    {{-- using pagination --}}
    {{ $allstudents->links()}}
    @else
    <div class="text-center my-5">
        <span class="alert alert-danger mx-auto text-center">No Data Found</span>
    </div>
    @endif
</x-layout>
