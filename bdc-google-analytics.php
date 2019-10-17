<?php
/*
Plugin Name: Custom Google Analytics Plugin
Plugin URI: http://bradfielddadsclub.com
Description: BDC Google Analytics tracking code.
Author: Scott Trulock
Version: 1.0
*/
 function ns_google_analytics() { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7020140-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-7020140-3');
</script>
  <?php
  }
  
add_action( 'wp_head', 'ns_google_analytics', 10 );
