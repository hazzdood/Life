<?php
$map =
[
	'start'                =>
	[
		'name'        => 'start',
		'description' => 'You are sitting by a babbling brook. A chimpanzee sits next to you polishing a tin whistle.',
		'image'       => 'resources/img/brook.jpg',
		'actions'     =>
		[
			'walk north'   => 'forest',
			'tickle chimp' => 'brook-chimp-mad',
		],
	],

	'brook-chimp-mad'      =>
	[
		'name'        => 'brook-chimp-mad',
		'description' => 'You are sitting by a babbling brook. A chimpanzee with a tin whistle looks at you menacingly.',
		'image'       => 'resources/img/chimp.jpg',
		'actions'     =>
		[
			'walk north'   => 'forest',
			'tickle chimp' => 'brook-chimp-very-mad',
		],
	],

	'brook-chimp-very-mad' =>
	[
		'name'        => 'brook-chimp-very-mad',
		'description' => 'The chimp screams at you then beets you to a red puddle leaking into the brook.',
		'image'       => 'resources/img/chimp.jpg',
		'actions'     =>
		[
			'restart' => 'start',
		],
	],

	'forest'               =>
	[
		'name'        => 'forest',
		'description' => 'You have come to a clearing in the forest. There is a faint odor of pomegranate in the air. You hear a whisper.',
		'image'       => 'resources/img/forest.jpg',
		'actions'     =>
		[
			'climb tree' => 'canopy',
			'walk south' => 'start',
		],
	],

	'canopy'               =>
	[
		'name'        => 'canopy',
		'description' => 'You are high above the forest. Your arms are sore.',
		'image'       => 'resources/img/canopy.jpg',
		'actions'     =>
		[
			'climb down' => 'forest',
			'jump down'  => 'forest_injured',
		],
	],

	'forest_injured'       =>
	[
		'name'        => 'forest_injured',
		'description' => 'Well that was a bit silly, you landed on your head and died.',
		'image'       => 'resources/img/forest.jpg',
		'actions'     =>
		[
			'restart' => 'start',
		],
	],
]
?>
