@extends('templates.layouts')
@section('content')
 <div class="d-flex align-items-center p-3 my-3 text-white bg-primary rounded shadow-sm">
    <img class="me-3" src="{{ url('./assets/media/icons/iconibik.png') }}" alt="icon-ibik"
    width="45" height="45">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Kuis</h1>
        <small>7-6-2023</small>
    </div>
 </div>
 <div class="card">
    <div class="card-header">
        <h3 class="card-title">Home Page</h3>
    </div>
    <div class="card-body">
    Welcome!
    </div>
 </div>
@endsection