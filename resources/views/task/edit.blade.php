@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card w-max bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Edit list Buku</h2>
            <form action="{{ url("/admin/$task->id") }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <input type="text" class="input input-bordered w-full max-w-md" placeholder="Judul" name="user" value="{{$task->user}}">
                    @error('user')
                    <span class="text-error">
                        {{$message}}
                    </span>
                    @enderror
                    <input type="text" class="input input-bordered w-full max-w-md mt-2" placeholder="Status buku" name="statuss"
                        value="{{ old('task', $task->statuss) }}">
                    @error('statuss')
                    <span class="text-error">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea class="input input-bordered h-full w-full max-w-md" placeholder="Deskripsi" id="" rows="3"
                        name="task">{{$task->task}}</textarea>
                    @error('task')
                    <span class="text-error">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
