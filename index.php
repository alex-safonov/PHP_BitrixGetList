?>
// Количество элементов инфоблока по фильтру без лишнего
CModule::IncludeModule("iblock"); 
	$iblock_id = 2; // Указываем ID инфоблока
	$arFilter = Array("IBLOCK_ID"=>$iblock_id, "PROPERTY_FUND"=>120); // Фильтруем по ID блока и необходимому свойству
	$array_count = CIBlockElement::GetList(Array(), $arFilter, Array(), false, Array()); // Получаем элементы инфоблока.  
  // (из-за того, что третий параметр arGroupBy пустой, возвращается только количество элементов, а не массив)
	echo $array_count; // И выводим их количество
?>
