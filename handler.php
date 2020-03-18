<?php

require_once 'E:/OSPanel/domains/xlsxparser/PHPExcel/PHPExcel.php'; //пропишите свой путь
$base_path = 'E:/OSPanel/domains/xlsxparser/upload/'; //пропишите свой путь

if( isset( $_POST['file_upload'] ) ){  

  $uploaddir = './upload'; 

  if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

  $files      = $_FILES; 
  $done_files = array();


  foreach( $files as $file ){
    $file_name = $file['name'];

    if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
      $done_files[] = realpath( "$uploaddir/$file_name" );
    }
  }

  if($file_name != '') { 

$file = $base_path.$file_name; 

$info = new SplFileInfo($file);

if($info->getExtension() == 'xlsx') {

$excel = PHPExcel_IOFactory::load($file);

$error_mess = [];

if($excel->getSheetCount() != 2){ 
  $error_mess[] = array('text' =>'Файл не прошел проверку на количество листов в книге');
} 

foreach($excel->getSheetNames() as $SheetNames) {
  $Names[] = $SheetNames;
}

if(($Names[0] != 'first') || ($Names[1] != 'second')) {
  $error_mess[] = array('text' =>'Имена листов не соответсвуют требованиям');
}


foreach($excel ->getWorksheetIterator() as $worksheet) {
  $lists[] = $worksheet->toArray();
}

$list_1 = $lists[0];

$list_2 = $lists[1];
$result = [];

if((count($list_1) == 1) && (count($list_1[0]) == 1)) {
  $error_mess[] = array('text' =>'Первый лист пустой');  
}

if(count($list_1[0]) != 3) {
  $error_mess[] = array('text' =>'Не соответствие количества столбцов в певом листе');  
}

if($excel->getSheetCount() >= '2'){ 
  if((count($list_2) == 1) && (count($list_2[0]) == 1)) {
    $error_mess[] = array('text' =>'Второй лист пустой');  
  }

  if(count($list_2[0]) != 2) {
    $error_mess[] = array('text' =>'Не соответствие количества столбцов во втором листе');  
  }
}
if(count($error_mess) == 0){

  for($j=0;$j<count($list_1);$j++){
    $a = $list_1[$j][2];
    for($i=0;$i<count($list_2);$i++){
      if($list_2[$i][0] == $list_1[$j][0]){
        $a = $a + $list_2[$i][1];
      }    
    }

    $result[] = array('id' => $list_1[$j][0], 'name' =>$list_1[$j][1], 'val' => $a);
  }

  echo json_encode($result); 

} else {
  echo json_encode($error_mess); 
}

} else {
  $error_mess[] = array('text' =>'Формат файла не xlsx, текущий формат: '.$info->getExtension());
  echo json_encode($error_mess);
}

} else {
  $error_mess[] = array('text' =>'Файл не загружен');
  echo json_encode($error_mess);
}
} else {
  $error_mess[] = array('text' =>'Файл отсутствует');
  echo json_encode($error_mess);
}