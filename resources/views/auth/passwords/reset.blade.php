@component('layouts.app')

<div class="uk-section">
    <div class="uk-container uk-margin uk-text-center">

        @if (session('status'))
        <div class="uk-alert-sucess" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            {{ session('status') }}
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <h3>Errors</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="uk-card uk-card-default uk-card-body">
            <form class="uk-grid-small" uk-grid role="form" method="POST" action="{{ route('password.request') }}">
                <div class="uk-width-1-1">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <input class="uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}" type="email" placeholder="Email" name="email" value="{{ $email or old('email') }}" required autofocus>
                </div>

                <div class="uk-width-1-1">
                    <input class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" type="password" placeholder="Password" name="password" required>
                </div>

                <div class="uk-width-1-1">
                    <input class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" type="password" placeholder="Password Confirmation" name="password_confirmation" required>
                </div>

                <div class="uk-width-1-1">
                    <button type="submit" class="uk-button uk-button-primary">
                        Login
                    </button>
                </div>

                <div class="uk-width-1-1">
                    <a class="uk-button uk-button-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endcomponent
