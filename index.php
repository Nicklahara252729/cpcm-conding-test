<?php
if (isset($_GET['page'])):
    include('views/themes/panel-theme.php');
else:
    include('views/themes/auth-theme.php');
endif;
