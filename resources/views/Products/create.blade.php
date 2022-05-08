@extends('layout.app')

@section('title')
create
@endsection

@section('content')


    @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            
    <h1>create</h1>
    <form action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="title">title</label>
        <input type="text" name="title" id="title">

        <label for="description">description</label>
        <input type="text" name="description" id="description">

    <label for="price">price</label
    <input type="number" min="1.00" step="0.01" name="price" >
    <input type="number" min="1.00"  tep="0.01" name="price">


            <label for="stock">stock</label>
            <input type="text" name="stock"  min="0">

            <label for="status">status</label>
            <select name="status" >
            <option value=""selected></option>
            <option value="available" >Available</option>
            <option value="unavailable" >Unavailable</option>
        </select>

        <button type="submit">create Product</button>

        </form



@endsection
