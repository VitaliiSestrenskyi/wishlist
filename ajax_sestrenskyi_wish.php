<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$idProduct = trim($_POST['idProduct']);
$idUser = trim($_POST['idUser']);

CModule::IncludeModule("highloadblock"); 
use Bitrix\Highloadblock as HL; 
use Bitrix\Main\Entity; 

$hlbl = 7;
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch(); 
// get entity 
$entity = HL\HighloadBlockTable::compileEntity($hlblock); 
$entity_data_class = $entity->getDataClass();  
if(isset($idProduct) && isset($idUser)){
	$data = array(
				 "UF_PRODUCT" => $idProduct,	
				 "UF_USER" => $idUser
				 );	
}
$result = $entity_data_class::add($data);


?>    
    
