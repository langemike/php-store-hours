<?php

return [
    'open'           => "<h3>Yes, we're open! Today's hours are {%hours%}.</h3>",
    'closed'         => "<h3>Sorry, we're closed. Today's hours are {%hours%}.</h3>",
    'closed_all_day' => "<h3>Sorry, we're closed today.</h3>",
    'separator'      => " - ",
    'join'           => " and ",
    'format'         => "g:ia", // options listed here: http://php.net/manual/en/function.date.php
    'hours'          => "{%open%}{%separator%}{%closed%}"
];