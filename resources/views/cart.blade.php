@extends('template.navFoot')
@section('content')
    <div class="container">
        <section class="h-100">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal bg-warning p-3 rounded-2 mb-0">Shopping Cart</h3>
                        </div>

                        <div class="card border-warning rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="images/card-1.jpg" class="img-fluid rounded-3" alt="Food items">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                         <p class="lead fw-normal mb-2">Food</p>
                                        <p><span class="text-muted">Category: </span>... </p>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="fas fa-minus"></i></button>

                                        <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">$ 3.99</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-warning mb-4">
                            <div class="card-body p-4 d-flex flex-row">
                                <div data-mdb-input-init class="form-outline flex-fill">
                                    <input type="text" id="form1" class="form-control form-control-lg " placeholder="Promo code">
                                </div>
                                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-warning btn-lg ms-3">Apply</button>
                            </div>
                        </div>

                        <div class="card border-success">
                            <div class="card-body">
                                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg">Proceed to Pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection