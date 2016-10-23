<?php
require 'vendor/autoload.php';

use Carbon\Carbon;
use Gregwar\Image\Image;

printf("Now: %s", Carbon::now());

Image::open('public/brba.jpg')
    ->resize(300, 300)
    ->rotate(45, $background = 0xffffff)
    ->save('out.jpg');

?>
<img src="out.jpg">
