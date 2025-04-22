<h2>Form Tambah User</h2>

@if (session('success'))
    <p style= "color: green;">{{ session('success') }}</p>
    @endif

@if ($errors->any())
<ul style="color: red;">
@foreach ($errors ->all() as $error)<li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<form method ="POST" action = "{{ route('user.store') }}">
      @csrf
        <input type = "text" name = "name" placeholder = "nama" value = "{{ old('name') }}"> <br>
        <input type = "email" name = "email" placeholder = "email" value = "{{ old('email') }}"> <br>
        <input type = "password" name = "password"  placeholder = "password" > <br>
        <input type = "password" name = "password_confirmation"  placeholder = "Konfirmasi password" > <br>
        <button type = "submit">Simpan</button>
        <a href="/contact/create"><button type="button">Masuk kehalaman contact</button></a>
</form>