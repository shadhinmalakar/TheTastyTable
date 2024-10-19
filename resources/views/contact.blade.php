@extends('template.navFoot')
@section('content')
    <div class="container">
        <h3>Contact with us</h3>
        <div class="m-5 p-5 card border-secondary">
            <form>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Name</label>
                    <input type="text" id="form4Example1" class="form-control" placeholder="John Wick">
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Email address</label>
                    <input type="email" id="form4Example2" class="form-control" placeholder="example@gmail.com">
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Message</label>
                    <textarea class="form-control" id="form4Example3" rows="4" placeholder="Your massage ..."></textarea>
                </div>

                <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
    </div>
@endsection