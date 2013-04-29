<?php
$this->load->view('common/metadata');
$this->load->view('common/header');
?>

<section id="content">
		<div class="top">
			<div class="container">
				<div class="clearfix">
					<section id="gallery">
						<div class="pics">
							<img src="<?=$this->config->item('assets_path')?>images/slide1.jpg" alt="" width="495" height="329">
							<img src="<?=$this->config->item('assets_path')?>images/slide3.jpg" alt="" width="495" height="329">
							<img src="<?=$this->config->item('assets_path')?>images/slide2.jpg" alt="" width="495" height="329">
							<img src="<?=$this->config->item('assets_path')?>images/slide4.jpg" alt="" width="495" height="329">
							<img src="<?=$this->config->item('assets_path')?>images/slide5.jpg" alt="" width="495" height="329">
						</div>
						<a href="#" id="prev"></a>
						<a href="#" id="next"></a>
					</section>
					<section id="intro">
						<div class="inner">
							<h2>Engineering<br /> And Construction<span>applications</span></h2>
							<p>Fusce euismod consequat ante. Lorem ipsum dolor sit<br /> amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in ls ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit at euismod in, auctor ut, ligula. </p>
							<a href="#" class="extra-button">Read More</a>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="middle">
			<div class="container">
				<div class="wrapper">
					<div class="grid3 first">
						<ul class="categories">
							<li><a href="#">Aerospace</a></li>
							<li><a href="#">Automotive</a></li>
							<li><a href="#">Chemicals</a></li>
							<li><a href="#">Communications</a></li>
							<li><a href="#">Consumer Products</a></li>
							<li><a href="#">Education and Research</a></li>
							<li><a href="#">Engineering and Construction</a></li>
							<li><a href="#">High Technology</a></li>
							<li><a href="#">Industrial Manufacturing</a></li>
						</ul>
					</div>
					<div class="grid9">
						<h2>Grow service revenue with world-class<br /> lifecycle service and support.</h2>
						<p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede m aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortisissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. </p>
						<p><a href="#" class="more">Read More</a></p>
						<section class="images">
							<figure><a href="#"><img src="<?=$this->config->item('assets_path')?>images/1page-img1.jpg" alt=""></a></figure>
							<figure><a href="#"><img src="<?=$this->config->item('assets_path')?>images/1page-img2.jpg" alt=""></a></figure>
							<figure><a href="#"><img src="<?=$this->config->item('assets_path')?>images/1page-img3.jpg" alt=""></a></figure>
						</section>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="container">
				<div class="wrapper">
					<div class="grid3 first">
						<h3>Database</h3>
						<ul class="list1">
							<li><a href="#">Real Application Clusters</a></li>
							<li><a href="#">Database Security</a></li>
							<li><a href="#">Secure Enterprise Search</a></li>
						</ul>
					</div>
					<div class="grid3">
						<h3>Quick Links</h3>
						<ul class="list2">
							<li><a href="#">Certification</a></li>
							<li><a href="#">Education</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">For Midsize Companies</a></li>
							<li><a href="#">Investors</a></li>
							<li><a href="#">Technology Network</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
					</div>
					<div class="grid3">
						<h3>Top Downloads</h3>
						<ul class="list2">
							<li><a href="#">Enterprise Architecture</a></li>
							<li><a href="#">Enterprise 2.0</a></li>
							<li><a href="#">Grid</a></li>
							<li><a href="#">Service-Oriented Architecture</a></li>
							<li><a href="#">Virtualization</a></li>
							<li><a href="#">Database XE</a></li>
							<li><a href="#">Enterprise Management</a></li>
						</ul>
					</div>
					<div class="grid3">
						<div id="datepicker"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?
$this->load->view('common/footer');
?>