<x-layoutAdmin>
    <div class="jabatan1">
        <h2 class="fw-bold mt-3">Kelola Jabatan</h2>
        <div class="adminB">
            <a href="{{ route('jabatan.create') }}" class="btn btn-success mt-4">+New Data</a>
            <br>
            <br>
            <table class="table table bordered table striped" id="tabel-jabatan">
                <thead class="back">
                    <tr>
                        <th style="width:1%; color: white;">Id</th>
                        <th style="width:5%; color: white;">Nama Jabatan</th>
                        <th style="width:2%; color: white;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($jabatan))
                    @foreach ($jabatan as $jab)
                        <tr>
                            <td>{{ $jab->id }}</td>
                            <td>{{ $jab->nama_jabatan }}</td>
                            <td>
                                <a href="{{ route('jabatan.edit', $jab->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('jabatan.destroy', $jab->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
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