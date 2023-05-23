@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
    <h1 class="mb-3">Ingresá a tu cuenta</h1>
    <form action="{{ route('processLogin') }}" method="post">
        @csrf
        
        <div class="form-outline mb-4">
            <label for="nickname" class="form-label">Nombre de usuario</label>
            <input 
                type="nickname" 
                name="nickname" 
                id="nickname" 
                class="form-control" 
                value="{{ old('nickname') }}"
                @error('nickname') aria-describedBy="error-nickname" @enderror >
            
            @error('nickname')
            <div class="text-danger" id="error-nickname">{{ $message }}</div>   
            @enderror
        </div>

        <div class="form-outline mb-4">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                class="form-control"
                @error('password') aria-describedBy="error-password" @enderror >
            
                @error('password')
            <div class="text-danger" id="error-password">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    </form>
@endsection