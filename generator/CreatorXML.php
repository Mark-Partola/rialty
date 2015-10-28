<?php namespace Generator;

class CreatorXML{

	public static function export($format, $data){

		switch($format){
			case 'yandex':
				include __DIR__ . '/../views/yandex.php';
				break;

			case 'avito':
				include __DIR__ . '/../views/avito.php';
				break;
			case 'default':
				header('Content-Type: text/html;charset=utf-8');
				echo 'Укажите формат ?export=';
				break;
			default:
				header('Content-Type: text/html;charset=utf-8');
				echo 'Формат не поддерживается';
		}

	}

	private static function print_with_validate($field, $value){
		if(!empty($value))
			echo "<$field>". $value ."</$field>";
	}
	private static function print_with_validate_array($fields){
		foreach($fields as $key => $value){
			if(isset($value) && $value != "")
				echo "<$key>". $value ."</$key>";
		}
	}

}

