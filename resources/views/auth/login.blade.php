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
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="label">Email</label>
                    <input type="email" class="input input-bordered w-full max-w-xs" placeholder="user@example.com"
                        name="email" value="{{old('email')}}">
                    @error('email')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="label">Password</label>
                    <input type="password" class="input input-bordered w-full max-w-xs" placeholder="password" name="password" value="">
                    @error('password')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>

                <div class="card-actions">
                    <a href="{{ route('password.request') }}" class="btn btn-link">Forget Password</a>
                    <button type="submit" class="btn btn-primary">login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
