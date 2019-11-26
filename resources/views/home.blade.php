@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!   {{ Auth::user()->FirstName }}   


                @if(Auth::user()->roleid==1)
                admin
                @endif

                @if(Auth::user()->roleid==2)
                user
                @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
