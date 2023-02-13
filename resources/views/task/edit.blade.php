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
    <div class="card">
        <div class="card-body">
            <form action="{{ url("/tasks/$task->id") }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input type="text" class="form-control" name="user" value="{{$task->user}}">
                    @error('user')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea class="form-control" id="" rows="3" name="task">{{$task->task}}</textarea>
                    @error('task')
                    <span class="text-danger">
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
