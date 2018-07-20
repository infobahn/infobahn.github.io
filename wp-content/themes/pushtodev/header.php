<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage push_to_dev
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<script>
  (function(d) {
    var config = {
      kitId: 'pif8zeb',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="section site-header" role="banner">

		<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <svg id="siteLogo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 249.23 60"><title>Artboard 1</title><g id="p"><g id="p-2" data-name="p"><path d="M19.89,0H0V51.63H6.38V45.26h6.37V38.88h7.14c10.7,0,23.36-5.17,23.36-19.53C43.25,5.17,30.5,0,19.89,0ZM17.83,28.09H12.75V10.79h6.78c6.06,0,10.16,3.3,10.16,8.83C29.69,25.86,24.61,28.09,17.83,28.09Z" style="fill:#2d3859"/><rect x="6.38" y="51.63" width="4.78" height="4.78" style="fill:#2d3859;opacity:0.75"/><rect x="2.79" y="56.41" width="3.59" height="3.59" style="fill:#2d3859;opacity:0.5"/></g><g id="rest"><path d="M67.77,8.49c4,0,8.91,2,8.91,7.38s-4.83,7.44-8.91,7.44H65.05v9H60.19V8.49ZM65.05,19.2H67c2.58,0,4.52-.85,4.52-3.23,0-2.11-1.56-3.37-3.87-3.37H65.05Z" style="fill:#fff"/><path d="M92,32.29l-.37-2.45a6.75,6.75,0,0,1-5.54,2.85,6,6,0,0,1-4.76-2.34c-1.39-1.8-1.6-4.11-1.6-6.66V14.4h4.83v9a9.25,9.25,0,0,0,.54,3.84,2.47,2.47,0,0,0,2.38,1.26,4.68,4.68,0,0,0,3.88-2.28V14.4H96.2V32.29Z" style="fill:#fff"/><path d="M110.61,19.27a5.44,5.44,0,0,0-3.53-1.5c-.92,0-1.74.51-1.74,1.36,0,1.12,1.33,1.7,2.83,2.31,2.31.95,5.23,2.11,5.23,5.51,0,3.94-3.4,5.74-6.87,5.74a9.94,9.94,0,0,1-7.2-3.06l2.75-2.85c1.36,1.32,2.48,2.11,4.22,2.11,1,0,2.27-.48,2.27-1.57,0-1.25-1.63-1.8-3.4-2.58-2.14-.92-4.48-2.14-4.48-5.27,0-3.64,3.12-5.47,6.39-5.47a8.81,8.81,0,0,1,6.18,2.34Z" style="fill:#fff"/><path d="M122.07,16.51A6.85,6.85,0,0,1,127.34,14a6,6,0,0,1,4.76,2.34c1.39,1.8,1.6,4.12,1.6,6.67v9.28h-4.83v-9a9.25,9.25,0,0,0-.54-3.84A2.48,2.48,0,0,0,126,18.14a4.67,4.67,0,0,0-3.88,2.28V32.29h-4.83V6.79h4.83Z" style="fill:#fff"/><path d="M151.79,18.42v6.93a12.79,12.79,0,0,0,.06,1.53c.14,1.05.55,1.7,1.57,1.7a4.09,4.09,0,0,0,1.94-.51l1.49,3.57a9,9,0,0,1-4.25,1,5.15,5.15,0,0,1-5.3-3.84,10.54,10.54,0,0,1-.34-3V18.42h-2.14v-4H147l.75-3.94h4.08V14.4h4.55v4Z" style="fill:#fff"/><path d="M177.11,23.35a9.37,9.37,0,0,1-18.73,0,9.37,9.37,0,0,1,18.73,0Zm-9.34-5.21c-2.66,0-4.46,2.28-4.46,5.21s1.8,5.2,4.46,5.2,4.42-2.28,4.42-5.2S170.42,18.14,167.77,18.14Z" style="fill:#fff"/><path d="M189.39,8.49h6.94c6.15,0,13,3.19,13,11.8,0,8.8-6.83,12-13.36,12h-6.63Zm4.86,19.68h.55c5.57,0,9.38-2,9.38-7.58,0-5.23-3.09-8-8.43-8h-1.5Z" style="fill:#fff"/><path d="M217.07,24.54c.34,2.44,1.93,4.28,4.48,4.28a5.05,5.05,0,0,0,4.66-2.65l3.16,2.14a8.91,8.91,0,0,1-8.16,4.38c-5.4,0-9-3.77-9-9.14S216.11,14,221.25,14c5,0,8.63,3.5,8.63,8.26a12.7,12.7,0,0,1-.24,2.28Zm7.88-3.3a3.44,3.44,0,0,0-3.57-3.47c-2.31,0-3.57,1.46-4.08,3.47Z" style="fill:#fff"/><path d="M249.23,14.4l-7.34,17.89h-3.95L231.21,14.4h5.34l3.6,11h.07l3.64-11Z" style="fill:#fff"/><rect x="60.19" y="45.26" width="175.29" height="6.38" style="fill:#2d3859"/><rect x="235.48" y="48.44" width="3.19" height="3.19" style="fill:#2d3859"/><rect x="238.67" y="45.26" width="3.19" height="3.19" style="fill:#2d3859"/><rect x="241.86" y="48.44" width="3.19" height="3.19" style="fill:#2d3859"/><rect x="245.05" y="46.05" width="2.39" height="2.39" style="fill:#2d3859;opacity:0.75"/><rect x="247.44" y="48.44" width="1.79" height="1.79" style="fill:#2d3859;opacity:0.5"/></g></g></svg>
        </a>

	</header>

	<div id="content" class="site-content">