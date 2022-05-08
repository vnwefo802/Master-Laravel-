@extends('layout.app')
 
@section('title')
index
@endsection
 
@section('content') 

    <a href="{{ route('Product.create') }}">create</a>

  @foreach ($james as $products)
  <h1>number</h1>
    <h1>{{ $products->id }} </h1>

    <h1>description</h1>
    <h1> {{ $products->description }}</h1>

    <h1>price</h1>
    <p>{{ $products->price }}</p>

    <h1>stock</h1>
    <p>{{ $products->stock }}</p>

    <h1>status</h1>
    <p>{{ $products->status }}</p>

   

    <form method="POST" action="{{route('Product.destroy',['Product'=>$products->id]) }}" >
        <a href="{{ route('Product.show',['cat'=>$products->id]) }}">show</a>
        <a href="{{ route('Product.edit',['product'=>$products->id]) }}">edit</a>
         @csrf


    @method('DELETE')
    <button type="submit" >Delete</button>
    </form>

  @endforeach

@endsection
