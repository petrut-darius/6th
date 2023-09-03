<?php
phpinfo();
// Specific header-ul ca imagine
header('Content-type: image/jpeg');

// Adaug dimensiunile adresei de e-mail
$email = 'dariusip01.2009@gmail.com';
$email_length = strlen($email);

// Specific font_size-ul
$font_size = 12;

// Specific inaltimea si latimea imaginii
$image_height = 20;
$image_width = imagefontwidth($font_size) * $email_length;

// Creez imaginea
$image = imagecreatetruecolor($image_width, $image_height);

// Aloc culoarea de fundal
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);

// Culoarea textului
$image_text_color = imagecolorallocate($image, 0, 0, 0);

// Creez imaginea si adaug textul
imagestring($image, $font_size, 0, 0, $email, $image_text_color);

// Afisez imaginea
imagejpeg($image);

imagedestroy($image); // Eliberez memoria

?>
