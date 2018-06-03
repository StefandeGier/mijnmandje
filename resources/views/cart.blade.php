@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shoppingcart</div>

                <div class="card-body">

                  <form method="post" action='/product/change'>
                    @csrf
                    <h1> Shoppingcart</h1>
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    @if(isset($cartProducts))
                      @foreach ($cartProducts as $cartProduct )
                        <tbody>
                          <tr>
                            <td>{{@$cartProduct['name']}}</td>
                            <td><input type="number" name="" value="{{@$cartProduct['qty']}}"> <button type="button" class="btn btn-primary">Update</button></td>
                            <td>{{@$cartProduct['price']}}</td>

                          </tr>
                        </tbody>
                      @endforeach

                    @endif
                    </table>
                  </form>

                  <a href="#" class="btn btn-success">Check out</a>
            </div>
        </div>
    </div>
</div>
@endsection
