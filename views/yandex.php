<?header('Content-Type: text/xml;charset=cp1251')?>
<?error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<?='<?xml version="1.0" encoding="utf-8"?>'?>

<realty-feed xmlns="http://webmaster.yandex.ru/schemas/feed/realty/2010-06">
  <generation-date><?=date('c')?></generation-date>


  <?foreach($data as $item):?>
  <offer internal-id="<?=$item['oid']?>">


    <? /*Информация о местоположении*/ ?>

    <?Generator\CreatorXML::print_with_validate_array(array(

        'type'             => ($item['type'] == 'rent') ? 'аренда' : 'продажа',
        'property-type'    => $item['property-type'],
        'category'         => $item['category'],
        'url'              => "http://novosel-dm.ru/object.html?id={$item['oid']}",
        'with-pets'        => $item['with-pets'],
        'creation-date'    => '2010-11-13T12:32:45+04:00'/*$item['creation-date']*/,
        'last-update-date' => '2010-11-13T12:32:45+04:00',
        'expire-date'      => '2010-11-13T12:32:45+04:00',

    ));?>

    <location>
        <?Generator\CreatorXML::print_with_validate_array(array(

            'country'         => $item['country'],
            'region'          => $item['region'],
            'district'        => $item['district'],
            'locality-name'   => $item['locality-type'] .' '. $item['locality-name'],
            'railway-station' => $item['railway-station'],
            'address'         => $item['street-type'] .' '. $item['street'] .' '. $item['house-number'],
            'direction'       => $item['direction'],
            'distance'        => $item['distance'],

        ));?>
    </location>
    
    <image>http://novosel-dm.ru/images/objects/main/normal/<?=$item['oid']?>jpg</image>
    <?if(isset($item['photos']) && $item['photos'] != ""):?>
        <?foreach ($item['photos'] as $photo): ?>
            <image>http://novosel-dm.ru/images/objects/photos/normal/<?=$photo['id']?>.jpg</image>
        <?endforeach ?>
    <?endif;?>

    <sales-agent>
            <name><?=$item['sales-agent-name']?></name>
            <phone><?=$item['sales-agent-phone']?></phone>
            <category><?=$item['sales-agent-category']?></category>
            <?if(isset($item['email']) && $item['email'] != ""):?>
                <email><?=$item['email']?></email>
            <?endif?>
    </sales-agent>

    <price>
        <value><?=$item['price-value']?></value>
        <currency><?/*=$item['price-currency']*/?>Нет Поля</currency>
        <?if(isset($item['price-period'])  && $item['price-period'] != ""):?>
            <period><?=$item['price-period']?></period>
        <?endif?>
        <?if(isset($item['price-unit']) && $item['price-unit'] != ""):?>
            <unit><?=$item['price-unit']?></unit>
        <?endif?>
    </price>

    <?if(isset($item['area']) && $item['area'] != ""):?>
        <area>
            <value><?=$item['area']?></value>
            <unit>кв.м</unit>
        </area>
    <?endif?>
    <?if(isset($item['lot-area']) && $item['lot-area'] != ""):?>
        <lot-area>
            <value><?=$item['lot-area']?></value>
            <unit>cот.</unit>
        </lot-area>
    <?endif?>
    <?if(isset($item['living-space']) && $item['living-space'] != ""):?>
        <living-space>
            <value><?=$item['living-space']?></value>
            <unit>кв.м</unit>
        </living-space>
    <?endif?>
    <?if(isset($item['kitchen-space']) && $item['kitchen-space'] != ""):?>
    <kitchen-space>
        <value><?=$item['kitchen-space']?></value>
        <unit>кв.м</unit>
    </kitchen-space>
    <?endif?>

    <?Generator\CreatorXML::print_with_validate('lot-type', $item['lot-type'])?>

    <? /*Информация об условиях сделки*/ ?>

    <?Generator\CreatorXML::print_with_validate_array(array(

        'haggle'             => $item['haggle'],
        'mortgage'           => $item['mortgage'],
        'renovation'         => $item['renovation'],
        'with-children'      => $item['with-children'],
        'with-pets'          => $item['with-pets'],

    ));?>

    <? /*Характеристики жилого помещения*/ ?>

    <?Generator\CreatorXML::print_with_validate_array(array(

        'new-flat'           => $item['new-flat'],
        'rooms'              => $item['rooms'],
        'rooms-offered'      => $item['rooms-offered'],
        'rooms-type'         => $item['rooms-type'],
        'room-furniture'     => $item['room-furniture'],
        'open-plan'          => $item['open-plan'],
        'internet'           => $item['internet'],
        'phone'              => $item['phone'],
        'kitchen-furniture'  => $item['kitchen-furniture'],
        'television'         => $item['television'],
        'washing-machine'    => $item['washing-machine'],
        'refrigerator'       => $item['refrigerator'],
        'balcony'            => $item['balcony'],
        'bathroom-unit'      => $item['bathroom-unit'],
        'floor-covering'     => $item['floor-covering'],
        'window-view'        => $item['window-view'],
        'floor'              => $item['floor'],
        'description'        => $item['description'],


    ));?>

    <? /*Характеристики здания*/ ?>

    <?Generator\CreatorXML::print_with_validate_array(array(

        'lift'               => $item['lift'],
        'alarm'              => $item['alarm'],
        'parking'            => $item['parking'],
        'is-elite'           => $item['is-elite'],
        'ceiling-height'     => $item['ceiling-height'],
        'rubbish-chute'      => $item['rubbish-chute'],
        'ready-quarter'      => $item['ready-quarter'],
        'built-year'         => $item['built-year'],
        'building-series'    => $item['building-series'],
        'building-state'     => $item['building-state'],
        'building-type'      => $item['building-type'],
        'building-name'      => $item['building-name'],
        'floors-total'       => $item['floors-total'],

    ));?>

    <? /*Характеристики загородного дома*/ ?>

    <?Generator\CreatorXML::print_with_validate_array(array(

        'gas-supply'         => $item['gas-supply'],
        'sewerage-supply'    => $item['sewerage-supply'],
        'electricity-supply' => $item['electricity-supply'],
        'heating-supply'     => $item['heating-supply'],
        'sauna'              => $item['sauna'],
        'pool'               => $item['pool'],
        'billiard'           => $item['billiard'],
        'pmg'                => $item['pmg'],
        'shower'             => $item['shower'],
        'toilet'             => $item['toilet'],
        'kitchen'            => $item['kitchen'],
    ));?>


  </offer>
  <?endforeach;?>
</realty-feed>

<?
/*
* Для вывода в отдельный файл, ob_start, file_put_contents
*/
?>