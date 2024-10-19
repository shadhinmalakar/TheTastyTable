@extends('template.navFoot')
@section('content')
    <div class="container">
        <h3>Log in</h3>
        <div class="m-5 p-5 card border-secondary">
            <form method="GET" action="/users">
                @csrf
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" class="form-control" name="uname" placeholder="@username">
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" class="form-control" ame="pass" placeholder="Password">
                </div>

                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

                <div class="text-center">
                    <p>Don't have an account? <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="/registration">Register</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection