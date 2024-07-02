<x-layoutAdmin>
    <div class="jabatan1">
        <h4 class="fw-bold" style="margin-bottom: 20px">Form Tambah Pegawai</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="edit">
                <div class="form-group">
                    <label for="nama">Nama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control input" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="nama_jabatan">Nama Jabatan <span class="text-danger">*</span></label>
                    <select class="form-control input" id="nama_jabatan" name="nama_jabatan" required>
                        @foreach($jabatans as $jabatan)
                            <option value="{{ $jabatan['nama_jabatan'] }}">{{ $jabatan['nama_jabatan'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Gambar <span class="text-danger">*</span></label>
                    <input type="file" class="form-control input" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('karyawan.pegawai') }}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</x-layoutAdmin>