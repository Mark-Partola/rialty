<?php

require_once 'autoload.php';

$db = Config\DatabaseConnect::connect();

$stmt = $db->query(
	"SELECT `xml`.*
		FROM `xml` 
		INNER JOIN `items` 
			ON `xml`.`oid` = `items`.`id`
				WHERE `items`.`xml` = '1'"
);

$result = $stmt->fetchAll();

foreach ($result as $key => $item) {

	$id = 	$item['oid'];

	$stmt = $db->query(
		"SELECT `id`
			FROM `photos`
			WHERE `pid` = '$id'"
	);

	$res = $stmt->fetchAll();
	if($res){
		$result[$key]['photos'] = $res;
	}
}

//echo '<pre>'.print_r($result, true).'</pre>';

//Config\DBSeeder::seed($db);

if(isset($_GET['export']))
	$export = $_GET['export'];
else
	$export = 'default';

Generator\CreatorXML::export($export, $result);
