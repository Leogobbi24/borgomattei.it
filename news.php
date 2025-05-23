<?php 
include "header.php";

$conn = new mysqli("localhost", "iaborgom_root", "1H~+FVqA0V#ZH[~q;4", "iaborgom_master");
$sql="SELECT * FROM news WHERE visibile=1 ORDER BY data DESC";
$result=$conn->query($sql);
if(!$result || $result->num_rows==0){
?>
<div class="breadcrumb-area-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="index.html">Home</a> /
                        <a class="active" href="news.html">News</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">Coming Soon</h1>
                        <p>Sezione in costruzione</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumb-area-bg visit-section pnrr-credits">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="assets/images/nextgeneu.png">
                <img src="assets/images/ministero-cultura.png">
                <img src="assets/images/italia-domani.png">
                <img src="assets/images/regione-lazio.png" class="veneto">
            </div>
            <div class="col-md-12 text-center">
                Finanziato tramite Avviso Pubblico per la presentazione di proposte di intervento per il restauro e la valorizzazione del patrimonio architettonico e paesaggistico rurale - da finanziare nell’ambito del PNRR [M1.C3 – Misura 2 "Rigenerazione di piccoli siti culturali, patrimonio culturale, religioso e rurale" - Investimento 2.2], approvato con D.D. n. G04542 del 13 aprile 2022, finanziato dall’Unione europea - NextGenerationEU e gestito dal Ministero della Cultura; Soggetto Attuatore Regione Lazio".
            </div>
        </div>
    </div>
</div>
<?php }else{ ?>
<div class="breadcrumb-area-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="index.html">Home</a> /
                        <a class="active" href="news.html">News</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">News</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-blog-area rts-section-gap ptop-40 pbot-80">
    <div class="container">
        <div class="row g-24 mt--30">

        	<?php while($news=$result->fetch_array(MYSQLI_ASSOC)){ ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="signle-blog-style-one">
                    <a href="news/<?php echo $news['url']?>.html" class="thumbnail" title="<?php echo $news['voce_menu']?>">
                        <div class="pq-post-media" style="height:350px;background-image: url('assets/images/upload/<?php echo $news['immagine']?>');background-size: cover;background-position: center center;"></div>
                    </a>
                    <div class="inner-content">
                        <a href="news/<?php echo $news['url']?>.html" title="<?php echo $news['voce_menu']?>">
                            <h5 class="title"><?php echo $news['voce_menu']?></h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="news/<?php echo $news['url']?>.html" title="<?php echo $news['voce_menu']?>"> Scopri di più +</a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<div class="breadcrumb-area-bg visit-section pnrr-credits">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="assets/images/nextgeneu.png">
                <img src="assets/images/ministero-cultura.png">
                <img src="assets/images/italia-domani.png">
                <img src="assets/images/regione-lazio.png" class="veneto">
            </div>
            <div class="col-md-12 text-center">
                Finanziato tramite Avviso Pubblico per la presentazione di proposte di intervento per il restauro e la valorizzazione del patrimonio architettonico e paesaggistico rurale - da finanziare nell’ambito del PNRR [M1.C3 – Misura 2 "Rigenerazione di piccoli siti culturali, patrimonio culturale, religioso e rurale" - Investimento 2.2], approvato con D.D. n. G04542 del 13 aprile 2022, finanziato dall’Unione europea - NextGenerationEU e gestito dal Ministero della Cultura; Soggetto Attuatore Regione Lazio".
            </div>
        </div>
    </div>
</div>

<?php } include "footer.php"; ?>