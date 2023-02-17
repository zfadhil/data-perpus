@extends('layouts.app')
@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">List Buku</span>
        <div class="hidden md:block">{{ $data->links('pagination::tailwind') }}</div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="md:hidden mx-auto mt-2">{{ $data->links('pagination::tailwind') }}</div>
    @foreach ($data as $item)
    <div class="card mt-0 md:mt-2 w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <span class="badge badge-outline">{{$item->statuss}}</span>
            <h2 class="card-title">{{$item->user}}</h2>
            <p class="text-justify">{{$item->task}}</p>
        </div>
    </div>
    @endforeach
    
</div>
@endsection
