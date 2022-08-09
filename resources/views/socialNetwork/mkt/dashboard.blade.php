@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
            <div class="">{{ __('Mkt') }}
                <hr>
                <p><strong>Share this link: </strong><a href="{{ route('mkt') }}" target="_blank" rel="noopener noreferrer">{{ route('mkt') }}</a></p>
            </div>
            
                
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataMkt as $dataM)
                        <tr>
                            <td>{{ $dataM->username }}</td>
                            <td>{{ $dataM->password }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            
        </div>
    </div>
</div>

@endsection
