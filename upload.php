<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<!DOCTYPE html>
<html>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:50px;">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Seleziona l'immagine da caricare:
                        <input type="file" name="fileToUpload" id="fileToUpload" style="height:auto;">
                        <br>
                        <input type="submit" value="Upload Image" name="submit" style="margin-top:30px;margin-bottom: 30px;">
                    </form>
                    <?php
                    if(isset($_FILES["fileToUpload"])){
                        $target_dir = "assets/images/upload/";
                        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        // Check if file already exists
                        if (file_exists($target_file) && $_FILES["fileToUpload"]["name"]!="") {
                          echo "<div class='alert alert-danger'>Errore, il file è già esistente.</div>";
                          $uploadOk = 0;
                        }

                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                          echo "<div class='alert alert-danger'>Errore, sono accettati solo file JPG, JPEG o PNG.</div>";
                          $uploadOk = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk != 0) {

                          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            echo "<div class='alert alert-success'>Il file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " è stato caricato correttamente.</div>";
                          } else {
                            echo "<div class='alert alert-danger'>Errore, c'è stato un problema nel caricamento dell'immagine.</div>";
                          }
                        }
                    }
                    $arrImages=scandirByTime("assets/images/upload/");
                    ?>
                </div>
            </div>
            <div class="row">
                <?php 
                    foreach ($arrImages as $key => $value){
                        if($value!="." && $value!=".."){
                ?>
                <div class="col-md-4" style="margin-bottom:40px;">
                    <div style="height:300px;background-image: url('assets/images/upload/<?php echo $value?>');background-size: cover;background-position: center center;"></div>
                    <?php echo $value?>
                </div>
                <?php }} ?>
            </div>
        </div>
    </body>
</html>


<?php 
function scandirByTime($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess');

    $files = array();    
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return $files;
}
?>