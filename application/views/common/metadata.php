<?
/*
$page = $this->uri->segment(2);

if(isset($page) && $page==''){ $title = 'About'; }
else if(isset($page) && $page=='home1'){ $title =  'Products and services'; }
else if(isset($page) && $page=='home2'){ $title =  'Products'; }
else if(isset($page) && $page=='home3'){ $title =  'Industries'; }
else if(isset($page) && $page=='home4'){ $title =  'Privacy policy'; }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$this->config->item('site_title')?> - <?=$title?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?=$this->config->item('assets_path')?>css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=$this->config->item('assets_path')?>css/grid.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=$this->config->item('assets_path')?>css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=$this->config->item('assets_path')?>css/jquery-ui-1.8.5.custom.css" type="text/css" media="all">
	<script type="text/javascript" src="<?=$this->config->item('assets_path')?>js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="<?=$this->config->item('assets_path')?>js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="<?=$this->config->item('assets_path')?>js/jquery-ui-1.8.5.custom.min.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="<?=$this->config->item('assets_path')?>js/html5.js"></script><![endif]-->
</head>

<body>