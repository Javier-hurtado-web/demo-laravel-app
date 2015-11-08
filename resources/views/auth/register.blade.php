@extends('layouts.default', ['pageTitle' => 'Se connecter'])

@section('body')
<div class="container">
    <div class="row">
        <form class="col l6 offset-l3 m8 offset-m2 s12" method="POST" action="{{ URL::to('auth/register') }}">
            {!! csrf_field() !!}
            <h1 class="h2 header center">Nouveau compte</h1>

            @if (count($errors))
            <h2 class="h4 header">Erreurs</h2>
            <ul>
                @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <div class="card">
                <div class="card-content row">
                    <div class="input-field col s12">
                        <input id="c0" type="text" name="username" value="{{ old('username') }}"
                        @if ($errors->has('username'))
                               class="validate invalid"
                        @endif
                        >
                        <label for="c0"
                        @if ($errors->has('username') && old('username'))
                               data-error="{{ $errors->first('username') }}"
                        @endif
                        >Nom d'utilisateur</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="c1" type="email" name="email" value="{{ old('email') }}"
                        @if ($errors->has('email'))
                               class="validate invalid"
                        @endif
                        >
                        <label for="c1"
                        @if ($errors->has('email') && old('email'))
                               data-error="{{ $errors->first('email') }}"
                        @endif
                        >Courriel</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="c2" type="password" name="password"
                        @if ($errors->has('password'))
                               class="validate invalid"
                        @endif
                        >
                        <label for="c2">Mot de passe</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="c3" type="password" name="password_confirmation"
                        @if ($errors->has('password_confirmation'))
                               class="validate invalid"
                        @endif
                        >
                        <label for="c3">Confirmation du mot de passe</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="c4" type="checkbox" name="accept">
                        <label for="c4">J'accepte les conditions.</label>
                    </div>
                </div>
                <div class="card-action row">
                    <div class="input-field col s12 center-align">
                        <button class="btn-large" type="submit">
                            S'inscrire
                            <i class="mdi-content-add-circle material-icons left"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="col l6 offset-l3 m8 offset-m2 s12 center">
            <p>
                Vous possèdez déjà un compte et désirez <a href="{{ Url::to('auth/login') }}">vous connecter</a>.
            </p>
        </div>
    </div>
</div>
@stop