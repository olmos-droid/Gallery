<link rel="stylesheet" href="css.css">
<?php
include_once('_header.php');
include('./Class/GalleryClass.php');
$filename = $_GET['ruta'];

$gallery = new Gallery($filename);
$gallery->loadGallery();
echo '<div class="container">';
echo '<div class="card-group">';
foreach ($gallery->__get("_gallery") as $pic) {
    echo '<div class="col-sm-12 col-md-4">';
    echo '<div class="card-column ">';
    echo '<div class="custom-column-content">';
    echo '<img src="' . $pic->__get('filename') . '" style="object-fit:fill;width:90%;height:300;border: solid 1px #CCC" alt="">';
    echo '<p align="center">' . $pic->__get('title') . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div>';
echo '</div>';
?>
<?php include_once('_footer.php') ?>