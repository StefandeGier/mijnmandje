@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shoppingcart</div>

                <div class="card-body">

                  <form method="post" action='/cart/update'>
                    @csrf
                    <h1> Shoppingcart</h1>
                    @if(isset($cartProducts))
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>

                      @foreach ($cartProducts as $cartProduct )
                        <input hidden type="text" name="" value="{{$cartProduct['id']}}">
                        <tbody>
                          <tr>
                            <td>{{@$cartProduct['name']}}</td>
                            <td><input type="number" name="" value="{{@$cartProduct['qty']}}"></td>
                            <td>{{@$cartProduct['price']}}</td>
                            <td><a href="/cart/delete/{{$cartProduct['id']}}" class="btn btn-danger" role="button">Delete</a></td>

                          </tr>
                        </tbody>
                      @endforeach


                    </table>
                  </form>

                  <a href="#" class="btn btn-success">Check out</a>  <button type="submit" class="btn btn-primary">Update</button>
                  @endif
            </div>
        </div>
    </div>
</div>
@endsection
