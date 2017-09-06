<?php

// create the map
$map =
	[
	'start'              =>
	[
		'name'        => 'start',
		'description' => 'You get up in the morning, it\'s a school day. Can you be bothered going to school?',
		'actions'     =>
		[
			'yes sure okay ok yee yeah fine' => 'home',
			'no nah nope'                    => 'just-no',
		],
	],

	'just-no'            =>
	[
		'name'        => 'just-no',
		'description' => 'Ok then, have a nice day :)<br>(restart)',
		'actions'     => [],
	],

	'home'               =>
	[
		'name'        => 'home',
		'description' => 'Alright then, do you want to take the train or ride?',
		'actions'     =>
		[
			'ride bike' => 'helmet',
			'train'     => 'train-late',
		],
	],

	'helmet'             =>
	[
		'name'        => 'helmet',
		'description' => 'You get your bike from the garage. Do you want to get your helmet?',
		'actions'     =>
		[
			'yes sure okay ok yee yeah fine' => 'fall-helmet',
			'no nah nope nope'               => 'fall-no-helmet',
		],
	],

	'fall-no-helmet'     =>
	[
		'name'        => 'fall-no-helmet',
		'description' => 'You are riding and try to jump over the curb, crash your bike and fall on your head. Because you did not get your helmet, you are now a paraplegic.<br>(restart)',
		'actions'     => [],
	],

	'fall-helmet'        =>
	[
		'name'        => 'fall-helmet',
		'description' => 'You are riding and try to jump over the curb, crash your bike and fall on your head, but lucky you are wearing a helmet so you are fine. You arrive at school and ride up to the bike rack. Should you lock up your bike?',
		'actions'     =>
		[
			'yes sure okay ok yee yeah fine' => 'school-bike',
			'no nah nope'                    => 'school-bike-stolen',
		],
	],

	'school-bike-stolen' =>
	[
		'name'        => 'school-bike-stolen',
		'description' => 'You go to class, school is particularly boring today but you get through it. When you get out at the end of the day you go to find your bike but it\'s gone. Too bad you didn\'t lock up :)<br>(restart)',
		'actions'     => [],
	],

	'school-bike'        =>
	[
		'name'        => 'school-bike',
		'description' => 'You go to class, school is particularly boring today but you get through it. You go get your bike, ride home, have dinner and go to bed. When you wake up in the morning it\'s a school day. do you want to take the train or ride?',
		'actions'     =>
		[
			'ride bike' => 'helmet',
			'train'     => 'train-late',
		],
	],

	'train-late'         =>
	[
		'name'        => 'train-late',
		'description' => 'You go to the train, but it\'s running fifteen minuets late. Do you want to go home and ride?',
		'actions'     =>
		[
			'no nah nope train'                        => 'raining',
			'yes sure okay ok yee yeah fine ride bike' => 'train-bike',
		],
	],

	'train-bike'         =>
	[
		'name'        => 'train-bike',
		'description' => 'You go home and get your bike from the garage. Do you want to get your helmet?',
		'actions'     =>
		[
			'yes sure okay ok yee yeah fine' => 'fall-helmet',
			'no nah nope'                    => 'fall-no-helmet',
		],
	],

	'raining'            =>
	[
		'name'        => 'raining',
		'description' => 'You wait for the train, get on and try not to stare at the guy you have a crush on. When the train arrives it is tipping it down. Should you take the long dry way and be late, or the short very, very, very wet way?',
		'actions'     =>
		[
			'long late dry'          => 'school-late',
			'short wet very on time' => 'school-on-time',
		],
	],

	'school-late'        =>
	[
		'name'        => 'school-late',
		'description' => 'You take the long way and stay dry but get to school five minutes late, so you get a detention and are late to get home and make dinner but you do get home, make dinner very quickly, and go to bed. When you wake up in the morning it\'s a school day. do you want to take the train or ride?',
		'actions'     =>
		[
			'ride bike' => 'helmet',
			'train'     => 'train-late',
		],
	],

	'school-on-time'     =>
	[
		'name'        => 'school-on-time',
		'description' => 'You take the short way and get absolutely soaked but you change into some spare clothes and get on with the day. You go home, make dinner, and go to bed. When you wake up in the morning it\'s a school day. do you want to take the train or ride?',
		'actions'     =>
		[
			'ride bike' => 'helmet',
			'train'     => 'train-late',
		],
	],
];

?>
