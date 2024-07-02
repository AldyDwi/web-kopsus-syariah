<x-layoutAdmin>
    <div class="jabatan1">
        <h2 class="fw-bold mt-3">Kelola Admin</h2>
        <div class="adminB">
            <a href="{{ route('admin.create') }}" class="btn btn-success mt-4">+New Data</a>
            <br>
            <br>
            <table class="table table bordered table striped" id="tabel-jabatan">
                <thead class="back">
                    <tr>
                        <th style="width:1%; color: white;">Id</th>
                        <th style="width:5%; color: white;">Username</th>
                        <th style="width:5%; color: white;">Email</th>
                        <th style="width:2%; color: white;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($user))
                    @foreach ($user as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->name}}</td>
                            <td>{{ $u->email}}</td>
                            <td>
                                <a href="{{ route('admin.edit', $u->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.destroy', $u->id) }}" method="POST" style="display:inline-block;">
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