@component('layouts.app')

<div class="uk-section">
    <div class="uk-container uk-margin uk-text-center">

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
            <form class="uk-grid-small" uk-grid method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="uk-width-1-1">
                    <input id="name" type="text" class="uk-input{{ $errors->has('name') ? ' uk-form-danger' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                </div>

                <div class="uk-width-1-1">
                    <input id="email" type="email" class="uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>

                <div class="uk-width-1-1">
                    <input id="password" type="password" class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password" placeholder="Password" required>
                </div>

                <div class="uk-width-1-1">
                    <input id="password-confirm" type="password" class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <div class="uk-width-1-1">
                    <button type="submit" class="uk-button uk-button-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endcomponent
