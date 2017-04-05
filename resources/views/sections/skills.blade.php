<section class="skills">

	<header>Skills</header>

	<ul>
		<li>Familiar with basic computer hardware troubleshooting</li>
		<li>Familiar with Command-line, Git (Version Control System), SSH, Basic Linux/UNIX commands</li>
		<li>
			Familiar with the following languages:
			<p class="is-indented">{{ implode(', ', $my->languages) }}</p>
		</li>

		<li>
			Familiar with the following web development technologies:
			@include('list', ['items' => $my->web_techs])
		</li>

		<li>
			Familiar with the following concepts:
			@include('list', ['items' => $my->concepts])
		</li>
	</ul>

</section>
