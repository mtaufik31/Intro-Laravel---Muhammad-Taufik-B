<x-layout>
    <x-slot:title>
        <h1>Edit Data</h1>
    </x-slot:title>
    @foreach ($casts as $cast)
        <form action="{{ route('cast.update', $cast->id) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="nama"
                        value="{{ old('nama', $cast->nama) }}">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" placeholder="Enter Umur" name="umur"
                        value="{{ old('umur', $cast->umur) }}">
                </div>
                @error('umur')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="bio" name="bio">
                {{ old('bio', $cast->bio) }}
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
    @endforeach
</x-layout>
