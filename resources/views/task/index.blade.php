@extends('layouts.app')
@section('main')
<div class="border rounded mt-5 mx-auto" style="width: 380px;">
    <div class="w-96 justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <div class="inline">
            <span class="fs-5 fw-semibold">List Buku</span>
            <a href="{{ url('/admin/create') }}" class="btn btn-sm btn-primary">tambah</a>
        </div>
        <div class="hidden md:block">
            {{ $data->links('pagination::tailwind') }}
        </div>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($data as $item)
    <div class="card mt-2 w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <span class="badge badge-outline">{{$item->statuss}}</span>
            <h2 class="card-title">{{$item->user}}</h2>
            <p class="text-justify">{{$item->task}}</p>
            <div class="card-action justify-end">
                <form action="{{url("/admin/$item->id")}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{url("/admin/$item->id/edit")}}" class="btn btn-warning">edit</a>
                    <button type="submit" class="btn btn-error">delete</button>
                </form>
            </div>
        </div>

    </div>
    @endforeach
    <div class="md:hidden"><br>{{ $data->links('pagination::tailwind') }}</div>
</div>
@endsection
