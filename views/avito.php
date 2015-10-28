<?header('Content-Type: text/xml;charset=cp1251')?>
<?error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<?='<?xml version="1.0" encoding="utf-8"?>'?>

<Ads target="Avito.ru" formatVersion="2">
	<?foreach($data as $item):?>
	<Ad>
		<id><?=$item['oid']?></id>
		<?
			$categories = array(
				'комната' => 'комнаты',
				'квартира' => 'квартиры',
				'дом' => 'дома',
				'участок' => 'участки',
				'земельный участок' => 'земельные участки',
				'коттедж' => 'коттеджи',
				'дача' => 'дачи',
				'часть дома' => 'дома',
				'дом с участком' => 'дома'
			);
		?>
		<Category><?=$categories[mb_strtolower($item['category'])]?></Category>

		<DateBegin>TODO: ИЗМЕНИТЬ НА ISO! <?=$item['creation-date']?></DateBegin>
		<DateEnd>TODO: ИЗМЕНИТЬ НА ISO, УКАЗАТЬ СРОК! <?=$item['creation-date']?></DateEnd>

		<Region><?=$item['region']?></Region>
		<City><?=$item['locality-name']?></City>
		<District>Нет значения</District>
		<Description><?=$item['description']?></Description>
		<Price><?=$item['price-value']?></Price>
		<?/*Тип агенства??*/?>
		<CompanyName>Нет значения</CompanyName>
		<ManagerName><?=$item['sales-agent-name']?></ManagerName>
		<EMail><?=$item['email']?></EMail>
		<ContactPhone><?=$item['sales-agent-phone']?></ContactPhone>

		<!--Комнаты-->
		<OperationType></OperationType>
		<Locality><?=$item['locality-type']?> <?=$item['locality-name']?></Locality><!--Уточнение-->
		<Street></Street>
		<SaleRooms></SaleRooms><!--Сколько сдается-->
		<Rooms></Rooms>
		<Square></Square>
		<Floor></Floor>
		<Floors></Floors>
		<HouseType></HouseType>
		<LeaseType></LeaseType>
		<Images>
			<Image url=""></Image>
		</Images>

		<!--Квартиры-->
		<OperationType></OperationType>
		<Locality></Locality><!--Уточнение-->
		<Street></Street>
		<Rooms></Rooms>
		<Square></Square>
		<Floor></Floor>
		<Floors></Floors>
		<HouseType></HouseType>
		<MarketType></MarketType>
		<LeaseType></LeaseType>
		<Images>
			<Image url=""></Image>
		</Images>

		<!--Дома, дачи, коттеджи-->
		<OperationType></OperationType>
		<Locality></Locality><!--Уточнение-->
		<Street></Street>
		<Square></Square>
		<ObjectType></ObjectType>
		<LandArea></LandArea>
		<DistanceToCity></DistanceToCity>
		<DirectionRoad></DirectionRoad>
		<WallsType></WallsType>
		<Floor></Floor>
		<LeaseType></LeaseType>
		<Images>
			<Image url=""></Image>
		</Images>

		<!--Земельные участки-->
		<OperationType></OperationType>
		<Locality></Locality><!--Уточнение-->
		<Street></Street>
		<LandArea></LandArea>
		<ObjectType></ObjectType>
		<DistanceToCity></DistanceToCity>
		<DirectionRoad></DirectionRoad>
		<Images>
			<Image url=""></Image>
		</Images>

		<!--Коммерческая недвижимость-->
		<OperationType></OperationType>
		<Locality></Locality><!--Уточнение-->
		<BuildingClass></BuildingClass>
		<BusinessForSale></BusinessForSale>
		<Street></Street>
		<Square></Square>
		<Images>
			<Image url=""></Image>
		</Images>

	</Ad>
	<?endforeach?>
</Ads>