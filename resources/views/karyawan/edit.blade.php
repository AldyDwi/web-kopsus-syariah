<x-layoutAdmin>
    <div class="jabatan1">
        <h4 class="fw-bold" style="margin-bottom: 20px">Form Edit Pegawai</h4>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    
        <form action="{{ route('karyawan.update', $karyawan['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="edit">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control input" id="nama" name="nama" value="{{ $karyawan['nama'] }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_jabatan">Nama Jabatan</label>
                        <select class="form-control input" id="nama_jabatan" name="nama_jabatan" required>
                            @foreach($jabatans as $jabatan)
                                <option value="{{ $jabatan['nama_jabatan'] }}" {{ $karyawan['id_jabatan'] == $jabatan['id'] ? 'selected' : '' }}>{{ $jabatan['nama_jabatan'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Gambar <span class="text-danger">(kosongkan jika tidak ingin mengubah)</span></label>
                        <input type="file" class="form-control input" id="image" name="image">
                        @if(isset($karyawan['image']))
                            <img src="{{ asset('foto/' . $karyawan['image']) }}" alt="Gambar Karyawan" style="width: 150px; margin-bottom: 10px;">
                            <p>{{ basename($karyawan['image']) }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('karyawan.pegawai') }}" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</x-layoutAdmin>