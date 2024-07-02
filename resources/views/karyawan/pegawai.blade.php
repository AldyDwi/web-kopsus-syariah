<x-layoutAdmin>
    <div class="jabatan1">
        <h2 class="fw-bold mt-3">Kelola Pegawai</h2>
        <div class="admin">
            <a href="{{ route('karyawan.create') }}" class="btn btn-success mt-4">+New Data</a>
            <br>
            <br>
            <table class="table table bordered table striped" id="tabel-pegawai">
                <thead class="back">
                    <tr>
                        <th style="width:1%; color: white;">Id</th>
                        <th style="width:8%; color: white;">Nama</th>
                        <th style="width:5%; color: white;">Nama Jabatan</th>
                        <th style="width:4%; color: white;">Foto</th>
                        <th style="width:2%; color: white;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($karyawan))
                    @foreach($karyawan as $k)
                    <tr>
                        <td>{{ $k['id'] }}</td>
                        <td>{{ $k['nama'] }}</td>
                        <td>{{ $k['jabatan']['nama_jabatan'] }}</td>
                        <td>
                            <img src="{{ asset('foto/' . $k->image) }}" alt="{{ $k['nama'] }}" class="a-pegawai">
                        </td>
                        <td>
                            <a href="{{ route('karyawan.edit', $k['id']) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('karyawan.destroy', $k['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <p>No data available</p>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-layoutAdmin>