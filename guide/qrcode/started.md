# Getting started

Before we use QRcode, we must enable the module

	Kohana::modules(array(
		...		
		'qrcode' => MODPATH.'qrcode',
		...
	));


# Configuration

Copy the configuration file MODPATH/qrcode/config/qrcode.php to APPPATH/config

Is recommended set cacheable to TRUE (Remember add write permission to APPPATH/cache directory)
  
	return array(
		'cacheable'    => FALSE,    
		'best_mask'    => TRUE,   
		'rand_seed'    => 2,      
		'png_max_size' => 1024,   
		'default_mask' => 2,         	
	);
