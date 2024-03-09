<?php
$conn = new mysqli("localhost", "iaborgom_root", "1H~+FVqA0V#ZH[~q;4", "iaborgom_master");
$sql="SELECT * FROM news WHERE url='".$_GET['url_news']."'";
$result=$conn->query($sql);
if(!$result || $result->num_rows==0){

	header('HTTP/1.1 301 Moved Permanently');
	header('Location: https://borgomattei.it/news.html');
	exit;

}else{
	include "header.php";
	$news=$result->fetch_array(MYSQLI_ASSOC);
?>

<div class="rts-blog-details-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                <div class="blog-single-post-listing details mb--0">
                    <div class="thumbnail">
                        <img src="../assets/images/upload/<?php echo $news['immagine']?>" alt="<?php echo $news['immagine']?>">
                    </div>
                    <div class="blog-listing-content">
                        <div class="user-info">
                            <div class="single">
                                <i class="far fa-clock"></i>
                                <span><?php echo date('d/m/Y', $news['data'])?></span>
                            </div>
                        </div>
                        <h3 class="title animated fadeIn"><?php echo $news['titolo']?></h3>
                        <p class="disc para-1 mb--15">
                            <?php echo $news['descrizione_dettagliata']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php";} ?>