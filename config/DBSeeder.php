<?php namespace Config;

require_once  __DIR__ . '/../' . 'vendor/fzaninotto/faker//src/autoload.php';


class DBSeeder{

	public static function seed(\PDO $db){

		$faker = \Faker\Factory::create();

		foreach(range(1, 50) as $index) {
			$check = ($index % 2 == 0);
			$type = $check ? 'sale' : 'rent';
			$propertyType = $check ? 'Type1' : 'Type2';
			$category = $check ? 'Cat1' : 'Cat2';
			$creationDate = $faker->date($format = 'Y-m-d', $max = 'now');
			$country = 'Russia';
			$region = 'MO';
			$district = 'Dm.';
			$localityName = 'Dmitrov';
			$localityType = 'locality-type';
			$street = $faker->streetName;
			$streetType = 'Type street';
			$houseNumber = $faker->buildingNumber;
			$address = $faker->address;
			$direction = $check ? 'Dir1' : 'Dir2';
			$distance = rand(1, 150);
			$salesAgentName = $faker->name;
			$salesAgentPhone  = $faker->phoneNumber;
			$salesAgentCategory = $check ? 'owner' : 'agency';
			$email = $faker->email;
			$priceValue = rand(100000, 15000000);
			$pricePeriod = $check ? 'day' : 'month';
			$priceUnit = $check ? 'hectare' : 'sq.m';
			$haggle = rand(0, 1);
			$mortgage = rand(0, 1);
			$withPets = rand(0, 1);
			$withChildren = rand(0, 1);
			$renovation = 'Field';
			$description = $faker->text;
			$area = rand(50, 150);
			$livingSpace = rand(50, 150);
			$kitchenSpace = rand(50, 150);
			$textSpace = 'Field';
			$lotArea = rand(50, 150);
			$lotType = 'Field';
			$newFlat = rand(0, 1);
			$rooms = rand(1, 6);
			$roomsOffered = rand(1, 6);
			$openPlan = rand(0, 1);
			$roomsType = 'Field';
			$phone = $faker->phoneNumber;
			$internet = rand(0, 1);
			$roomFurniture = rand(0, 1);
			$kitchenFurniture = rand(0, 1);
			$television = rand(0, 1);
			$washingMachine = rand(0, 1);
			$refrigerator = rand(0, 1);
			$balcony = $faker->word(5);
			$bathroomUnit = $faker->word(5);
			$floorCovering = $faker->word(5);
			$windowView = $faker->word(5);
			$floor = rand(1, 10);
			$floorsTotal = rand(11, 22);
			$buildingName = $faker->word(2);
			$buildingType = $faker->word(5);
			$buildingSeries = $faker->word(5);
			$buildingState = $check ? 'unfinished' : 'built';
			$builtYear = rand(1980, 2010);
			$readyQuarter = rand(1, 4);
			$lift = rand(0, 1);
			$rubbishChute = rand(0, 1);
			$isElite = rand(0, 1);
			$parking = rand(0, 1);
			$alarm = rand(0, 1);
			$ceilingHeight = rand(1, 10);
			$pmg = rand(0, 1);
			$toilet = rand(0, 1);
			$shower = rand(0, 1);
			$kitchen = rand(0, 1);
			$pool = rand(0, 1);
			$billiard = rand(0, 1);
			$sauna = rand(0, 1);
			$heatingSupply = rand(0, 1);
			$waterSupply = rand(0, 1);
			$sewerageSupply = rand(0, 1);
			$electricitySupply = rand(0, 1);
			$gasSupply = rand(0, 1);

			try{
					//header('Content-Type: text/html;charset=utf8');
				$db->exec("INSERT INTO `_rielty`.`xml`(`oid`, `type`, `property-type`, `category`, `creation-date`, `country`, 
					`region`, `district`, `locality-name`, `locality-type`, `street`, `street-type`, `house-number`, `address`, 
					`direction`, `distance`, `sales-agent-name`, `sales-agent-phone`, `sales-agent-category`, `email`, `price-value`, 
					`price-period`, `price-unit`, `haggle`, `mortgage`, `with-pets`, `with-children`, `renovation`, `description`, `area`, 
					`living-space`, `kitchen-space`, `text-space`, `lot-area`, `lot-type`, `new-flat`, `rooms`, `rooms-offered`, `open-plan`, 
					`rooms-type`, `phone`, `internet`, `room-furniture`, `kitchen-furniture`, `television`, `washing-machine`, `refrigerator`, 
					`balcony`, `bathroom-unit`, `floor-covering`, `window-view`, `floor`, `floors-total`, `building-name`, `building-type`, 
					`building-series`, `building-state`, `built-year`, `ready-quarter`, `lift`, `rubbish-chute`, `is-elite`, `parking`, `alarm`, 
					`ceiling-height`, `pmg`, `toilet`, `shower`, `kitchen`, `pool`, `billiard`, `sauna`, `heating-supply`, `water-supply`, 
					`sewerage-supply`, `electricity-supply`, `gas-supply`) 
					VALUES(
					'$index', '$type', '$propertyType', '$category', '$creationDate', '$country', '$region', '$district',
					'$localityName', '$localityType', '$street', '$streetType', '$houseNumber', '$address', '$direction',
					'$distance', '$salesAgentName', '$salesAgentPhone', '$salesAgentCategory', '$email', '$priceValue',
					'$pricePeriod', '$priceUnit', '$haggle', '$mortgage', '$withPets', '$withChildren', '$renovation', '$description',
					'$area', '$livingSpace', '$kitchenSpace', '$textSpace', '$lotArea', '$lotType', '$newFlat', '$rooms', '$roomsOffered',
					'$openPlan', '$roomsType', '$phone', '$internet', '$roomFurniture', '$kitchenFurniture', '$television', '$washingMachine',
					'$refrigerator', '$balcony', '$bathroomUnit', '$floorCovering', '$windowView', '$floor', '$floorsTotal', '$buildingName',
					'$buildingType', '$buildingSeries', '$buildingState', '$builtYear', '$readyQuarter', '$lift', '$rubbishChute',
					'$isElite', '$parking', '$alarm', '$ceilingHeight', '$pmg', '$toilet', '$shower', '$kitchen', '$pool', '$billiard',
					'$sauna', '$heatingSupply', '$waterSupply', '$sewerageSupply', '$electricitySupply', '$gasSupply'
				)");
			} catch (Exception $e){
				echo $e->getMessage();
			}

		}
	}


}
