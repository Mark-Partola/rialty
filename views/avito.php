<?header('Content-Type: text/xml;charset=cp1251')?>
<?error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<?='<?xml version="1.0" encoding="utf-8"?>'?>

<Ads target="Avito.ru" formatVersion="2">
	<?foreach($data as $item):?>
	<Ad>
		<id><?=$item['oid']?></id>
		<?
			$categories = array(
				'�������' => '�������',
				'��������' => '��������',
				'���' => '����',
				'�������' => '�������',
				'��������� �������' => '��������� �������',
				'�������' => '��������',
				'����' => '����',
				'����� ����' => '����',
				'��� � ��������' => '����'
			);
		?>
		<Category><?=$categories[mb_strtolower($item['category'])]?></Category>

		<DateBegin>TODO: �������� �� ISO! <?=$item['creation-date']?></DateBegin>
		<DateEnd>TODO: �������� �� ISO, ������� ����! <?=$item['creation-date']?></DateEnd>

		<Region><?=$item['region']?></Region>
		<City><?=$item['locality-name']?></City>
		<District>��� ��������</District>
		<Description><?=$item['description']?></Description>
		<Price><?=$item['price-value']?></Price>
		<?/*��� ��������??*/?>
		<CompanyName>��� ��������</CompanyName>
		<ManagerName><?=$item['sales-agent-name']?></ManagerName>
		<EMail><?=$item['email']?></EMail>
		<ContactPhone><?=$item['sales-agent-phone']?></ContactPhone>

		<!--�������-->
		<OperationType></OperationType>
		<Locality><?=$item['locality-type']?> <?=$item['locality-name']?></Locality><!--���������-->
		<Street></Street>
		<SaleRooms></SaleRooms><!--������� �������-->
		<Rooms></Rooms>
		<Square></Square>
		<Floor></Floor>
		<Floors></Floors>
		<HouseType></HouseType>
		<LeaseType></LeaseType>
		<Images>
			<Image url=""></Image>
		</Images>

		<!--��������-->
		<OperationType></OperationType>
		<Locality></Locality><!--���������-->
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

		<!--����, ����, ��������-->
		<OperationType></OperationType>
		<Locality></Locality><!--���������-->
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

		<!--��������� �������-->
		<OperationType></OperationType>
		<Locality></Locality><!--���������-->
		<Street></Street>
		<LandArea></LandArea>
		<ObjectType></ObjectType>
		<DistanceToCity></DistanceToCity>
		<DirectionRoad></DirectionRoad>
		<Images>
			<Image url=""></Image>
		</Images>

		<!--������������ ������������-->
		<OperationType></OperationType>
		<Locality></Locality><!--���������-->
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