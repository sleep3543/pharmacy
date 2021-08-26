<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json;charset=utf-8');//return json string

include_once("Connections/conn_db.php");
$Zip = "SELECT town.Name,town.Post,city.Name AS Cityname FROM town,city WHERE town.AutoNo=city.AutoNo AND town.townNo='" .$_GET["AutoNo"] . "'";
$Zip_rs = mysqli_query($link, $Zip);
$Zip_num = mysqli_num_rows($Zip_rs);
$htmlstring="<option value=''>選擇鄉鎮</option>";
if ($Zip_num > 0){ //區域(鄉鎮)編碼帶入後如果有資料存在顯示底下郵政區號內容後回饋
    $Town_rows = mysqli_fetch_array($Zip_rs);
    $retcode = array("c" =>"1" ,"Post" =>$Town_rows['Post'],"Name"=>$Town_rows['Name'],"Cityname"=>$Town_rows['Cityname']);
}else{
    $retcode = array("c" => "0", "m" => '找不到相關資料');
}
echo json_encode($retcode, JSON_UNESCAPED_UNICODE);
return;
?>