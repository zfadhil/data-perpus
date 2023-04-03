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
            <form action="{{ route('register') }}" method="POST">
                 @csrf
                <div class="mb-3">
                    <label for="" class="label">Name</label>
                    <input type="text" class="input input-bordered w-full max-w-xs" placeholder="username" name="name" value="{{old('name')}}">
                        @error('name')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Role</label>
                    <input type="text" class="input input-bordered w-full max-w-xs" placeholder="role" name="role" value="{{old('role')}}">
                        @error('role')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Email</label>
                    <input type="email" class="input input-bordered w-full max-w-xs" placeholder="user@example.com" name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Password</label>
                    <input type="password" class="input input-bordered w-full max-w-xs" placeholder="password" name="password" value="{{old('password')}}">
                        @error('password')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Confirm Password</label>
                    <input type="password" class="input input-bordered w-full max-w-xs" placeholder="Confirm password" name="password_confirmation">
                </div>
                
                <button type="submit" class="btn btn-primary">register</button>
                <p>sudah punya akun? silahkan <a href="{{route('login')}}" class="hidden md:flex">Login</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
