

<h2>    Below are the Links of generated views from configutation.json file</h2>
<?php


$obj = new Model_builder();
$obj->build();
$ArrayOfViews = $obj->getModelNames();
 
foreach($ArrayOfViews as $key=>$value){
   
    echo '<div style="text-align:left;font-size:20px;"><br> <a style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;" href="/view_'.$value.'">'.$value.'</a></div>';
}

?>