@extends('layouts.main')

@section('title', 'Titulo bonitinho')

@section('content')
    
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar evento">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/ryobaixo.jpg" alt={{ $event->title }}">
                {{-- <img src="/img/events/{{ $event->image }}" alt={{ $event->title }}"> --}}
                <div id="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 id="card-title">{{ $event->title }}</h5>
                    <p class="card-participants"> {{ count($event->users)}} Participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>












{{-- 
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
        


         --}}


        <!-- Comentario do HTML -->
        {{-- Comentario do blade --}}
@endsection