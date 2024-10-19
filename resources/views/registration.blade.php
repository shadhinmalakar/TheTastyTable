@extends('template.navFoot')
@section('content')
    <div class="container">
        <h3>Register a new account</h3>
        <div class="m-5 p-5 card border-secondary">
            <form action="/users" method="POST">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" class="form-control"  name="email" placeholder="example@gmail.com">
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" class="form-control" name="uname" placeholder="@username">
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                </div>

                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Create account</button>

                <div class="text-center">
                    <p>Already have an account? <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/account">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection