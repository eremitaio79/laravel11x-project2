@extends('layouts.main_layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>View</h1>
            <p>main method.</p>
            <p>Valor repassado ao método via GET: <strong>{{ $value }}</strong></p>
        </div>
    </div>
@endsection
