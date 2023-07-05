@extends('links')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h5 class="mb-0">Payment for {{$product->name}}</h5>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h3>BDT: {{$product->price}}</h3>
                </div>
                <div class="col-md-4 border-right">
                    <img src="{{asset('assets/images/qr.png')}}" style="width:70%;object-fit:contain;" alt="">
                </div>
            </div>
        </div>
    </div>

</div>
