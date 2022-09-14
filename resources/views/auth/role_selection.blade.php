@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MADACAR ROLE</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('login', ['role'=>'client']) }}">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Go With Client
                                </button>
                            </div>
                        </div>
                    </form>
                    <form method="GET" action="{{ route('login', ['role'=>'service_provider']) }}">
                        @csrf
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Go With Service Provider
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
