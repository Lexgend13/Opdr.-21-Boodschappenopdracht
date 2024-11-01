@extends('layouts.app')

@section('title')
    <title>Add groceries</title>
@endsection

@section('style')

@endsection

@section('content')
    <form method="POST" action="{{ route('groceries.store')}}"> 
        @csrf
        <label for='product'>
            Product
        </label>
        <br>
        <input 
            type="text"
            name="product"
            id="product"
            value="{{old('product')}}"
            required
        >
        @error('product')
            <p>{{$message}}</p>
        @enderror
        <br>
        <div>
            Category
        </div>
        <select name="category_id">
           
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
            </select>
        <br>
        <label for='quantity'>
            Quantity
        </label>
        <br>
        <input 
            type='text'
            name='quantity'
            id='quantity'
            value="{{old('quantity')}}"
            required
        >
        @error('quantity')
            <p>{{$message}}</p>
        @enderror
        <br>
        <label for='price'>
            Price
        </label>
        <br>
        <input 
            type='text'
            name='price'
            id='price'
            value="{{old('price')}}"
            required
        >
        @error('price')
            <p>{{$message}}</p>
        @enderror
        <br>
        <button type="submit">
            Submit all
        </button>
        </form>
    <br>
    <button type="reset">
        Reset inputs
    </button>
    <br>
    <br>
    <div>Field suggestions</div>
    <button onclick="keepInput()">
        On
    </button>
    <button onclick="clearInput()">
        Off
    </button>
        <script>
            function clearInput () {
                document.getElementById("price").setAttribute("autocomplete", "off");
                document.getElementById("quantity").setAttribute("autocomplete", "off");
            }
            function keepInput () {
                document.getElementById("price").setAttribute("autocomplete", "on");
                document.getElementById("quantity").setAttribute("autocomplete", "on");
            }
        </script>
    
@endsection