@extends('layouts.main')
@section('title', 'Crear producto')
@section('main')
    <h1 class="mb-3">Ingresá a tu cuenta</h1>
    <form action="{{ route('processLogin') }}" method="post">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <!-- 2 column grid layout for inline styling -->
        <!-- <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
            </div>

            <div class="col">
                <a href="#!">Forgot password?</a>
            </div>
        </div> -->

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

        <!-- Register buttons -->
        <!-- <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
            </button>
        </div> -->
    </form>
@endsection