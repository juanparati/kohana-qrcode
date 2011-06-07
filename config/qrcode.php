<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
  'cacheable'    => FALSE,  // use cache - more disk reads but less CPU power  
  'best_mask'    => TRUE,   // TRUE = Estimates best mask but extremally low
  'rand_seed'    => 2,      // False = Checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly
  'png_max_size' => 1024,   // maximum allowed png image width (in pixels)
  'default_mask' => 2,      // Only when best_mask === false   	
);
