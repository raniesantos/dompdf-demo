<section class="skills">

	<header>Skills</header>

	<ul>
	@foreach($my->skill_categories as $category)
		<li>
			<strong>{{ $category->name }}:</strong>
			{{ implode(', ', $category->skills) }}

			@if(isset($category->subcategories))
				<ul>
				@foreach($category->subcategories as $subcategory)
					<li>
						<strong>{{ $subcategory->name }}:</strong>
						{{ implode(', ', $subcategory->skills) }}
					</li>
				@endforeach
				</ul>
			@endif
				
		</li>
	@endforeach
	</ul>

</section>
