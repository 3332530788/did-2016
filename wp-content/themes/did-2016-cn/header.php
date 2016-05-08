<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Nav -->
<div id="nav">
	<!-- Standalone logo -->
	<div id="alter-menu">
		<div id="logo-orange">	
			<img src="<?php echo get_template_directory_uri()?>/images/logo-orange.png" /> 
		</div>
	</div>	
	<!-- Nav -->
	<div id="primary-menu" style="display:none">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri()?>/images/logo-transparent.png" /> 
		</div>
		<div class="menu-buttons">
			<div class="homepage menu">
			
			</div>
			<div class="stadium menu">
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li>黑暗中对话体验馆</li>
							<li>在线购票</li>							
						</ul>
						<p class="brief">体验馆介绍</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/menu-stadium-brief.jpg" /> 
					</div>
				</div>
			</div>
			<div class="workshop menu">
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li>黑暗中对话工作坊</li>
							<li>无声中对话工作坊</li>
							<li>教育工作坊</li>	
							<li>日程表</li>													
						</ul>
						<p class="brief">工作坊介绍</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/menu-stadium-brief.jpg" /> 
					</div>
				</div>
			</div>
			<!-- 特别活动 -->
			<div class="events menu"></div>
			<!-- 品牌合作 -->
			<div class="cooperation menu">
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li>合作方式及案例</li>
						</ul>
						<p class="brief">介绍</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/menu-stadium-brief.jpg" /> 
					</div>
				</div>
			</div>
			<div class="about menu">
				<div class="sub-menu">
					<div class="list">
						<ul>
							<li>品牌故事</li>						
							<li>联系我们</li>							
							<li>加入我们</li>
							<li>FAQ</li>							
						</ul>
						<p class="brief">介绍</p>					
					</div>
					<div class="image">
						<img src="<?php echo get_template_directory_uri()?>/images/menu-stadium-brief.jpg" /> 
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- Phone -->
<div id="contact-header">
	<table border="0">
		<tr valign="middle">
			<td><img height="22" src="<?php echo get_template_directory_uri()?>/images/iconfont-phone-h.png" style="position:relative;margin-right:5px;margin-top:5px" /></td>
			<td>021-63020090&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English Version</td>	
		</tr>
	</table>
</div>

<!-- Sidebar -->
<div id="sidebar">
	<div class="tool-wx tool">
		<div class="button"><span>关注微信</span></div>
	</div>
	<div class="tool-corp tool">
		<div class="button"><span>在线订票</span></div>	
	</div>
	<div class="tool-ticket tool">
		<div class="button"><span>工作坊预约</span></div>
	</div>
	<div><img src="<?php echo get_template_directory_uri()?>/images/sidebar-news.png" width="100%" /></div>
</div>
<script type="text/javascript">
jQuery(function($) {
	// 菜单切换
	$('#alter-menu').hover(
		function() {
			$('#alter-menu').fadeOut(500);
			$('#primary-menu').fadeIn(500);
		},
		function () {}
	);
	
	$('#primary-menu').hover(
		function() {},
		function() {
			$('#alter-menu').fadeIn(500);
			$('#primary-menu').fadeOut(500);
		}
	);
});
</script>
