<?php

namespace classes;

abstract class SupportedLanguages{
	const Default = self::English;
	const English = 'en';
	const Spanish = 'es';

	public static function Load(){
		switch ($_SESSION["language"]) {
			case self::English:
				require_once 'static/lang/English.php';
				break;
			case self::English:
				require_once 'static/lang/Spanish.php';
				break;
			default:
				require_once 'static/lang/English.php';
				break;
		}

	}
}

?>
