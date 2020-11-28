<?php 

include 'menu.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Коментарии к сайту</title>
 </head>
 <body>
 

 		<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

<script type="text/javascript">
  VK.init({apiId: 5733284, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>


 </body>
 </html>