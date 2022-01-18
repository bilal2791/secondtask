<?php
 
class Model_builder
{
  private $_config;

  public function __construct()
  {
    
     $this->_config = json_decode(file_get_contents('configuration.json'), TRUE);
   }

  public function build()
  {
    //echo "<pre>";
     //print_r($this->_config['model'][]['name']);
    //echo "</pre>";

     //generate files and put it into release folder
    //Copy initialize files into release folder
    //TODO
     
    $count_models = count($this->_config['model']);
    
    for($i=0;$i<$count_models;$i++)
    {
      //////////loop through models from configuration file /////////////////
      $modelname = $this->_config['model'][$i]['name'];
      $filename= "tests/views/view"."_".$modelname.".php";
      /////////----code to generate files----///////////////////////
        if(!file_exists($filename)){
          $f = fopen($filename, 'wb');
          if (!$f) {
              die('Error creating the file ' . $filename);
            }
         }
       /////////-----code to create html in file for view----///////
       $model_fields = $this->_config['model'][$i]['field'];        
       $content= "<h1>Add Model</h1>";
       $content.= "<h1>".$modelname."</h1>";
       $content.= '<form action="'.$modelname.'" method="POST" >';
       foreach($model_fields as $key=>$value){
          $fieldname = $value[0];
          $fieldtype= $value[1];
          $fieldlabel = $value[2];
          $validationrule= $value[3]; 
                 
       $content.= "<br>";
       if($fieldlabel!="ID"){
       $content.= '<label>'.$fieldlabel.' :</label>';
       
       $content.= ' <input type="text" name="'.$fieldname.'" id="'.$fieldname.'" value=""  '.$validationrule.'/>';
       }
      }
       $content.= '<br><input type="submit" name="submit" id="submit" value="Submit"/>';
       $content.= '</form>';
       /////////////////////////////////////////////////////////////
         $content.= "<br>";
       //////////------put content in a view---------////////////
       file_put_contents($filename,$content);
       
    }

  }


  public function getModelNames()
  {
    $views=array();
    $count_models = count($this->_config['model']);
    
    for($i=0;$i<$count_models;$i++)
    {
      $modelname = $this->_config['model'][$i]['name'];
      
      $views[] = $modelname;
    
    } 
    return $views;
  }



}

