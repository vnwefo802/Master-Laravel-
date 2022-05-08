@extends('layout.app')
 
@section('title')
show
@endsection
 
@section('content') 
    <a href="{{ route('Product.index') }}">back</a>

    
    <h1>{{ $Trye->title }} {{ $Trye->id }} {{ $Trye->price }}</h1>
    <p>{{ $Trye->description }}</p>
    <p>{{ $Trye->stock }}</p>
    <p>{{ $Trye->status }}</p>

@endsection
