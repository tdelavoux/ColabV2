<link href="{{ asset('css/exceptions/404.css') }}" rel="stylesheet">

<div class="mars"></div>
<img src="{{ asset('img/404.svg') }}" class="logo-404" />
<img src="{{ asset('img/meteor.svg') }}" class="meteor" />
<p class="title">Oh non !!</p>
<p class="subtitle">
	Votre URL est incorrecte <br /> ou la page que vous demandez n'existe plus.
</p>
<div align="center">
	<a class="btn-back" href="{{ route('logout') }}">Retour à l'accueil</a>
</div>
<img src="{{ asset('img/astronaut.svg') }}" class="astronaut" />
<img src="{{ asset('img/spaceship.svg') }}" class="spaceship" />

{{-- TODO revoir sur tailel d'écran les styles --}}
