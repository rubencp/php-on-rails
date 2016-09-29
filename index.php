
<?php 
include 'config/boot.php';
include 'config/environments/'.$PHP_ENV.'.php';
#load_application
#load initializers

#Fetch from URL [:controller,:action,:parameters]
include 'config/routes.php';

#Controller
#- Action
#- View

 include 'app/controllers/'.$controller.'_controller.php';

# Done!
?>
