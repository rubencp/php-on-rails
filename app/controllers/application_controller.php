<?php 

  $SomeVariable ="It Works (Variable ".$action.")";
  $Executing =$controller."#".$action;
  $layout="application";

switch ($action) {
    case "index":      
         $SomeVariable .= " indice";
        break;
    case "edit":
         $SomeVariable .= " editar";
        break;
    case "delete":
         $SomeVariable .= " remove";
        break;
    case "new":
        $SomeVariable .= " nuevo";
        break;        
}


$content2render = 'app/views/'.$controller.'/'.$action.'.html.php';

?>