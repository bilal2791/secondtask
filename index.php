<?php
require 'flight/Flight.php';
require 'Model_builder.php';
// $obj = new Model_builder();
// $ArrayOfViews = $obj->getModelNames();

Flight::set('flight.views.path', 'tests/views');
Flight::set('layout', 'layout/default');

Flight::route('/', function(){ 
  Flight::render("hello");       
});

Flight::route('/view_location', function(){ 
    Flight::render("view_location");       
  });

  Flight::route('/view_email', function(){ 
    Flight::render("view_email");       
  });

  
  Flight::route('/view_sms', function(){ 
    Flight::render("view_sms");       
  });
  
  Flight::route('/view_user', function(){ 
    Flight::render("view_user");       
  });
  

  /////////-----------post routes------/////////////

  Flight::route('/location', function(){ 
    Flight::render("../models/location");       
  });


  Flight::route('/sms', function(){ 
    Flight::render("../models/sms");       
  });

  
  Flight::route('/email', function(){ 
    Flight::render("../models/email");       
  });

  
  Flight::route('/user', function(){ 
    Flight::render("../models/user");       
  });



Flight::start();