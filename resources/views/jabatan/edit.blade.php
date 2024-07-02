<x-layoutAdmin>
    <div class="jabatan1">
        <h4 class="fw-bold">Form Edit Jabatan</h4>
        <br>

        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_jabatan">Nama Jabatan <span class="text-danger">*</span></label>
                <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" value="{{ $jabatan->nama_jabatan }}" required>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('jabatan.admin') }}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</x-layoutAdmin>