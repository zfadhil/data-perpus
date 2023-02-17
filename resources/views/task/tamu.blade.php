@extends('layouts.app')
@section('main')
<div class="border rounded mt-3 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">List Buku</span>
        <div class="md:hidden mx-auto mt-4">{{ $data->links('pagination::tailwind') }}</div>
    </div>
</div>

<div class="hidden md:block mx-4 mt-4">{{ $data->links('pagination::tailwind') }}</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4 md:my-7">
    @foreach ($data as $item)
    <div class="card border mt-0 md:mt-2 w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <span class="badge badge-outline">{{$item->statuss}}</span>
            <h2 class="card-title">{{$item->user}}</h2>
            <p class="text-justify">{{$item->task}}</p>
        </div>
    </div>
    @endforeach

</div>
@endsection
