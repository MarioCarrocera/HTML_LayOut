<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');


echo "********** <br> Creating basic content data for crete css styles <br> ********** <br> <br>";

$demo->DddChgFld('position', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'lookin','content'=>'UPoss', 'in'=>'page')));
$demo->RcdChgIn('Css','position', array('FldEmp'=>TRUE));

echo "********** <br> Activate Table feature in page  <br> ********** <br> <br>";
$table = 'MainCss';
$inside = 'page';
$demo->CrtFtrTbl($inside);
$demo->CrtTblIn($table, 'Main CSS sample file', 'Css' , $inside);
$demo->AnnInAdd($table,'t',$inside);



$demo->UpsTblIn($table , 'Body', array('Name'=>'Body Css', 'font-family'=> 'Body','font-size'=>array('SzNumber'=>12,'SzUnit'=>'px'), ),$inside);



$demo->UpsTblIn($table , 'OutSideup', array('Name'=>'Before Main Screen', 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>100,'SzUnit'=>'vh'),'display'=>'none', 'background-color'=>'red' , 'font-family'=> 'Windows'),$inside);


$demo->UpsTblIn($table , 'OutSideup', array('Name'=>'Before Main Screen', 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>100,'SzUnit'=>'vh'),'background-color'=>'red' , 'font-family'=> 'Windows'),$inside);


$demo->UpsTblIn($table , 'Main', array('Name'=>'Main Screen', 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>100,'SzUnit'=>'vh'),'display'=>'block', 'background-color'=>'yellow' , 'font-family'=> 'Windows'),$inside);

$demo->UpsTblIn($table , 'OutSideDown', array('Name'=>'After Main Screen', 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>100,'SzUnit'=>'vh'),'display'=>'none', 'background-color'=>'marron' , 'font-family'=> 'Windows'),$inside);


$demo->UpsTblIn($table , 'Header', array('Name'=>'After Main Screen', 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>6,'SzUnit'=>'vh'),'display'=>'block','top'=>array('SzNumber'=>1,'SzUnit'=>'px'), 'position'=>'fixed' , 'background-color'=>'green' , 'font-family'=> 'Windows' ), $inside);


$demo->UpsTblIn($table , 'Footer', array('Name'=>'After Main Screen', 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>6,'SzUnit'=>'vh'),'display'=>'block','bottom'=>array('SzNumber'=>1,'SzUnit'=>'px'), 'position'=>'fixed' , 'background-color'=>'brown' , 'font-family'=> 'Windows') , $inside);



$demo->DddAddFld('CssClass', array('FldTpe'=>'S','FldDsc'=>'Css Class to asing','FldVld'=>array('Name'=>'lookfrom','content'=>'MainCss', 'in'=>'page')));

$demo->DddAddFld('Order', array('FldTpe'=>'K','FldDsc'=>'Order to Deploy'));

$demo->DddAddFld('Container', array('FldTpe'=>'S','FldDsc'=>'Inner Container Define','FldVld'=>array('Name'=>'isfrom','in'=>'page')));

$demo->DddAddFld('Content', array('FldTpe'=>'S','FldDsc'=>'Inner Content Define','FldVld'=>array('Name'=>'lookfrom','in'=>'page')));


$demo->CrtRcd('Layout','Html Layout');

$demo->RcdAddIn('Layout','Order', array('FldEmp'=>FALSE)); 

$demo->RcdAddIn('Layout','Name', array('FldEmp'=>FALSE));

$demo->RcdAddIn('Layout','CssClass', array('FldEmp'=>FALSE));

$demo->RcdAddIn('Layout','Container', array('FldEmp'=>TRUE)); 

$demo->RcdAddIn('Layout','Content', array('FldEmp'=>TRUE)); 

$table = 'Layout';
$inside = 'page';

$demo->CrtTblIn($table, 'Page Layout', 'Layout' , $inside);
$demo->AnnInAdd($table,'t',$inside);

$demo->UpsTblIn($table , '1000', array('Name'=>'Previus', 'CssClass'=> 'OutSideup'),$inside);
$demo->UpsTblIn($table , '1100', array('Name'=>'Main', 'CssClass'=> 'Main'),$inside);
$demo->UpsTblIn($table , '1200', array('Name'=>'FixHeader', 'CssClass'=> 'Header'),$inside);
$demo->UpsTblIn($table , '1300', array('Name'=>'FixFooter', 'CssClass'=> 'Footer'),$inside);
$demo->UpsTblIn($table , '1400', array('Name'=>'OutSide', 'CssClass'=> 'OutSideDown'),$inside);



$demo->ot_show($demo->errvalid);




echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>