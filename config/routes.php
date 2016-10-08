<?php  $Phails_routes_draw = array( #do
    
    "get", 'cont1'          => 'application#index',
    "get", 'cont1/show'     => 'application#show',
    "post",'something/edit' => 'application#edit',
    
    "get",  'something/edit' => 'application#index',
    "get",  'something/show' => 'application#show',
    "post", 'something/edit' => 'application#edit'
    
#end
);
list($controller,$action,$params) = ParseRoutes($Phails_routes_draw);





// Input TheRoutes Array
// Output controller and action to perform if a valid route
// If no route found or invalid route, 
// route to default route errors
// After here this variables should not have the default value but the desired one (or error)
// e.g 
//   list($controller,$action,$params) = ParseRoutes($Phails_routes_draw);

  function ParseRoutes($Routes){

	 # Default application#action
	 $ctrl = "application";
	 $act = "index";
	 $param =[];



  	return array($ctrl,$act,$param);
  }

?>