<?
$page = $this->uri->segment(2);
?>
	<header>
		<nav>
			<div class="container">
				<div class="wrapper">
					<h1><a href="<?=base_url()?>"><strong>Industrial</strong>Services</a></h1>
					<ul>
						<li><a href="<?=base_url()?>" <? if(isset($page) && $page==''){ echo 'class="current"'; } ?> >about</a></li>
						<li><a href="<?=base_url()?>index.php/home/home1" <? if(isset($page) && $page=='home1'){ echo 'class="current"'; } ?> >products and services</a></li>
						<li><a href="<?=base_url()?>index.php/home/home2" <? if(isset($page) && $page=='home2'){ echo 'class="current"'; } ?> >products</a></li>
						<li><a href="<?=base_url()?>index.php/home/home3" <? if(isset($page) && $page=='home3'){ echo 'class="current"'; } ?> >industries</a></li>
						<li><a href="<?=base_url()?>index.php/home/home4" <? if(isset($page) && $page=='home4'){ echo 'class="current"'; } ?> >Privacy policy</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section class="adv-content">
			<div class="container">
				<ul class="breadcrumbs">
					<li>
					<? 
						if(isset($page) && $page==''){ echo 'About'; }
						else if(isset($page) && $page=='home1'){ echo 'Products and services'; }
						else if(isset($page) && $page=='home2'){ echo 'Products'; }
						else if(isset($page) && $page=='home3'){ echo 'Industries'; }
						else if(isset($page) && $page=='home4'){ echo 'Privacy policy'; }
						
					?></li>
				</ul>
				<form action="" id="search-form">
					<fieldset>
						<input type="text" value=""><input type="submit" value="">
					</fieldset>
				</form>
			</div>
		</section><div class="ic">More Website Templates at TemplateMonster.com!</div>
	</header>
	