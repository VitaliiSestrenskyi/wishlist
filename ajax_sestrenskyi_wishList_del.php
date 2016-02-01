<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$idProduct = trim($_POST['idProduct']);
$idUser = trim($_POST['idUser']);

//pr($idProduct . ' -  ' . $idUser ,  1);

CModule::IncludeModule("highloadblock"); 
use Bitrix\Highloadblock as HL; 
use Bitrix\Main\Entity; 

global $USER;
$hlbl = 7;
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch(); 
$entity = HL\HighloadBlockTable::compileEntity($hlblock); 
$entity_data_class = $entity->getDataClass();  


$rsData = $entity_data_class::getList(array(
   "select" => array("*"),
   "order" => array("ID" => "ASC"),
   "filter" => array('UF_USER' => $idUser,
                     'UF_PRODUCT' => $idProduct)
));
while ($arData = $rsData->Fetch()) {
	$entity_data_class::Delete($arData['ID']);  //удаления  товара нужного мне пользователя
}



?>
