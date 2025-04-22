<h2>Form Tambah User</h2>

@if (session('success'))
<p style="color: green:">{{ session('succes') }}</p>
@endif

@if ($errors->any())
<ul style="color: red;">
    @foreach ($errors->all()as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('user.store') }}"
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"><br>
    <button type="submit">Simpan</button>
</form>