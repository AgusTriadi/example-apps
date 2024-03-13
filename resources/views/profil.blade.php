<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>
<body>
    {{-- <h1>Nama: {{$user}} Status: {{$status}}</h1> --}}
    <form action="{{route('simpan')}}" method="post">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name">
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password">
        <br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>