@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producten</div>

                <div class="card-body">

                  <form method="post" action='/product/add'>
                    @csrf
                    <li>{{$product->name}}</li>
                    <li>{{$product->description}}</li>
                    <li>&euro; {{$product->price}}</li>
                    <input type="text" hidden name="product_id" value="{{$product->id}}">
                    <input type="text" name="qty" value="1">
                    <button type="submit" class="btn btn-light">Toevoegen</button>

                    
                  </form>

            </div>
        </div>
    </div>
</div>
@endsection
