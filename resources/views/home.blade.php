@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    <p v-for="(user, index) in users" :key="index">@{{user.name}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
