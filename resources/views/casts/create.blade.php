<x-layout>
    <x-slot:title>
        <h1>create data</h1>
    </x-slot:title>

    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Name"name="nama">
            </div>
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" placeholder="Enter Umur" name="umur">
            </div>
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" placeholder="" name="bio">
            </textarea>
                @error('bio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-layout>
