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

<div class="rts-blog-area rts-section-gap">
    <div class="container">
        <div class="row g-24 mt--30">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single blog area start -->
                <div class="signle-blog-style-one">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/01.jpg" alt="blog">
                        <span class="tag">Architecture</span>
                    </a>
                    <div class="inner-content">
                        <a href="blog-details.html">
                            <h5 class="title">
                                The Retro Outdoor Furniture Set
                                That’s Like Grandma’s—But Better
                            </h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="blog-details.html"> Read More +</a>
                    </div>
                </div>
                <!-- single blog area end -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single blog area start -->
                <div class="signle-blog-style-one">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/02.jpg" alt="blog">
                        <span class="tag">Architecture</span>
                    </a>
                    <div class="inner-content">
                        <a href="blog-details.html">
                            <h5 class="title">
                                The Retro Outdoor Furniture Set
                                That’s Like Grandma’s—But Better
                            </h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="blog-details.html"> Read More +</a>
                    </div>
                </div>
                <!-- single blog area end -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single blog area start -->
                <div class="signle-blog-style-one">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/03.jpg" alt="blog">
                        <span class="tag">Architecture</span>
                    </a>
                    <div class="inner-content">
                        <a href="blog-details.html">
                            <h5 class="title">
                                The Retro Outdoor Furniture Set
                                That’s Like Grandma’s—But Better
                            </h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="blog-details.html"> Read More +</a>
                    </div>
                </div>
                <!-- single blog area end -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single blog area start -->
                <div class="signle-blog-style-one">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/22.jpg" alt="blog">
                        <span class="tag">Architecture</span>
                    </a>
                    <div class="inner-content">
                        <a href="blog-details.html">
                            <h5 class="title">
                                The Retro Outdoor Furniture Set
                                That’s Like Grandma’s—But Better
                            </h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="blog-details.html"> Read More +</a>
                    </div>
                </div>
                <!-- single blog area end -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single blog area start -->
                <div class="signle-blog-style-one">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/23.jpg" alt="blog">
                        <span class="tag">Architecture</span>
                    </a>
                    <div class="inner-content">
                        <a href="blog-details.html">
                            <h5 class="title">
                                The Retro Outdoor Furniture Set
                                That’s Like Grandma’s—But Better
                            </h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="blog-details.html"> Read More +</a>
                    </div>
                </div>
                <!-- single blog area end -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single blog area start -->
                <div class="signle-blog-style-one">
                    <a href="blog-details.html" class="thumbnail">
                        <img src="assets/images/blog/24.jpg" alt="blog">
                        <span class="tag">Architecture</span>
                    </a>
                    <div class="inner-content">
                        <a href="blog-details.html">
                            <h5 class="title">
                                The Retro Outdoor Furniture Set
                                That’s Like Grandma’s—But Better
                            </h5>
                        </a>
                        <a class="btn-blog-readmore justify-content-start" href="blog-details.html"> Read More +</a>
                    </div>
                </div>
                <!-- single blog area end -->
            </div>
        </div>
    </div>
</div>

<?php } include "footer.php"; ?>