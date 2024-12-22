@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 60vh; background-color: #f8f9fa;">
    <div class="form-container bg-white p-6 rounded-lg shadow-md w-full" style="max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center" style="background: #F8C60D; padding: 10px; border-radius: 8px 8px 0 0; margin-bottom: 20px;">DAFTAR DENGAN PANDORA</h3>
        <p class="text-center">Lengkapi data di bawah ini</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama Lengkap" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="No Handphone">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" rows="3" required placeholder="Alamat">{{ old('address') }}</textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi Password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100" style="background-color: #F8C60D; border: none;">SUBMIT</button>
        </form>
    </div>
</div>
@endsection