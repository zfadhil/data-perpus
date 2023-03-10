@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Verification!</h2>
            @if (session('status'))
            <div class="alert alert-success">
                A New Verification Link Has Been Send To Your Email
            </div>
            @endif
            Before Proceding, Please Check Your Email For Verification.
            or <form action="{{route('verification.send')}}" method="POST" class="inline">
                @csrf
                <button class="btn btn-link  p-0 m-0 align-baseline" type="submit">
                    {{_('click here to request another Verification')}}
                </button>
        </div>
    </div>
</div>
@endsection
