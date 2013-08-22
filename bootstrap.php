<?php

Autoloader::add_core_namespace('Messages');

Autoloader::add_classes(array(
	'Messages'                => __DIR__.'/classes/messages/messages.php',
	'Messages\\Messages_Instance'                => __DIR__.'/classes/messages/instance.php',
	'Messages\\Messages_Addons_Twig'    => __DIR__.'/classes/messages/addons/twig.php',
));

/* End of file bootstrap.php */
