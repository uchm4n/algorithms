<?php

get('/','HomeController@index');
get('/queen/{number?}','HomeController@queen');