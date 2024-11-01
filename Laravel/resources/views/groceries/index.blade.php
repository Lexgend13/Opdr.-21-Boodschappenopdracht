@extends('layouts.app')

@section('title')
    <title>Laravel boodschappenlijst</title>
@endsection

@section('style')
    <style>
        .right {
            text-align: right;
            width: 75px;
        }

        .product {
            width: 240px;
        }

        .th {
            text-align: left;
        }

        .hide
        {
            border: none;
        }

        .category {
            width: 139px;
        }
    </style>
@endsection

@section('content')
    <table border='1'>
        <thead>
            <tr>
                <th id='product'>Product</th>
                <th class='category'>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $sum = 0; ?>
            <?php foreach($groceries as $grocery): ?>
                <tr>
                    <td class='product'>{{ $grocery->product }}</td>
                    <td class='right'>{{$grocery->category->category}}</td>
                    <td class='right'>{{number_format($grocery->price,2)}}</td>
                    <td class='right'>{{$grocery->quantity}}</td>
                    <td class='right'>{{number_format($grocery->price * $grocery->quantity,2)}}</td>
                    <td class='hide'><a href="{{route('groceries.edit', ['grocery' => $grocery->id])}}">Edit</td>
                    <td class='hide'>
                        <form method='POST' action="{{route('groceries.destroy', ['grocery' => $grocery->id])}}">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $sum += $grocery->price * $grocery->quantity; ?>
            <?php endforeach; ?>
                <tr>
                    <td class='hide'></td>
                    <td class='hide'></td>
                    <td colspan='2'><strong>Total Price</strong></td>
                    <td class='right'><strong>{{number_format($sum,2)}}</strong></td>
                </tr>
        </tbody>
    </table>
@endsection