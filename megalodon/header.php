<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Megabelt
 */ 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<?php if(is_front_page()){ echo '<style> header{ position: absolute; }</style>';}?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'megabelt' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<?php if( is_home() || is_front_page() ){ the_custom_logo(); } 
					else{ ?>
				<a class="header__logo" href="<?= get_home_url(); ?>">
					<img src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/08/logored.png">
				</a>
			<?php } ?>
			
			<nav class="big-menu">  <!-- Меню для больших экранов -->
				<?php wp_nav_menu(['theme_location' => 'menu-1']) ?>
			</nav>
			<div class="header__right">
				<a class="header__youtube" href=" https://rutube.ru/channel/43535889/" target="_blank">
					<svg width="34" height="34" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill="none"><path fill="#fff" d="M128.689 47.57H20.396v116.843h30.141V126.4h57.756l26.352 38.013h33.75l-29.058-38.188c9.025-1.401 15.522-4.73 19.493-9.985 3.97-5.255 5.956-13.664 5.956-24.875v-8.759c0-6.657-.721-11.912-1.985-15.941-1.264-4.029-3.43-7.533-6.498-10.686-3.249-2.978-6.858-5.08-11.19-6.481-4.332-1.226-9.747-1.927-16.424-1.927zm-4.873 53.08H50.537V73.321h73.279c4.15 0 7.038.7 8.482 1.927 1.444 1.226 2.347 3.503 2.347 6.832v9.81c0 3.503-.903 5.78-2.347 7.006s-4.331 1.752-8.482 1.752z" style="display:inline;fill:none;stroke:#fff;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1" transform="translate(1.605 -1.99)"/><path fill="#F41240" d="M162.324 45.568c5.52 0 9.998-4.477 9.998-10s-4.478-10-9.998-10c-5.524 0-10.002 4.477-10.002 10s4.478 10 10.002 10z" style="display:inline;fill:#fff;fill-opacity:1;stroke:none;stroke-width:10.6667;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1" transform="translate(1.605 -1.99)"/></svg>
					<!-- <svg width="34" height="26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.308 4.536a4.435 4.435 0 0 0-1.096-1.962 4.228 4.228 0 0 0-1.897-1.138C27.655.681 17.012.669 17.012.669S6.37.657 3.708 1.378c-.717.211-1.37.609-1.894 1.155A4.53 4.53 0 0 0 .708 4.5C.007 7.25 0 12.95 0 12.95s-.007 5.73.69 8.451c.39 1.505 1.537 2.693 2.995 3.099 2.687.754 13.301.767 13.301.767s10.643.012 13.304-.708a4.243 4.243 0 0 0 1.898-1.135 4.45 4.45 0 0 0 1.103-1.96c.704-2.747.709-8.447.709-8.447s.034-5.732-.692-8.48Zm-19.7 13.696L13.615 7.7l8.846 5.275-8.855 5.257Z" fill="#fff"/></svg> -->
				</a>
				<div class="header__phones">
					<a class="header__phone" href="tel:+73832240601">+7 (383) <b>224 06 01</b></a>
					<a class="header__phone" href="tel:+73832246212">+7 (383) <b>224 62 12</b></a>
				</div>
				<button class="callback-btn" id="open-modal-btn-header"><span>Заказать звонок</span>
					<svg width="34" height="34" viewBox="0 0 16.9333 16.9333" xmlns="http://www.w3.org/2000/svg"><path d="M3.1636.781c-.2645.008-.4969.1476-.6914.342L1.3999 2.1934a.2652.2652 0 1 0 .3747.3752l.369-.369L4.3076 4.418c.2458.2674.6402-.1168.3793-.3695L2.5177 1.8254l.3276-.3277c.1358-.1357.2452-.1843.3338-.187.0887-.003.1957.0334.3494.187l2.2737 2.2717c.107.107.107.2663 0 .3731L4.5754 5.3688c-.3105.3105-.4143.6705-.3788.973.0356.3026.1843.5388.3085.6993.4803.6203 1.2256 1.7097 2.451 2.9352 1.2255 1.2255 2.3155 1.9713 2.9358 2.4515.1605.1243.3966.273.6992.3085.3025.0356.662-.0683.9725-.3788l.367-.3658 2.1683 2.2153c.2448.2927.6646-.1185.3772-.3695l-2.1725-2.219.4868-.4857c.107-.1069.2662-.1069.3731 0l2.2712 2.2712c.1537.1536.1903.2612.1876.3498-.003.0887-.0518.198-.1876.3339l-1.0702 1.0702c-.4466.4465-1.0333.4511-1.4004.4511-1.3865 0-3.8527-.5205-7.4864-4.1543C1.844 7.821 1.3234 5.3553 1.3234 3.969c0-.1323-.0008-.295.0217-.4692a.2646.2646 0 1 0-.5235-.0662c-.0274.2137-.0273.402-.0273.5348 0 1.5237.6096 4.1583 4.3108 7.8595 3.7012 3.7012 6.3353 4.3109 7.859 4.3109.3682 0 1.1659.004 1.7756-.6057l1.0702-1.0702c.1945-.1945.334-.429.342-.6935.008-.2645-.122-.52-.342-.74l-2.2712-2.2717c-.3077-.3077-.8157-.3077-1.1234 0l-1.2243 1.2268c-.2186.2186-.3826.2448-.5395.2263-.1569-.0184-.3165-.1092-.435-.201-.6468-.5007-1.6946-1.2175-2.8852-2.4081S5.424 7.3633 4.9232 6.7165c-.0918-.1186-.1826-.2787-.201-.4356-.0185-.157.0099-.3204.2284-.539l1.2247-1.2242c.3077-.3077.3077-.8158 0-1.1235L3.9036 1.123c-.22-.22-.4755-.3502-.74-.342z"/></svg>
					<!-- <img src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/07/Vector-4-2.png" alt=""> -->
				</button>
				<div class="menu-mobile">       <!-- Меню для маленьких экранов -->
					<input type="checkbox" id="burger-checkbox" class="burger-checkbox">
					<label for="burger-checkbox" class="burger"></label>
				</div> 
			</div>
			
			<?php if( is_front_page()){ ?>
				<img src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/07/line.png" class="header__line">
				<img src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/07/Rectangle-25.png" class="header__line-2">
				<img src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/07/Rectangle-25-2.png" class="header__line-3">
				<img src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/07/Rectangle-25-5.png" class="header__line-4">
			<?php } ?>
		</div>
	</header><!-- #masthead -->
		 
<!-- БУРГЕР -->
<ul class="menu-list" id="menu-list">
	<li class="first-li">
		<img class="mobile-menu-logo" src="https://megabelt.testpronaiti.ru/wp-content/uploads/2024/08/logored.png">
		<a class="close">Закрыть</a>
	</li>
	<?php 
		wp_nav_menu(
			array(
				'theme_location' => 'menu-3',
				'add_li_class'  => 'menu-item-mobile',
				'container' => false
			)
		);
	?>

</ul>