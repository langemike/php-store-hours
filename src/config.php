<?php

return [
	'hours' => array(
		'mon' => array('11:00-20:30'),
	    'tue' => array('11:00-13:00', '18:00-20:30'),
	    'wed' => array('11:00-20:30'),
	    'thu' => array('11:00-1:30'), // Open late
	    'fri' => array('11:00-20:30'),
	    'sat' => array('11:00-20:00'),
	    'sun' => array() // Closed all day
	),
	'exceptions' => array(
	    '2/24'  => array('11:00-18:00'),
	    '10/18' => array('11:00-16:00', '18:00-20:30')
	)
];