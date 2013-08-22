Messages Twig Extension
----

This extension adds the following Messages helpers functions to Twig:

 - `messages_render` : For render all type message
 - `messages_render_success` : For render all success message
 - `messages_render_error` : For render all error message
 - `messages_render_warning` : For render all warning message
 - `messages_render_info` : For render all info message

To enable this extension, edit `config/parser.php`, and add `Messages_Addons_Twig` to the `extensions` key under 'View_Twig', like so:

```php
'View_Twig' => array(
	'extensions' => array(
		'Twig_Fuel_Extension',
		'Messages_Addons_Twig',
	),
),
```
