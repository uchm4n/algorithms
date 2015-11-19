<?php

get('/','HomeController@index');
get('/queen/{number?}','QeenController@queen');

get('/n2w/','N2WController@index');
post('/n2w/convert','N2WController@n2w');

get('/arrayRotation','arrayRotationController@index');

