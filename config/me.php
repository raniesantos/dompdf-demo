<?php

return [

	//-------------------------------------------------------------------------
	// Basic Info
	//-------------------------------------------------------------------------
	'fullname' => 'Ranie Rodriguez Santos',
	'address' => env('MY_ADDRESS', ''),
	'email' => env('MY_EMAIL', ''),
	'website' => 'http://raniesantos.github.io',
	'mobile' => env('MY_MOBILE', ''),
	'photo' => 'img/my-photo.png',

	//-------------------------------------------------------------------------
	// Skills
	//-------------------------------------------------------------------------
	'languages' => [
		'HTML',
		'CSS',
		'JavaScript',
		'PHP',
		'MySQL',
	],
	'web_techs' => [
		'Sass (CSS Preprocessor)',
		'jQuery (JavaScript Library)',
		'Bootstrap and Foundation (Responsive Front-End Frameworks)',
		'Laravel (PHP MVC Framework)',
		'Gulp (Task runner)',
		'npm/Yarn for JavaScript and Composer for PHP (Package managers)',
	],
	'concepts' => [
		'Responsive web design',
		'MVC architectural pattern',
	],

	//-------------------------------------------------------------------------
	// Work Experience
	//-------------------------------------------------------------------------
	'jobs' => [
		[
			'start' => date_format(date_create('2014-06-16'), 'M j, Y'),
			'end' => date_format(date_create('2014-09-22'), 'M j, Y'),
			'position' => 'Computer Technician (Intern)',
			'location' => "Center for Institutional Information Technology\n(Pasig Catholic College)",
			'tasks' => [
				'Maintenance and troubleshooting of computer hardware and software',
				'Assisting with setup of computer equipment such as system units and LCD projectors',
			],
		],
	],

	//-------------------------------------------------------------------------
	// Education
	//-------------------------------------------------------------------------
	'education' => [
		[
			'name' => 'Tertiary',
			'schools' => [
				[
					'name' => 'Jose Rizal University',
					'address' => '80​​Shaw Blvd., Mandaluyong City',
					'course' => 'Bachelor of Science in Information Technology',
					'start' => 2010,
					'end' => 2015,
				],
				[
					'name' => 'AMA Computer College - Pasig',
					'address' => 'Silver Tree Bldg., One San Miguel Ave., Ortigas Center, Pasig City',
					'course' => 'Bachelor of Science in Information Technology',
					'start' => 2008,
					'end' => 2010,
				],
			],
		],
		[
			'name' => 'Secondary',
			'schools' => [
				[
					'name' => 'La Consolacion College - Pasig',
					'address' => '641 Mercedes Avenue, San Miguel, Pasig City',
					'course' => null,
					'start' => 2004,
					'end' => 2008,
				],
			],
		],
		[
			'name' => 'Primary',
			'schools' => [
				[
					'name' => 'La Consolacion College - Pasig',
					'address' => '641 Mercedes Avenue, San Miguel, Pasig City',
					'course' => null,
					'start' => 2000,
					'end' => 2004,
				],
				[
					'name' => 'Lourdes School of Mandaluyong',
					'address' => 'St.Francis, Mandaluyong City',
					'course' => null,
					'start' => 1998,
					'end' => 2000,
				],
			],
		],
	],

	//-------------------------------------------------------------------------
	// Seminars
	//-------------------------------------------------------------------------
	'seminars' => [
		[
			'topic' => 'iOS Seminar',
			'venue' => 'JRU Auditorium, Jose Rizal University, Mandaluyong City',
			'date' => date_format(date_create('2014-07-18'), 'F j, Y'),
		],
		[
			'topic' => 'Hack Speak and Secure Coding Seminar',
			'venue' => 'JRU Auditorium, Jose Rizal University, Mandaluyong City',
			'date' => date_format(date_create('2014-08-20'), 'F j, Y'),
		],
		[
			'topic' => 'IBM Bluemix Seminar and Unity 3D Seminar',
			'venue' => 'JRU Auditorium, Jose Rizal University, Mandaluyong City',
			'date' => date_format(date_create('2014-11-15'), 'F j, Y'),
		],
	],

	//-------------------------------------------------------------------------
	// Achievements
	//-------------------------------------------------------------------------
	'achievements' => [
		'Received 3rd Place JRU Web Developer of the Year award in 2015.',
		'Passed Professional Level Civil Service Exam in October 2016.',
	],

];
