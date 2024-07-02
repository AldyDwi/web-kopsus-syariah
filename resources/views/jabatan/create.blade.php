<x-layoutAdmin>
    <div class="jabatan1">
        <h4 class="fw-bold">Form Tambah Jabatan</h4>
        <br>

        <!-- Menampilkan Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('jabatan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Jabatan <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_jabatan" id="nama_jabatan">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jabatan.admin') }}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</x-layoutAdmin>