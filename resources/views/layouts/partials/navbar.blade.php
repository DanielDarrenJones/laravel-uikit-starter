<nav class="uk-navbar-container {{ request()->is('/') ? 'uk-navbar-transparent' : '' }}">
    <div class="uk-container">
        <div uk-navbar>
            <div class="uk-navbar-left uk-visible@s">
                <a href="/" class="uk-navbar-item uk-logo {{ request()->is('/') ? 'uk-hidden' : '' }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="uk-navbar-center uk-hidden@s">
                <a href="/" class="uk-navbar-item uk-logo {{ request()->is('/') ? 'uk-hidden' : '' }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a class="uk-navbar-toggle" style="color: white" uk-navbar-toggle-icon href="#"></a>
                        <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 200; mode: click; pos: bottom-right">
                            <ul class="uk-nav uk-navbar-dropdown-nav uk-text-center">
                                <li><a href="#">Menu Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
