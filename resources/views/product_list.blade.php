@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producten</div>

                <div class="card-body">
                  Dit zijn de producten

                  @foreach ($products as $product)
                    <a href="/product/{{$product->id}}">{{$product->name}}</a>
                  @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
