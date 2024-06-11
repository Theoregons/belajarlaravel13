@extends('admin')
@section('main')
    <h1>Ini Halaman Coba</h1>

    <?php for ($i=1; $i <= 10 ; $i++) { ?>
        <h1>Ini perulangan</h1>
    <?php } ?>
    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini perulangan menggunakan blade</h1>
        @endif
    @endfor

        $counter = 6;
        echo $counter;
    @endphp

    <img src="{{ asset('img/f1.png') }}" width="300" alt="sribustudio" srcset="">
@endsection
