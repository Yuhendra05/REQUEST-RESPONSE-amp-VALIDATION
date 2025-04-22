<h2>Form Kontak</h2>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="phone" placeholder="No. HP" value="{{ old('phone') }}"><br>
    <textarea name="message" placeholder="Pesan">{{ old('message') }}</textarea><br>
    <button type="submit">Kirim</button>
    <a href="/"><button type="button">Masuk kehalaman user</button></a>
</form>
