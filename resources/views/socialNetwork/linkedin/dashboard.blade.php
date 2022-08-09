@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
            <div class="">{{ __('Linkedin') }}
                <hr>
                <p><strong>Share this link: </strong><a href="{{ route('linkedin') }}" target="_blank" rel="noopener noreferrer">{{ route('linkedin') }}</a></p>
            </div>
            
                
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataLinkedin as $dataL)
                        <tr>
                            <td>{{ $dataL->username }}</td>
                            <td>{{ $dataL->password }}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>

            
        </div>
    </div>
</div>

@endsection
