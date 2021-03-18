@extends('layout.master')
@section('contenu')<div class="contenu ">
           <form action="{{ route('inscription') }}" method="post" class="form mt-5 p-5">
            @csrf
                <div class=" ">
                    <h2 class="text-center">Inscription</h2>
                    <input type="text" class="form-control mb-3 @error('nom') is-invalid @enderror" name="nom" placeholder="Nom">
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" class="form-control mb-3 @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prenom">
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" class="form-control mb-3 @error('matricule') is-invalid @enderror" name="matricule" placeholder="Matricule" >
                    @error('matricule')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" class="form-control mb-3 @error('numero') is-invalid @enderror" name="numero" placeholder="numero telephone">
                    @error('numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" placeholder="Email" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" placeholder="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="btn btn-success">
                        {{ __('inscription') }}
                    </button>





                </div>
                <p>Vous avez un compte? <span><a href="/">connexion</a></span></p>
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

