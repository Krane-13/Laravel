{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layouts</title>
</head>
<body style="margin:0; padding:0;">
    <x-nav>
    </x-nav>

    <main style="padding:20px; height: 54vh">
        Este é o conteúdo
    </main>

    <x-footer>
    </x-footer>
</body>
</html> --}}

@extends('layouts.app')

@section('header')
    <x-nav>
    </x-nav>
@endsection

@section('content')
    <h1> Este é o conteúdo principal</h1>
@endsection

@section('footer')
    <x-footer>
    </x-footer>
@endsection
