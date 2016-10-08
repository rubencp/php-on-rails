<?php 

 $filename = $file_path."/".$installed_path."/data/";

if ($live_server) { #Live Server is password protected therefore file path is required
    $data_content_path = $file_root_path."/".$installed_path."/data";
}else { # development can be accessed via website
    $data_content_path = $website_path."/".$installed_path."/data";
}



?>