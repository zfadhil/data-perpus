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
            <form action="{{ url('/admin') }}" method="POST">
                 @csrf
                <div class="mb-3">
                    {{-- <label for="" class="form-label">Judul</label> --}}
                    <input type="text" class="form-control" placeholder="Judul" name="user" value="{{old('user')}}">
                        @error('user')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                    <input type="text" class="form-control mt-2" placeholder="Status buku" name="statuss" value="{{old('statuss')}}">
                        @error('statuss')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    {{-- <label for="" class="form-label">Deskripsi</label> --}}
                    <textarea class="form-control" placeholder="Deskripsi" id="" rows="3" name="task" >{{old('task')}}</textarea>
                    @error('task')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
