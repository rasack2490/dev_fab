@extends('layout.master')
@section('contenu')
<div class="contenu ">
           <form action="{{ route('login') }}" method="post" class="form mt-5 p-5">
            @csrf
                <div class=" ">
                    <h2 class="text-center">Connexion</h2>
                    <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" placeholder="Email" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="password" class="form-control mb-3" name="password" placeholder="password">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('login') }}
                                </button>
                </div>
                <p>Vous n'avez pas de compte? <span><a href="inscription">inscription</a></span></p>
                <div id="erro">
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                </div>

            </form>
           </div>
@endsection
