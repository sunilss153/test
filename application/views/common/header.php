	<header>
		<nav>
			<div class="container">
				<div class="wrapper">
					<h1><a href="<?=base_url()?>"><strong>Industrial</strong>Services</a></h1>
					<ul>
						<li><a href="<?=base_url()?>" <? if(isset($page) && ($page=='' || $page=='homePage')){ echo 'class="current"'; } ?> >about</a></li>
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
					<li><?=$title;?></li>
					<?="<br/><span style='background-color:green; color:white; width:150px; height:10px;'>{$this->session->flashdata('form_submited')}</span><br/>"?>
				</ul>
				<form action="" id="search-form"><fieldset><input type="text" value=""><input type="submit" value="" ></fieldset></form>
			</div>
		</section><div class="ic">More</div>
	</header>
	