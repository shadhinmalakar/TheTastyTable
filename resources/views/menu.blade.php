@extends('template.navFoot')
@section('content')
    <div class="container">
        <h3 class="fw-normal bg-warning p-3 mt-2 rounded-2">All food items</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
                <div class="card border-warning h-100">
                    <img src="images/card-1.jpg" class="card-img-top" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-warning">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection