<section class="seminars">

	<header>Seminars Attended</header>

	@foreach($my->seminars as $seminar)
		<div class="seminar">
			<p class="is-bold">{{ $seminar->topic }}</p>
			<p>{{ $seminar->venue }}</p>
			<p>{{ $seminar->date }}</p>
		</div>
	@endforeach

</section>
