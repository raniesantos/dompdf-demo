<section class="work">

	<header>Work Experience</header>

	@foreach($my->jobs as $job)
		<div class="job">

			<div class="main clear">

				<div class="date pull-left">
					<p class="is-bold">{{ $job->start }} - {{ $job->end }}</p>
				</div>

				<div class="pull-left">
					<p>{{ $job->position }}</p>
					<p>{!! nl2br($job->location) !!}</p>
				</div>

			</div>

			@include('list', ['items' => $job->tasks])

		</div>
	@endforeach

</section>
