<x-layoutAdmin>
    <div class="jabatan1">
        <h4 class="fw-bold" style="margin-bottom: 20px">Form Edit Admin</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control input" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control input" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password <span class="text-danger">(kosongkan jika tidak ingin mengubah)</span></label>
                <input type="password" class="form-control input" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" class="form-control input" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.index') }}" class="btn btn-success">Kembali</a>
        </form>
    </div>
</x-layoutAdmin>