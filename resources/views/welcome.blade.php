@extends('layouts.app')

@section('title', 'Welcome to FakeTrain')

@section('content')

<div class="p-5 bg-light d-flex align-items-center" id="jumbo">
    <div class="container-fluid py-5">
        <div class="bg-light d-inline-block p-4 rounded-4">
            <h1 class="display-5 fw-bold">Welcome to FakeTrain</h1>
            <p class="col-md-8 fs-4">Travel has never been so hard!</p>
            <a href="/trains">
                <button class="btn btn-primary btn-lg" type="button">Go to trains</button>
            </a>
        </div>

    </div>
</div>

@endsection