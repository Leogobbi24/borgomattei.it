<?php header("Content-type: text/xml"); ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>https://borgomattei.it/</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/storia.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/ospitalita.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/servizi.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/matrimoni.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/contatti.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/antiche-cantine.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/progetto.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/news.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<?php 

		$conn = new mysqli("localhost", "iaborgom_root", "1H~+FVqA0V#ZH[~q;4", "iaborgom_master");
		$sql="SELECT * FROM news WHERE visibile=1 ORDER BY data DESC";
		$result=$conn->query($sql);
		if($result && $result->num_rows>0){
			while($news=$result->fetch_array(MYSQLI_ASSOC)){
	?>
	<url>
		<loc>https://borgomattei.it/news/<?php echo $news['url']?>.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc>https://borgomattei.it/en/news/<?php echo $news['url']?>.html</loc>
		<lastmod>2023-12-02T10:13:16+02:00</lastmod>
		<changefreq>daily</changefreq>
		<priority>1.0</priority>
	</url>
	<?php }} ?>
</urlset>