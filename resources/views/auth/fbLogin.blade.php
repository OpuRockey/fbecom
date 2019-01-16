@extends('layouts.layout')
@section('title','Login')
@section('content')

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center">Login</div>
            <div class="card-body">
                <form>
                    <a class="btn btn-primary btn-block" href="{{ url('/') }}/loginWithFbVerify/vendor">Login with Facebook as vendor</a>
                </form>
                <div class="text-center">
                    OR
                </div>
                <form>
                    <a class="btn btn-primary btn-block" href="{{ url('/') }}/loginWithFbVerify/member">Login with Facebook as Member</a>
                </form>
            </div>
        </div>
    </div>


@endsection