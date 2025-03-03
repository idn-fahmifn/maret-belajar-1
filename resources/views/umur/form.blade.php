<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Umur</title>
</head>
<body>
    <h1>Hallo berapa umur kamu?</h1>
    <p>Masukan umur kamu di form bawah ini : </p>

    {{-- menampilkan error middleware --}}
    @if (session('gagal'))
        <span style="color: red">
            Opps, {{session('gagal')}}
        </span>
    @endif

    {{-- error valodator --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif


    {{-- area form --}}
    <form action="{{route('proses')}}" method="post">
        @csrf 
        {{-- form nama --}}
        <label>Nama</label>
        <input type="text" name="nama" required>
        {{-- form umur --}}
        <label>Umur</label>
        <input type="number" name="umur" required>
        {{-- button masuk --}}
        <button type="submit">Masuk</button>
    </form>
</body>
</html>