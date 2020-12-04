<?php
require __DIR__ . '/enc.php5';
switch (true) {
	case $_POST['link'] && $_POST['name']: if(!file_exists(__DIR__.'/Download')) {
		mkdir(__DIR__.'/Download');
		download($_POST['link'], $_POST['name'], __DIR__.'/Download');
	} else {
		download($_POST['link'], $_POST['name'], __DIR__.'/Download');
	}
}