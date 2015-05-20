<?php
include "header.php";
include "menu.php";
include "sitecontent.php";
include "content.php";
include "footer.php";
?>
   <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="theme/js/jquery.js"></script>
  <script type="text/javascript" src="theme/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="theme/js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
