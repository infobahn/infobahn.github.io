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
      <svg id="siteLogo" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 249.23 60"><g fill="#2d3859" data-name="p"><path d="M19.89 0H0v51.63h6.38v-6.37h6.37v-6.38h7.14c10.7 0 23.36-5.17 23.36-19.53C43.25 5.17 30.5 0 19.89 0zm-2.06 28.09h-5.08v-17.3h6.78c6.06 0 10.16 3.3 10.16 8.83 0 6.24-5.08 8.47-11.86 8.47z"/><path d="M6.38 51.63h4.78v4.78H6.38z" opacity=".75"/><path d="M2.79 56.41h3.59V60H2.79z" opacity=".5"/></g><path fill="#fff" d="M67.77 8.49c4 0 8.91 2 8.91 7.38s-4.83 7.44-8.91 7.44h-2.72v9h-4.86V8.49zM65.05 19.2H67c2.58 0 4.52-.85 4.52-3.23 0-2.11-1.56-3.37-3.87-3.37h-2.6zM92 32.29l-.37-2.45a6.75 6.75 0 0 1-5.54 2.85 6 6 0 0 1-4.76-2.34c-1.39-1.8-1.6-4.11-1.6-6.66V14.4h4.83v9a9.25 9.25 0 0 0 .54 3.84 2.47 2.47 0 0 0 2.38 1.26 4.68 4.68 0 0 0 3.88-2.28V14.4h4.84v17.89zM110.61 19.27a5.44 5.44 0 0 0-3.53-1.5c-.92 0-1.74.51-1.74 1.36 0 1.12 1.33 1.7 2.83 2.31 2.31.95 5.23 2.11 5.23 5.51 0 3.94-3.4 5.74-6.87 5.74a9.94 9.94 0 0 1-7.2-3.06l2.75-2.85c1.36 1.32 2.48 2.11 4.22 2.11 1 0 2.27-.48 2.27-1.57 0-1.25-1.63-1.8-3.4-2.58-2.14-.92-4.48-2.14-4.48-5.27 0-3.64 3.12-5.47 6.39-5.47a8.81 8.81 0 0 1 6.18 2.34zM122.07 16.51a6.85 6.85 0 0 1 5.27-2.51 6 6 0 0 1 4.76 2.34c1.39 1.8 1.6 4.12 1.6 6.67v9.28h-4.83v-9a9.25 9.25 0 0 0-.54-3.84 2.48 2.48 0 0 0-2.33-1.31 4.67 4.67 0 0 0-3.88 2.28v11.87h-4.83V6.79h4.83zM151.79 18.42v6.93a12.79 12.79 0 0 0 .06 1.53c.14 1.05.55 1.7 1.57 1.7a4.09 4.09 0 0 0 1.94-.51l1.49 3.57a9 9 0 0 1-4.25 1 5.15 5.15 0 0 1-5.3-3.84 10.54 10.54 0 0 1-.34-3v-7.38h-2.14v-4H147l.75-3.94h4.08v3.92h4.55v4zM177.11 23.35a9.37 9.37 0 0 1-18.73 0 9.37 9.37 0 0 1 18.73 0zm-9.34-5.21c-2.66 0-4.46 2.28-4.46 5.21s1.8 5.2 4.46 5.2 4.42-2.28 4.42-5.2-1.77-5.21-4.42-5.21zM189.39 8.49h6.94c6.15 0 13 3.19 13 11.8 0 8.8-6.83 12-13.36 12h-6.63zm4.86 19.68h.55c5.57 0 9.38-2 9.38-7.58 0-5.23-3.09-8-8.43-8h-1.5zM217.07 24.54c.34 2.44 1.93 4.28 4.48 4.28a5.05 5.05 0 0 0 4.66-2.65l3.16 2.14a8.91 8.91 0 0 1-8.16 4.38c-5.4 0-9-3.77-9-9.14s3.9-9.55 9.04-9.55c5 0 8.63 3.5 8.63 8.26a12.7 12.7 0 0 1-.24 2.28zm7.88-3.3a3.44 3.44 0 0 0-3.57-3.47c-2.31 0-3.57 1.46-4.08 3.47zM249.23 14.4l-7.34 17.89h-3.95l-6.73-17.89h5.34l3.6 11h.07l3.64-11z"/><path fill="#2d3859" d="M60.19 45.26h175.29v6.38H60.19zM235.48 48.44h3.19v3.19h-3.19zM238.67 45.26h3.19v3.19h-3.19zM241.86 48.44h3.19v3.19h-3.19z"/><path fill="#2d3859" d="M245.05 46.05h2.39v2.39h-2.39z" opacity=".75"/><path fill="#2d3859" d="M247.44 48.44h1.79v1.79h-1.79z" opacity=".5"/></svg>
      </a>

	</header>

	<div id="content" class="site-content">