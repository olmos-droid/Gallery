<?php
include_once('_header.php');
include('Class/GalleryClass.php');
$gallery = new Gallery("pictures/fotos.txt");
?>
<div class="container">
    <div class="card-group flex-gallery">
        <?php foreach ($gallery->__get("_gallery") as $pic) { ?>
            <div class="col-sm-12 col-md-4">
                <div class="card-column ">
                    <div class="custom-column-content">
                        <?php echo $pic->__get('_filename'); ?>
                        <img src="<?php echo $pic->__get('_filename') ?>" style="object-fit:fill;width:90%;height:300;border: solid 1px #CCC" alt="">
                        <p align="center"><?php echo $pic->__get('_title') ?>
                    </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <? if (sizeof($gallery->__get('_gallery')) == 0) { ?>
            <div class="alert alert-primary" role="alert">
                The gallery is empty
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php include_once('_footer.php') ?>;