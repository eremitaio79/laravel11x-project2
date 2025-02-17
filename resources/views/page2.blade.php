@extends('layouts.main_layout')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <h1>PAGE2</h1>
            <p>page2 method.</p>
            <p>Valor repassado ao método via GET: <strong>{{ $value }}</strong></p>
        </div>
    </div>
@endsection
