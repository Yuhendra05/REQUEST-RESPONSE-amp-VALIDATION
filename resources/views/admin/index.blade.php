<!DOCTYPE html>
<html>
<head>
    <title>Form Admin</title>
</head>
<body>
    <h2>Form Admin</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>No. HP:</label>
        <input type="text" name="no_hp" value="{{ old('no_hp') }}"><br><br>

        <label>Alamat:</label>
        <textarea name="alamat">{{ old('alamat') }}</textarea><br><br>

        <label>Role:</label>
        <select name="role">
            <option value="">--Pilih Role--</option>
            <option value="Super Admin" {{ old('role') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="Kasir" {{ old('role') == 'Kasir' ? 'selected' : '' }}>Kasir</option>
        </select><br><br>

        <button type="submit">Simpan</button>
        <a href="/"><button type="button">Masuk kehalaman user</button></a>
        <a href="/contact/create"><button type="button">Masuk kehalaman contact</button></a>
    </form>
</body>
</html>
