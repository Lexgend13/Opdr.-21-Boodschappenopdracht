@extends('layouts.app')

@section('title')
    <title>Edit groceries</title>
@endsection

@section('style')

@endsection

@section('content')
    <p>Edit grocery: {{$grocery->product}}</p>

    <form method="POST" action="{{route('groceries.update', ['grocery' => $grocery->id])}}">
        @csrf
        @method('PUT')
        <div>
            Category
            <select name="category_id">
           
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $grocery->category_id ? 'selected' : ''}}>
                        {{$category->category}}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="quantity">Quantity</label>
            <input 
                type="text" 
                name="quantity" 
                id="quantity" 
                value="{{ old('quantity', $grocery->quantity) }}" 
                class="form-control" 
                required>
        </div>
        @error('quantity')
            <p>{{$message}}</p>
        @enderror

        <div>
            <label for="price">Price</label>
            <input 
                type="text" 
                name="price" 
                id="price" 
                value="{{ old('price', $grocery->price) }}" 
                class="form-control" 
                required>
        </div>
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">Update Grocery</button>
        
    </form>
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