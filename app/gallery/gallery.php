<link rel="stylesheet" href="css.css">
<?php
include_once('_header.php');
include('./Class/GalleryClass.php');
$filename = $_GET['ruta'];
$gallery = new Gallery($filename);
$gallery->loadGallery();
?>
<div class="container">
    <div class="card-group flex-gallery">
        <?php foreach ($gallery->__get("_gallery") as $pic) { ?>
            <div class="col-sm-12 col-md-4">
                <div class="card-column ">
                    <div class="custom-column-content">
                        <!-- todo todavia se puede reducir unm poquito mas el tag de php -->
                        <img src="<?php echo $pic->__get('filename') ?>" style="object-fit:fill;width:90%;height:300;border: solid 1px #CCC" alt="">
                        <p align="center"><?php echo $pic->__get('title')?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once('_footer.php') ?>