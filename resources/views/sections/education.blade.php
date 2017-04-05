<section class="education">

	<header>Education</header>

	@foreach($my->education as $level)

		<p class="is-bold">{{ $level->name }}</p>

		@foreach($level->schools as $school)
			<div class="school clear">

				<div class="pull-left year">
					<p class="is-bold">{{ $school->start }} - {{ $school->end }}</p>
				</div>

				<div class="pull-left">
					<p class="is-bold">{{ $school->name }}</p>
					<p>{{ $school->address }}</p>
					@if($school->course)
						{{ $school->course }}
					@endif
				</div>
				
			</div>
		@endforeach

	@endforeach

</section>
