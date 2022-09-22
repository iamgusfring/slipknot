@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
            <div class="">{{ __('Visitor') }}
                <hr>
                <p><strong>Share this link: </strong><a href="{{ route('visitor') }}" target="_blank" rel="noopener noreferrer">{{ __('Visitor') }}</a></p>
            </div>
            
                
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ip</th>
                        <th>isp</th>
                        <th>city</th>
                        <th>region</th>
                        <th>country</th>
                        <th>time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataVisitor as $dataV)
                    <tr>
                        <td>{{ $dataV->ip }}</td>
                        <td>{{ $dataV->isp }}</td>
                        <td>{{ $dataV->city }}</td>
                        <td>{{ $dataV->region }}</td>
                        <td>{{ $dataV->country }}</td>
                        <td>{{ $dataV->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>

            
        </div>

        

    </div>
</div>

{!! $dataVisitor->links() !!}

@endsection
