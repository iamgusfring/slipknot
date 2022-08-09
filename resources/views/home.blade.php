@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="justify-content-center">
        <div class="col-md-8">
            <img src="{{ asset('img/mr-robot.jpg') }}" alt="" srcset="">
            <div class="card-body text-justify">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="text-center">Welcome to Patricia Project</h1>

                <br>

                <h3>DISCLAIMER</h3>
                <p>This app was created for <strong class="fw-bolder text-uppercase text-decoration-underline">educational purpose</strong> only.</p>
                <p>The use of this program is COMPLETE RESPONSIBILITY of the END-USER. Developers assume NO liability and are NOT responsible for any misuse or damage caused by this program.</p>
                    
            </div>
        </div>
    </div>
</div>

@endsection
