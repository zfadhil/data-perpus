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
            <form action="{{ route('password.update') }}" method="POST">
                 @csrf
                 <input type="hidden" placeholder="user@example.com" name="token" value="{{$request->route('token')}}">
                <div class="mb-3">
                    <label for="" class="label">Email</label>
                    <input type="email" class="input input-bordered w-full max-w-xs" name="email" value="{{old('email', $request->email )}}">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Password</label>
                    <input type="password" placeholder="password" class="input input-bordered w-full max-w-xs" name="password" value="{{old('password')}}">
                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Confirm Password</label>
                    <input type="password" placeholder="password" class="input input-bordered w-full max-w-xs" name="password_confirmation">
                </div>
                
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection
