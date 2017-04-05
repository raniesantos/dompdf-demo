<section class="basic clear">

	<div class="info pull-left">
		<p class="title">{{ $my->fullname }}</p>

		<p>{{ $my->address }}</p>
		<a href="mailto:{{ $my->email }}">{{ $my->email }}</a>
		<p><a href="{{ $my->website }}">{{ $my->website }}</a></p>
		<p>{{ $my->mobile }}</p>
	</div>

	<div class="image pull-right">
		<img src="{{ asset('img/my-photo.png') }}">
	</div>

</section>
