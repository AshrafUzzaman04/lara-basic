<x-layout>
    <x-slot:pageTitle>Studtent List</x-slot:pageTitle>
    <x-slot:heading>Studtent List</x-slot:heading>
    <table class="table table-dark table-hover">
        <t-head>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </t-head>
        <t-body>
            @foreach ($allstudents as $allstd)
            <tr>
                {{-- loop the serial no --}}
                <th>{{$allstudents->firstItem() + $loop->index}}</th>
                {{-- fetch the all name --}}
                <th>{{$allstd->name}}</th>
                <th>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </th>
            </tr>
            @endforeach
        </t-body>
    </table>
    {{-- using pagination --}}
    {{ $allstudents->links()}}
</x-layout>
