<section class="basic clear">

	<div class="info pull-left">
		<p class="title">{{ $my->fullname }}</p>

		<p>{{ $my->address }}</p>
		<a href="mailto:{{ $my->email }}">{{ $my->email }}</a>
		<p><a href="{{ $my->website }}">{{ $my->website }}</a></p>
		@if($mobile)
			<p>{{ $my->mobile }}</p>
		@endif
	</div>

	<div class="image pull-right">
		<img src="{{ asset('img/my-photo.png') }}">
	</div>

</section>

@foreach(range(1, $my->spaces) as $s)
	<div class="space-block"></div>
@endforeach
