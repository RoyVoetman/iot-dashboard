@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                </div>
            @endif

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">LED lamp 1 <small class="float-right">(192.168.2.36)</small></div>

                    <div class="card-body">

                        <div class="form text-left">
                            <form action="/update/192.168.2.36" method="POST" class="form-inline">
                                @csrf
                                <input type="color" style="width: 100px;" class="form-control mb-2 mr-sm-2"
                                       name="payload" id="color" placeholder="Enter a color">

                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Light sensor 1 <small class="float-right">(192.168.2.35)</small></div>

                    <div class="card-body">
                        <input type="text" readonly style="width: 100px;" class="form-control mb-2 mr-sm-2" id="192.168.2.35">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
