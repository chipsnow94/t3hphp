<?php
/* Smarty version 3.1.30, created on 2017-10-23 20:00:00
  from "C:\xampp\htdocs\t3hphp\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ee2e20102309_55001404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd008cfb376ad9e57d85aca83b9c5dccde6c48350' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\header.tpl',
      1 => 1508780405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee2e20102309_55001404 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="index.php">Trang chủ !</a>
		</div>
		<div class="w3l_search" style="text-transform:uppercase">
        <a href="search.php">Tìm kiếm</a>
			<!--<form action="#" method="post">
				<input type="text" name="Product" value="Tìm kiếm sản phẩm" onfocus="this.value ='';" onblur="if (this.value == '') {
				this.value = 'Tìm kiếm sản phẩm';}" required="">
				<input type="submit" value=" " name="Tim_san_pham" onclick="window.location='search.php'"  onkeyup="XL_Tim_san_pham(this.value)">
           
			</form>-->
		</div>
        <div class="product_list_header">
        
        </div>

		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Login</a></li> 
								<li><a href="login.php">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="contact.php">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<?php echo '<script'; ?>
>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	<?php echo '</script'; ?>
>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>Siêu thị</span> Mini</a></h1>
			</div>
			<!--<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="events.html">Events</a><i>/</i></li>
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
				</ul>
			</div>-->
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>0903195698</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="contact.php">Mail us</a></li>
                    <li><a href="search.php">Tìm kiếm</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header --><?php }
}
