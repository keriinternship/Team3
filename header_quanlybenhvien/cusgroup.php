<?php
	ob_clean();
	ob_start();
	session_start();
	
	$rowsession = $_SESSION['username'];
	
	if($rowsession ==""){
		header('Location:index.php?option=com_thoaian_login&Itemid=21');
	}
		
	if($rowsession->usertype<4){
		
		echo 'Bạn không có quyền truy cập vào chức năng này';
		exit(0);
	
	}
	
	require_once(JPATH_BASE.'/acccommon/common.php');
	//allowUser($_GET['Itemid'], $rowsession->id);
	$fullname = $_POST['fullname'];
	$description = $_POST['description'];
	$printprice = $_POST['printprice'];
	$seperatepaper = $_POST['seperatepaper'];
	$taxmenthod  = $_POST['taxmenthod'];
	
	$address = $_POST['address'];
	$telefone = $_POST['telefone'];
	$fax = $_POST['fax'];

	$page = 0;
	if(!isset($_POST['page'])){
		$page = 0;
	}else{
		$page = $_POST['page'];
	}
	
	$recordOfPage = 1000;
	
	if(!isset($_POST['recordOfPage'])){
	
		$recordOfPage = 1000;
		
	}else{
		$recordOfPage = $_POST['recordOfPage'];
	}
	
	
	if(!isset($_POST['recordOfPage'])){
	if(isset($_GET['recordOfPage'])){
	$recordOfPage =$_GET['recordOfPage'];
	}
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	}
	
	if(($_GET['action']=="edit")&&(!isset($_REQUEST['submitnew']))&&!isset($_POST['fullname'])){
	
		$row = getObjectBaseOnID("tbl_sos_thoaian_cusgroup","id",$_GET['id']);
		
		$fullname = $row->fullname;
		$description = $row->description;
		$printprice = $row->printprice;
		$seperatepaper = $row->seperatepaper;
		$taxmenthod = $row->taxmenthod;
		
		$address =  $row->address;
		$telefone = $row->telefone;
		$fax =  $row->fax;
	}
	
	

	
	$array_column = array(
	
	fullname,
	description,
	printprice,
	seperatepaper,
	taxmenthod,
	address,
	telefone,
	fax
	
	);
	
	
	$array_values = array(
	
	$fullname,
	$description,
	$printprice,
	$seperatepaper,
	$taxmenthod,
	$address,
	$telefone,
	$fax
	
	
	);
	
		if(isset($_REQUEST['submitnew'])){
	
			doTranslateArray2SQL("tbl_sos_thoaian_cusgroup", $array_column, $array_values, -1, "insert");
		
		}else{
		
		if(isset($_GET['id'])&&$_GET['action']=="del"){
		
			doTranslateArray2SQL("tbl_sos_thoaian_cusgroup", $array_column, $array_values, $_GET['id'], "delete");
		
		}else{
		
		if(isset($_REQUEST['submitedit'])){
	
		//echo 'doedit';
			doTranslateArray2SQL("tbl_sos_thoaian_cusgroup", $array_column, $array_values, $_GET['id'], "update");
			doUpdatePrintprice($fullname, $printprice,$seperatepaper,$taxmenthod);
		
		}
		
			
		}
		
		}
	
	

?>

<html>
<body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QUẢN LÝ NHÓM KHÁCH HÀNG</title>
	  <meta name="robots" content="index, follow" />
<script src="http://<?=$hostname?>/thoaian_accounting/jquery/jquery-1.4.4.js" type="text/javascript"></script>
<script src="http://<?=$hostname?>/thoaian_accounting/jquery/jquery.ui.core.js" type="text/javascript"></script>
<script src="http://<?=$hostname?>/thoaian_accounting/jquery/jquery.ui.datepicker.js" type="text/javascript"></script>
	<script src="http://<?=$hostname?>/thoaian_accounting/jquery/jquery.ui.widget.js"></script>

<link rel="stylesheet" href="http://<?=$hostname?>/thoaian_accounting/jquery/themes/base/jquery.ui.all.css">
<link rel="stylesheet" href="http://<?=$hostname?>/thoaian_accounting/jquery/demos.css">

<script>
	$(function() {
		$( "#datepickerjoindate" ).datepicker();
	});
	</script>

</head>

<center>


<div id = "logo">

</div>
<div  style="width:100%;text-align:center;">

<?php
	$link 		= 'index.php?option=com_cusgroup';
?>

<form enctype="multipart/form-data" name="frmart" id="frmart" method="post" aciton="<?php echo $link; ?>">

<center>
<table>

<tr><td>Tên nhóm khách hàng </td><td><input type="text" name="fullname" id="fullname" value="<?=$fullname?>"></td></tr>
<tr><td>Địa chỉ nhóm </td><td><input type="text" name="address" id="address" value="<?=$address?>"></td></tr>
<tr><td>ĐT </td><td><input type="text" name="telefone" id="telefone" value="<?=$telefone?>"></td></tr>
<tr><td>FAX </td><td><input type="text" name="fax" id="fax" value="<?=$fax?>"></td></tr>


<tr><td>Kiểu in</td>
<td>
<select name="printprice" id = "printprice">
<option value="1">In đầy đủ</option>
<option value="0">In giá và SL</option>
<option value="-1">chỉ in SL</option>
<option value="-2">In SL và Thành tiền</option>
<option value="-3">In giá đã có thuế</option>

</select>
<script language="javascript">
for(var i=0;i<document.frmart.printprice.length;i++){
if(document.frmart.printprice[i].value=='<?=$printprice;?>')
		{
		document.frmart.printprice[i].selected=true;
		break;
		}
}
</script>
</td></tr>


<tr><td>Tách phiếu xuất theo thuế</td>
<td>
<select name="seperatepaper" id = "seperatepaper">
<option value="1">Có tách</option>
<option value="0">Không tách</option>


</select>
<script language="javascript">
for(var i=0;i<document.frmart.seperatepaper.length;i++){
if(document.frmart.seperatepaper[i].value=='<?=$seperatepaper;?>')
		{
		document.frmart.seperatepaper[i].selected=true;
		break;
		}
}
</script>
</td></tr>



<tr><td>TÍNH THUẾ</td>
<td>
<select name="taxmenthod" id = "taxmenthod">
<option value="1">CÓ THUẾ</option>
<option value="0">KHÔNG THUẾ</option>


</select>
<script language="javascript">
for(var i=0;i<document.frmart.taxmenthod.length;i++){
if(document.frmart.taxmenthod[i].value=='<?=$taxmenthod;?>')
		{
		document.frmart.taxmenthod[i].selected=true;
		break;
		}
}
</script>
</td></tr>

<tr><td>Ghi chú </td><td><textarea rows="2" cols="20" name="description" id="description"><?=$description?></textarea></td></tr>
<tr>
<td>
<?php
generatePage("tbl_sos_thoaian_cusgroup", "", $recordOfPage);
?>

</td>
<td>
Số dòng trên mỗi trang: <input type="text" name="recordOfPage" id="recordOfPage" value="<?=$recordOfPage?>">
</td>

</tr>

<tr><td colspan="2">
<input type="hidden" name="option" value="com_cusgroup" />
<input type = "submit" value="THÊM MỚI" name="submitnew">
<input type = "submit" value="SỬA" name="submitedit">
<input type = "reset" value="Nhập lại" name="reset">
</td></tr>

<tr>
<td colspan="2">
<?php

listCusGroup($page,$recordOfPage);

?>
<script language="javascript">
for(var i=0;i<document.frmart.page.length;i++){
if(document.frmart.page[i].value=='<?=$page;?>')
		{
		document.frmart.page[i].selected=true;
		break;
		}
}
</script>
</td></tr>
</table>
</center>
</fieldset>


</form>

</div>


</BODY>
</HTML>