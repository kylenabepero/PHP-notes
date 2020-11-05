<?php

//setcookie();

// name, value, expiration

// set cookie 
setcookie('name', 'john');

// set expiration 
setcookie('color', 'red', time() + 3600);

echo date('H i');

// path, domain, secure, http

// set secure to true
setcookie('test', 'test', 0, '', '', true);
