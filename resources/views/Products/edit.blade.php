@extends('layout.app')
 
@section('title')
edit
@endsection
 
@section('content') 



    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>edit</h1>
    <form action="{{ route('Product.update', ['product'=>$product->id]) }}" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <label for="title">title</label>
        <input type="text" name="title" value="{{ $product->title }}">
        
        <label for="description">description</label>
        <input type="text" name="description" value="{{ $product->description }}">
        
    <label for="price">price</label
    <input type="number" min="1.00" step="0.01" name="price"  >
    <input type="number" min="1.00"  tep="0.01" name="price" value="{{ $product->price }}"> 
    
    
            <label for="stock">stock</label>
            <input type="text" name="stock"  min="0" value="{{ $product->stock }}">
        
            <label for="status">status</label>
            <select name="status" >
            <option value="available" {{ $product->status=='available' ? 'selected' : ''}} >Available</option>
            <option value="unavailable"  {{ $product->status=='unavailable'? 'selected':'' }}>Unavailable</option>
        </select>
         
        <button type="submit">update Product</button>
        
        </form



@endsection
