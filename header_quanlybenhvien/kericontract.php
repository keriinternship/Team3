<?php
ob_clean();
ob_start();
session_start();

$rowsession = $_SESSION['username'];

if ($rowsession == "") {
  header('Location:index.php?option=com_thoaian_login&Itemid=21');
}

if ($rowsession->usertype < 4) {

  echo 'Bạn không có quyền truy cập vào chức năng này';
  exit(0);
}

require_once(JPATH_BASE . '/acccommon/common.php');
//allowUser($_GET['Itemid'], $rowsession->id);
$orderno = $_POST['orderno'];
$contractid = $_POST['contractid'];
$cusid = $_POST['cusid'];
$machineid = $_POST['machineid'];
$machinenumber = $_POST['machinenumber'];
$unit = $_POST['unit'];
$quantaty = $_POST['quantaty'];
$specs = $_POST['specs'];
$spec1 = $_POST['spec1'];
$spec2 = $_POST['spec2'];
$spec3 = $_POST['spec3'];
$spec4 = $_POST['spec4'];
$spec5 = $_POST['spec5'];
$spec6 = $_POST['spec6'];
$spec7 = $_POST['spec7'];
$spec8 = $_POST['spec8'];
$spec9 = $_POST['spec9'];
$specsspecial = $_POST['specsspecial'];

$date_sign_contract=getRealDate($_POST['date_sign_contract'], 1);
$date_delivery_contract=getRealDate($_POST['date_delivery_contract'], 1);
$date_delivery_contract_actual=getRealDate($_POST['date_delivery_contract_actual'], 1);
// $date_sign_contract = isset($_POST['date_sign_contract'])?date("y-m-d", strtotime($_POST['date_sign_contract'])):"";
// $date_delivery_contract = isset($_POST['date_sign_contract'])?date("y-m-d", strtotime($_POST['date_delivery_contract'])):"";
//echo 'date_sign_contract: '.$_POST['date_sign_contract'];
$remainingdays = $_POST['remainingdays'];
$payhistory1 = $_POST['payhistory1'];
$payhistory2 = $_POST['payhistory2'];
$payhistory3 = $_POST['payhistory3'];
//$progress_electric = $_POST['progress_electric'];
//$progress_package = $_POST['progress_package'];
$progress = $_POST['progress'];
//$assignee = $_POST['assignee'];

$microtimeStr = microtime();

$page = 0;
if (!isset($_POST['page'])) {
  $page = 0;
} else {
  $page = $_POST['page'];
}

$recordOfPage = 1000;

if (!isset($_POST['recordOfPage'])) {

  $recordOfPage = 1000;
} else {
  $recordOfPage = $_POST['recordOfPage'];
}


if (!isset($_POST['recordOfPage'])) {
  if (isset($_GET['recordOfPage'])) {
    $recordOfPage = $_GET['recordOfPage'];
  }

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }
}

if (($_GET['action'] == "edit") && (!isset($_REQUEST['submitnew'])) && !isset($_POST['contractid'])) {

  $row = getObjectBaseOnID("tbl_keri_contract", "id", $_GET['id']);
  $orderno =  $row->orderno;
  $contractid =  $row->contractid;
  $cusid = $row->cusid;
  $machineid = $row->machineid;
  $machinenumber = $row->machinenumber;
  $unit = $row->unit;
  $quantaty = $row->quantaty;
  $specs = $row->specs;
  //echo 'specs: '.$specs;
  //$specs = $_POST['specs'];
  $spec1 = $row->spec1;
  $spec2 = $row->spec2;
  $spec3 = $row->spec3;
  $spec4 = $row->spec4;
  $spec5 = $row->spec5;
  $spec6 = $row->spec6;
  $spec7 = $row->spec7;
  $spec8 = $row->spec8;
  $spec9 = $row->spec9;
  $specsspecial = $row->specsspecial;
  $date_sign_contract = getRealDate($row->date_sign_contract, 0);
  $date_delivery_contract = getRealDate($row->date_delivery_contract, 0);
  $date_delivery_contract_actual = getRealDate($row->date_delivery_contract_actual, 0);
  // $machinepartdesigndate = getRealDate($row->date_sign_contract, 1);
  // $machinepartdesigndate = getRealDate($row->date_delivery_contract, 1);
  // $date_sign_contract = date("d-m-Y", strtotime($row->date_sign_contract));
  // $date_delivery_contract = date("d-m-Y", strtotime($row->date_delivery_contract));
  $remainingdays = $row->remainingdays;
  $payhistory1 = $row->payhistory1;
  $payhistory2 = $row->payhistory2;
  $payhistory3 = $row->payhistory3;
  //$progress_electric = $row->progress_electric;
  //$progress_package = $row->progress_package;
  $progress = $row->progress;
  $assignee = $row->assignee;
}




$array_column = array(
  orderno,
  contractid,
  cusid,
  machineid,
  machinenumber,
  unit,
  quantaty,
  specs,
  spec1,
  spec2,
  spec3,
  spec4,
  spec5,
  spec6,
  spec7,
  spec8,
  spec9,
  specsspecial,
  date_sign_contract,
  date_delivery_contract,
  date_delivery_contract_actual,
  remainingdays,
  payhistory1,
  payhistory2,
  payhistory3,
  //progress_electric,
  //progress_package,
  progress,
  assignee,
  microtime
);

$array_values = array(
  $orderno,
  $contractid,
  $cusid,
  $machineid,
  $machinenumber,
  $unit,
  $quantaty,
  $specs,
  $spec1,
  $spec2,
  $spec3,
  $spec4,
  $spec5,
  $spec6,
  $spec7,
  $spec8,
  $spec9,
  $specsspecial,
  $date_sign_contract,
  $date_delivery_contract,
  $date_delivery_contract_actual,
  $remainingdays,
  $payhistory1,
  $payhistory2,
  $payhistory3,
  //$progress_electric,
  //$progress_package,
  $progress,
  $rowsession->fullname,
  $microtimeStr
);

if (isset($_REQUEST['submitnew']) && $contractid != "" /*&& $machinenumber != ""*/) {

  doTranslateArray2SQL("tbl_keri_contract", $array_column, $array_values, -1, "insert");

  $array_columnMerge = array(
    orderno,
	cusid,/*,
    date_sign_contract,
    date_delivery_contract,
    payhistory1,
    payhistory2,
    payhistory3*/
  );
  $array_valuesMerge = array(
    $orderno,
	$cusid/*,
    $date_sign_contract,
    $date_delivery_contract,
    $payhistory1,
    $payhistory2,
    $payhistory3*/
  );
  // DDaa
  $sql = doTranslateArray2SQLWhere("tbl_keri_contract", $array_columnMerge, $array_valuesMerge, "contractid", $contractid, "update");
  //echo $sql;
  
  $newestRecord = getObjectBaseOnIDForAjaxKeriFULL("tbl_keri_contract", "microtime", $microtimeStr);
  $series = explode("-", $machineid);
  $startSeri = $series[0];
	  if (count($series) == 1) {
		  $endSeri = $startSeri;
	  } else {
		  $endSeri = $series[1];
	  }
  for($i = $startSeri; $i<=$endSeri; $i++) {
	$array_columnSeri = array(
		machinecontractid,
		machinenumber,
		serinumber,
		assignee
	);

	$machinecontractid = $newestRecord->id;
	//$machinenumber = $_GET["machinenumber"];
	//str_pad($i, 3, '0', STR_PAD_LEFT);
	//$serinumber = $machinenumber."-".str_pad($i, 3, '0', STR_PAD_LEFT)."-".date("y"); // 
	$serinumber = str_pad($i, 3, '0', STR_PAD_LEFT)."-".date("m")."-".date("y");
	//$assignee = $_GET["assignee"];
	
		
	$array_valuesSeri = array(
		$machinecontractid,
		$machinenumber,
		$serinumber,
		$rowsession->fullname
	);
	
	doTranslateArray2SQL("tbl_keri_seri", $array_columnSeri, $array_valuesSeri, -1, "insert");
  }


  $contractid = "";
  $cusid = "";
  $machineid = "";
  $machinenumber = "";
  $unit = "";
  $quantaty = "";
  $specs = "";
  $spec1 = "";
  $spec2 = "";
  $spec3 = "";
  $spec4 = "";
  $spec5 = "";
  $spec6 = "";
  $spec7 = "";
  $spec8 = "";
  $spec9 = "";
  $specsspecial = "";
  $date_sign_contract = "";
  $date_delivery_contract = "";
  $date_delivery_contract_actual = "";
  $remainingdays = "";
  $payhistory1 = "";
  $payhistory2 = "";
  $payhistory3 = "";
  //$progress_electric="";
  //$progress_package="";
  $progress = "";
  $assignee = "";
  
  doUpdateOrderNo();
  //header('Location:index.php?option=com_kericontract&task=cus&Itemid=65');
} else {

  if (isset($_GET['id']) && $_GET['action'] == "del") {

    doTranslateArray2SQL("tbl_keri_contract", $array_column, $array_values, $_GET['id'], "delete");
	doUpdateOrderNo();
	header('Location:index.php?option=com_kericontract&task=cus&Itemid=65');
  } else {

    if (isset($_REQUEST['submitedit']) && $contractid != "" /*&&  $machinenumber != ""*/) {
      //echo 'doedit';
	  $rowSeri = getObjectBaseOnID("tbl_keri_contract", "id", $_GET['id']);
	  
      doTranslateArray2SQL("tbl_keri_contract", $array_column, $array_values, $_GET['id'], "update");
      $array_columnMerge = array(
        orderno,
		cusid/*,
        date_sign_contract,
        date_delivery_contract,
        payhistory1,
        payhistory2,
        payhistory3*/
      );
      $array_valuesMerge = array(
        $orderno,
		$cusid/*,
        $date_sign_contract,
        $date_delivery_contract,
        $payhistory1,
        $payhistory2,
        $payhistory3*/
      );
      $sql = doTranslateArray2SQLWhere("tbl_keri_contract", $array_columnMerge, $array_valuesMerge, "contractid", $contractid, "update");
      //echo $sql;
	  $date_sign_contract=getRealDate($_POST['date_sign_contract'], 0);
	  $date_delivery_contract=getRealDate($_POST['date_delivery_contract'], 0);
	  $date_delivery_contract_actual=getRealDate($_POST['date_delivery_contract_actual'], 0);
	  
	  
	  
	  // Do update new series
	  // 1. Add new
	  // 2. Delete
	 $oldSeries = $rowSeri->machineid;
	 
	 $rowOldSeri = getObjectBaseOnParentID("tbl_keri_seri", "machinecontractid", $_GET['id']);
	 $oneOldSeri = $rowOldSeri->serinumber;
	 $oldMonthYear = substr($oneOldSeri,-5);
	 
	 $oldMonthYearArray = explode("-", $oldMonthYear);
	 $oldMonth = $oldMonthYearArray[0];
	 $oldYear = $oldMonthYearArray[1];
	 //echo 'Old: '.$oldMonthYear.'='.$oldMonth. '-'.$oldYear;
	 
	 $machineid = $_POST['machineid'];
	if ($oldSeries == $machineid) {
	} else {
	  $seriesOldArray = explode("-", $oldSeries);

	  $startSeriOld = $seriesOldArray[0];
	  if (count($seriesOldArray) == 1) {
		  $endSeriOld = $startSeriOld;
	  } else {
		  $endSeriOld = $seriesOldArray[1];
	  }
	  
	  $fullOld = array();
	  for($j = $startSeriOld; $j<=$endSeriOld; $j++) {
		  //$serinumber = $machinenumber."-".str_pad($j, 3, '0', STR_PAD_LEFT)."-".date("y");
		  //$serinumber = str_pad($j, 3, '0', STR_PAD_LEFT)."-".date("m")."-".date("y");
		  $serinumber = str_pad($j, 3, '0', STR_PAD_LEFT)."-".$oldMonthYear;
		  array_push($fullOld,$serinumber);
	  }
	  	  	 //print_r($fullOld);
			//echo '<br/>';
	  
	  $series = explode("-", $machineid);
	  $startSeri = $series[0];
	  if (count($series) == 1) {
		  $endSeri = $startSeri;
	  } else {
		  $endSeri = $series[1];
	  }
	  
	  $fullNew = array();
	  for($p = $startSeri; $p<=$endSeri; $p++) {
		  //$serinumber = $machinenumber."-".str_pad($p, 3, '0', STR_PAD_LEFT)."-".date("y");
		  //$serinumber = str_pad($p, 3, '0', STR_PAD_LEFT)."-".date("m")."-".date("y");
		  $serinumber = str_pad($p, 3, '0', STR_PAD_LEFT)."-".$oldMonthYear;
		  array_push($fullNew,$serinumber);
	  }
	  //print_r($fullNew);
	  //echo '<br/>';
	  
$result = array_merge(array_diff($fullOld, $fullNew), array_diff($fullNew, $fullOld));


	 // $result=array_diff($fullOld,$fullNew);
	  //print_r($result);
	  //echo '<br/>';
	  
	$array_columnSeri = array(
		machinecontractid,
		machinenumber,
		serinumber,
		assignee
	);
	 for ($k = 0; $k < count($result); $k++) {
		 if(in_array($result[$k], $fullOld) && in_array($result[$k], $fullNew) ){
			 echo 'Not change/'.$result[$k].'/Not change';
		 } else if(in_array($result[$k], $fullOld) && !in_array($result[$k], $fullNew) ){
			 // Delete
			  //echo 'Delete/'.$result[$k].'/Delete';
			  delObjectBaseWhere('tbl_keri_seri', 'machinecontractid	= \''.$_GET['id'].'\' and serinumber = \''.$result[$k].'\'');
			  //echo $sqlDelete;
		 } else if(!in_array($result[$k], $fullOld) && in_array($result[$k], $fullNew) ){
			 // Add
			 //echo 'Add/'.$result[$k].'/Add';
			$array_valuesSeri = array(
				$_GET['id'],
				$machinenumber,
				$result[$k],
				$rowsession->fullname
			);
			doTranslateArray2SQL("tbl_keri_seri", $array_columnSeri, $array_valuesSeri, -1, "insert");
		 }
	}

	} 
	doUpdateOrderNo();
	//header('Location:index.php?option=com_kericontract&task=cus&Itemid=65&scrollreturn=1');
    }
  }
}


	$permissionCheck=allowUserAnpha('KERI.vn');
?>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
      $(function() {
        $("#date_sign_contract").datepicker({
          dateFormat: 'd-m-Y'
        });
        $("#date_delivery_contract").datepicker({
          dateFormat: 'd-m-Y'
        });       
		$("#date_delivery_contract_actual").datepicker({
          dateFormat: 'd-m-Y'
        });
        $("#machinepartdesigndate").datepicker({
          dateFormat: 'd-m-Y'
        });
        $("#coreplandate").datepicker({
          dateFormat: 'd-m-Y'
        });
        $("#corerealdate").datepicker({
          dateFormat: 'd-m-Y'
        });
      });

	
	var xmlhttp;

    function GetXmlHttpObject() {
      if (window.XMLHttpRequest) {
        //code for IE7+, Firefox, Chrome, Opera, Safari
        return new XMLHttpRequest();
      }
      if (window.ActiveXObject) {
        // code for IE6, IE5
        return new ActiveXObject("Microsoft.XMLHTTP");
      }
      return null;
    }
	
	
	var permission = "";
    function doReloadUserOfDepartment() {
      id = document.getElementById("unit").value;
	  //alert(id);
      xmlhttp = GetXmlHttpObject();
      if (xmlhttp == null) {
        alert("Your browser does not support XML HTTP Request");
        return;
      }

      var url = "http://" + '<?= $hostname ?>' + "/caxm/AjaxInvoice/load/doReloadUserOfDepartment.php";
      url = url + "?id=" + id;
      //alert(url);
      url = url + "&permission=" + permission + "&sid=" + Math.random();
      xmlhttp.onreadystatechange = stateDoReloadUserOfDepartment;
      xmlhttp.open("GET", url, true);
      xmlhttp.send(null);
      //deleteRow("trid"+id);
      //reLineNumbering();;
    }


    function stateDoReloadUserOfDepartment() {
      if (xmlhttp.readyState == 4) {
        //alert(xmlhttp.responseText);
        var resulttext = xmlhttp.responseText;
		//alert(resulttext);
        document.getElementById("userofdepartment").innerHTML = resulttext;
      }
    }

function doReloadUserOfDepartmentForUpdate() {
	//doReloadUserOfDepartment();
}
    </script>
    <style>
    </style>
  </head>
<body onload="doReloadUserOfDepartmentForUpdate();">
  <?php
if($permissionCheck != "" && $_GET['inputtype'] != "h") {
?>

    <?php
    $link     = 'index.php?option=com_kericontract';
    ?>
  <?php
  if (isset($_REQUEST['submitedit']) || isset($_REQUEST['submitnew'])) {
	  ?>
  <form autocomplete="off" class="card" enctype="multipart/form-data" name="frmart" id="frmart" method="post" aciton="<?php echo $link; ?>"  onsubmit="return validate();">
  <?php } else {?>
  <form autocomplete="off" class="card" enctype="multipart/form-data" name="frmart" id="frmart" method="post" aciton="<?php echo $link; ?>">
  <?php }?>
 
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Input Variants</h4>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>MSHS/MSCV</label>
                                    <input class="form-control" type="text" name="contractid" id="contractid" value="<?= $contractid ?>" placeholder="MSHS/MSCV">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>ĐỘ BẢO MẬT</label>
                                    <input type="text" class="form-control" name="spec4" id="spec4" list = "levelsecuritylist" placeholder="Độ Bảo Mật" value="<?= $spec4 ?>">
                                    <datalist id="levelsecuritylist">
                                        <option value="Bình thường">Bình thường</option>
                                        <option value="Mật">Mật</option>
                                        <option value="Tuyệt Mật">Tuyệt Mật</option>
                                        <option value="Tối Mật">Tối Mật</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>ĐỘI PHỤ TRÁCH</label>
                                    <?= generateSelectCAXM("tbl_sos_thoaian_department", "id", "fullname", "unit") ?>
                                    <script language="javascript">
                                        for (var i = 0; i < document.frmart.unit.length; i++) {
                                        	if (document.frmart.unit[i].value == '<?= $unit; ?>') {
                                        		document.frmart.unit[i].selected = true;
                                        		//alert('<?= $selectedPrjtype; ?>');
                                        		break;
                                        	}
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NGƯỜI PHỤ TRÁCH</label>
                                    <span id="userofdepartment">
                                    <?=generateSelectCAXMNoSubmit($unit,"specs") ?>
                                    <script language="javascript">
                                        for (var i = 0; i < document.frmart.specs.length; i++) {
                                        if (document.frmart.specs[i].value == '<?= $specs; ?>') {
                                        document.frmart.specs[i].selected = true;
                                        //alert('<?= $selectedPrjtype; ?>');
                                        break;
                                        }
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NGÀY YC XỬ LÝ</label>
                                    <input type="text" class="form-control datepicker" name="date_sign_contract" id="date_sign_contract" value="<?= $date_sign_contract ?>" placeholder="NGÀY YC XỬ LÝ">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NGÀY YC HOÀN THÀNH</label>
                                    <input type="text" class="form-control datepicker" name="date_delivery_contract" id="date_delivery_contract" value="<?= $date_delivery_contract ?>" placeholder="NGÀY YC HOÀN THÀNH">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>NGÀY HOÀN THÀNH THỰC TẾ</label>
                                            <input type="text" class="form-control datepicker" name="date_delivery_contract_actual" id="date_delivery_contract_actual" value="<?= $date_delivery_contract_actual ?>" placeholder="NGÀY HOÀN THÀNH THỰC TẾ">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>NỘI DUNG TRÍCH YẾU</label>
                                            <textarea  name="spec9" class="form-control" id="spec9" placeholder="Trích yếu nd hồ sơ"><?= $spec9 ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Ghi chú thêm</label>
                                            <textarea class="form-control" name="specsspecial" id="specsspecial" placeholder="Ghi chú"><?= $specsspecial ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>NGƯỜI NHẬP</label>
                                            <input class="form-control" type="text" name="assignee" id="assignee" value="<?= $rowsession->fullname ?>" placeholder="NGƯỜI ĐƯA VÀO HỆ THỐNG">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <input type="hidden" name="option" value="com_kericontract" />
                <input type="submit" class="btn btn-fill btn-primary" value="THÊM MỚI" name="submitnew">
                <input type="submit" class="btn btn-fill btn-primary" value="LƯU" name="submitedit">
            </div>
        </div>
    </div>
</div>
</div>
     
   </form>
<?php
} else {
?>

  <?php 
 	$link = 'index.php?option=com_kericontract&task=cus&Itemid=65';
	if ($_GET['inputtype'] != "h") {
	?>
  <a href="<?=$link.'&inputtype=h'?>" class="clickform"><i class="fa fa-lock"></i> ẨN NHẬP DỮ LIỆU  </a>
<!--  <style> .card12{
    height: 500px;
  }</style>-->
	<?php
	} else {
	?>
  <a href="<?=$link ?>" class="clickform"><i class="fa fa-lock"></i>NHẬP DỮ LIỆU  </a>
<!--  <style> .card12{
    height: 720px;
  }</style>-->
	<?php
	}
	?>

	<form autocomplete="off" class="card" enctype="multipart/form-data" name="frmartSearch" id="frmartSearch" method="post" aciton="<?php echo $link; ?>">
	<input type="hidden" name="howtosearch" id="howtosearch" value=""/>
	<div class="row">
		<label class="col-sm-2 col-form-label">Search</label>

		<div class="col-sm-10">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<?=generateSelectAnpha('searchConditionContract', 'contractid', 1, $_POST['searchConditionContract']);?>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<?=generateSelectCaxmDepartment('searchConditionCus', 'cusid', 0, $_POST['searchConditionCus']);?>
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<?=generateSelectAnphaYearMonth('searchConditionMonth', 'month', 2);?>
					</div>
				</div>				
				<div class="col-md-2">
					<div class="form-group">
						<?=generateSelectAnphaYearMonth('searchConditionYear', 'year', 2);?>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<!--<h4 class="card-title"> Shopping Cart Table</h4>-->
			</div>
			<div class="card-body">
	            <div class="table-responsive">
<?php
	
		$permissionCheck=allowUserAnpha('KERI.vn');
		if ($_POST['howtosearch'] == 1){
			//echo $_POST['howtosearch'];
			listKeriContract($_POST['howtosearch'], $_POST['searchConditionContract'], $page, $recordOfPage, $permissionCheck);
		} else if ($_POST['howtosearch'] == 0){
			listKeriContract($_POST['howtosearch'], $_POST['searchConditionCus'], $page, $recordOfPage, $permissionCheck);
		} else if ($_POST['howtosearch'] == 2) {
			//listKeriContract($_POST['howtosearch'], $_POST['searchConditionYear'], $page, $recordOfPage, $permissionCheck);
			if ($_POST['searchConditionMonth'] == "") $searchMonthYear = $_POST['searchConditionYear'];
			else $searchMonthYear = $_POST['searchConditionMonth']."-".$_POST['searchConditionYear'];
			listKeriContract($_POST['howtosearch'], $searchMonthYear , $page, $recordOfPage, $permissionCheck);
		}else  {
			
		}
?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
		if ($_POST['howtosearch'] == 1){
?>
		<script language="javascript">
		document.getElementById("searchConditionCus").value = '';
		  /**for (var i = 0; i < document.frmartSearch.searchConditionContract.length; i++) {
			if (document.frmartSearch.searchConditionContract[i].value == '<?= $_POST['searchConditionContract']; ?>') {
			  document.frmartSearch.searchConditionContract[i].selected = true;
			  break;
			}
		  }**/
		</script>
<?php
		} else if ($_POST['howtosearch'] == 0){
?>
		<script language="javascript">
		//alert('<?= $_POST['searchConditionCus']; ?>');
		document.getElementById("searchConditionContract").value = '';
		 /* for (var i = 0; i < document.frmartSearch.searchConditionCus.length; i++) {
			if (document.frmartSearch.searchConditionCus[i].value == '<?= $_POST['searchConditionCus']; ?>') {
			  document.frmartSearch.searchConditionCus[i].selected = true;
			  break;
			}
		  }*/
		</script>
<?php
		} else if ($_POST['howtosearch'] == 2) {
?>
        <script language="javascript">
		  for (var i = 0; i < document.frmartSearch.searchConditionYear.length; i++) {
			if (document.frmartSearch.searchConditionYear[i].value == '<?= $_POST['searchConditionYear']; ?>') {
			  document.frmartSearch.searchConditionYear[i].selected = true;
			  break;
			}
		  }
		  
		  for (var i = 0; i < document.frmartSearch.searchConditionMonth.length; i++) {
			if (document.frmartSearch.searchConditionMonth[i].value == '<?= $_POST['searchConditionMonth']; ?>') {
			  document.frmartSearch.searchConditionMonth[i].selected = true;
			  break;
			}
		  }
		  document.getElementById("searchConditionContract").value = '';
		  document.getElementById("searchConditionCus").value = '';
		  </script>
<?php
		} else  {}
		
		//include('https://github.com/kerivietnam/kerivietnam.github.io/blob/master/kerilib/helloworld.php');
		//sayHello('hello online lib');

?>

		  
<script language="javascript">	  
	function doConfirmDel(rowid) {
        var determind = confirm("Bạn có muốn xóa không!");
        if (determind == true) {
          window.location.href = "index.php?option=com_kericontract&action=del&id=" + rowid;
        }

      }
	function validate() {
		var arrayField = ["contractid" ,"cusid" ,"machinenumber" ,"unit" ,"quantaty" ,"date_sign_contract" ,"date_sign_contract"];
		for (var i=0;i<arrayField.length;i++) {
			if((document.getElementById(arrayField[i]).value).trim() == "") {
				alert(document.getElementById(arrayField[i]).placeholder + " không hợp lệ!");
				document.getElementById(arrayField[i]).focus();
				return false;
			}
		}
	return true;
	}
	
	
	function getCheckedCheckboxesFor(checkboxName) {
    var checkboxes = document.querySelectorAll('input[name="' + checkboxName + '"]:checked'), values = [];
    Array.prototype.forEach.call(checkboxes, function(el) {
        values.push(el.value);
    });
    return values.join();
}
function doPDF2() {
	
	//alert(1);
	var exportData = getCheckedCheckboxesFor("machinenumberexport");
	if (exportData == "") {alert('Xin chọn model'); return;}
	window.open('/cokhianpha/tcpdf/examples/productionCommandPDF.php?ids='+exportData);

	
	
}


function doPDF3() {
	
	//alert(1);
	var exportData = getCheckedCheckboxesFor("machinenumberexport");
	if (exportData == "") {alert('Xin chọn model'); return;}
	window.open('/cokhianpha/tcpdf/examples/productionCommandPDF3.php?ids='+exportData);

	
	
}



function submitSearch(howtosearch) {
	document.getElementById("howtosearch").value = howtosearch;
	if (howtosearch == 0) {
		if (oldText != document.getElementById("searchConditionCus").value) {
			document.getElementById("frmartSearch").submit();
		}
	} else if (howtosearch == 1 ) {
		if (oldText != document.getElementById("searchConditionContract").value) {
			document.getElementById("frmartSearch").submit();
		}
	} else {
		document.getElementById("frmartSearch").submit();
	}
	

}


        </script>

  <?php //require_once("dialogMachinePart.php");
  //echo 'microtime(): '. microtime();
  ?>
  <?php //require_once("dialogZairio.php");
  ?>
  <?php //require_once("dialogConnect.php");
  ?>
  <?php
  if ($_GET['scrollreturn'] == 1) {
	  
  ?>
<script>
	scrollreturn(); 

</script>
  <?php
  }  
}
  ?>
</BODY>

</HTML>