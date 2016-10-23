<h2>Before</h2>
<img src="public/brba.jpg" style="max-width: 800px;">
<?php
require 'vendor/autoload.php';

use Gregwar\Image\Image;

Image::open('public/brba.jpg')
    ->resize(500, 280)
    ->rotate(45, $background = 0xffffff)
    ->grayscale()
    ->save('out.jpg');

?>
<h2>After</h2>
<img src="out.jpg">
