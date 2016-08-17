<?php
$manifest = array(
    'name' => 'semlot_data',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin@pravmail.ru',
    'description' => 'Добавление данных для semlot',
    'is_uninstallable' => true,
    'published_date' => '2016-08-18',
    'type' => 'module',
    'version' => '1.0.0',
);
$installdefs = array(
    'id' => 'semlot_data',
	'language' => array (
      array (
        'from' => '<basepath>/source/modules/application/language/ru_ru.lang.php',
        'to_module' => 'application',
        'language' => 'ru_ru',
      ),
	),

);
