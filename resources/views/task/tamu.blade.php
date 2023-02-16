@extends('layouts.app')
@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">List Buku</span>
    </div>
</div>

<div class="mt-2">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($data as $item)
        <div class="card w-96 bg-base-100 shadow-xl mx-auto">
            <div class="card-body">
                <span class="badge">{{$item->statuss}}</span>
                <h2 class="card-title">{{$item->user}}</h2>
                <p>{{$item->task}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
