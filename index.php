
<?php 
include 'config/boot.php';
include 'config/environments/'.$PHP_ENV.'.php';
#load_application

#load initializers
include 'config/initializers/datasources.php';

#Fetch from URL [:controller,:action,:parameters]
include 'config/routes.php';

#-Controller
#-- Action
#--- View

 include 'app/controllers/'.$controller.'_controller.php';
 
 include 'app/views/layouts/'.$layout.'.html.php';

# Done!
?>
