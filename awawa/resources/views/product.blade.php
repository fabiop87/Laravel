@extends('layouts.main')

@section('title', 'Titulo bonitinho')

@section('content')
    

    @if($id != null)
<p>Exibindo produto id: {{ $id }}</p>
    @endif

@endsection