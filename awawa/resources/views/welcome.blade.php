@extends('layouts.main')

@section('title', 'Titulo bonitinho')

@section('content')
    

        <h1>Miau...</h1>

        <img src="/img/ryobaixo.jpg" alt="ryo">

        <p>{{ $nome }}</p>

        @if($nome == "Fabio")
            <p>Miau</p>
        @else
            <p>awawa</p>
        @endif
        
        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{$i}}  </p>
            @if($i == 2)
            <p>o i é 2</p>
            @endif
        @endfor

        @foreach($passaros as $passaro)
            <p>{{ $loop->index }}</p>
            <p>{{ $passaro }}</p>
        @endforeach

        @php
        $name = "Fabio";
        echo $name;
        @endphp
        


        


        <!-- Comentario do HTML -->
        {{-- Comentario do blade --}}
@endsection