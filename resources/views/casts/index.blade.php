<x-layout>
    <x-slot:title>
        <h1>
            Table Cast
        </h1>
    </x-slot:title>

    @if (session('success'))

    <div class="alert alert-success" role="alert">{{session('success')}}</div>

    @endif
    <a href="/cast/create" class="btn btn-primary">
        <i class="fas fa-plus"></i> Create
    </a>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($casts as $cast)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$cast->nama}}</td>
                            <td>{{$cast->umur}}</td>
                            <td>
                                <a href="{{route('cast.show', $cast->id)}}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('cast.edit', $cast->id)}}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('cast.destroy', $cast->id)}}"  method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
