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
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                      </tr>
                    </thead>
                    @if(isset($cartProducts))
                      @foreach ($cartProducts as $cartProduct )
                        <tbody>
                          <tr>
                            <td>{{@$cartProduct['name']}}</td>
                            <td>{{@$cartProduct['price']}}</td>
                            <td></td>
                          </tr>
                        </tbody>
                      @endforeach
                    @endif
                    </table>
                  </form>

            </div>
        </div>
    </div>
</div>
@endsection
