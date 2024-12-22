@extends('layouts.app')

@section('content')
 <div style="display: flex; justify-content: center; align-items: center; height: 50vh;">
    <div class="bg-white p-6 rounded-lg shadow-md w-full form-container" style="max-width: 320px; background: rgba(255, 255, 255, 0.9); padding: 16px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <div class="text-center mb-6">
            <h3 class="text-2xl font-bold text-yellow-500">PANDORA</h3>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="form-control @error('email') is-invalid @enderror" placeholder="Email Address">
                @error('email')
                <span class="text-red-500 text-sm mt-1">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <input id="password" type="password" name="password" required
                    class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                <span class="text-red-500 text-sm mt-1">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="btn btn-primary w-100" style="background-color: #F8C60D; border: none;">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                    {{ __('Jika belum memiliki akun, silakan daftar di sini') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection