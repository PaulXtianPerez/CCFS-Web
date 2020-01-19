<?php
if(!$_POST['page']) die("0");

$page = (String)$_POST['page'];

if(file_exists($page.'.php'))
include($page.'.php');

else { ?>
  <script type="text/javascript">
    document.getElementById('contents').style.backgroundColor = '#3CB371';
  </script>

<?php
  echo '
      <div style="text-align: center; padding-top: 100px;">
        <h1 style="color: #8B0000;">Error 404: Page not found</h1>
        <br><p>The page you requested does not exist. Please use the navigation bar on the left to get where you want to go.</p>
      </div>
  ';
}
?>
