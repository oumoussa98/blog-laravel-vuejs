@extends('layouts.app')
@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center ">              
            <h2>You are not authorized for this action</h2>
            <a href=" {{ url('dashboard') }} ">Return</a>

        
        </div>
    </div>
</div>

@endsection