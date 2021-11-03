<?php
include_once('_header.php'); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="uploadManager.php" method="post" enctype="multipart/form-data">
                <h2>Upload Picure</h2>

                <label for="titul">Title:</label>
                <p href=""><input type="text" name="title" id="title"></p>
                <label for="file">Picture:</label>
                <p href=""><input type="file" name="picture" id="picture"></p>
                <button class="btn btn-primary" type="submit">Upload</button>
            </form>
        </div>
    </div>
</div>
<?php include_once('_footer.php') ?>