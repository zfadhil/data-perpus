@extends('layouts.app')
@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">List Buku</span>
        <a href="{{ url('/admin/create') }}" class="btn btn-sm btn-primary">tambah</a>
    </div>
</div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($data as $item)
        <div class="card mt-2 w-96 bg-base-100 shadow-xl mx-auto">
            <div class="card-body">
                <span class="badge">{{$item->statuss}}</span>
                <h2 class="card-title">{{$item->user}}</h2>
                <p>{{$item->task}}</p>
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
    </div>
@endsection
