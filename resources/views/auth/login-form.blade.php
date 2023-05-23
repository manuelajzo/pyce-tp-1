@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
    <section class="row justify-content-center">
        <h2>Inicia Sesión</h2>
        <form action="{{ route('processLogin') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input 
                            type="username" 
                            name="username" 
                            id="username" 
                            class="form-control" 
                            value="{{ old('username') }}"
                            @error('username') aria-describedBy="error-username" @enderror 
                            required >
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control"
                            @error('password') aria-describedBy="error-password" @enderror required>
                    </div>
                </div>    
            </div>
            
            <button type="submit" class="btn btn-dark form-button">Entrar</button>
        </form>
    </section>
@endsection
