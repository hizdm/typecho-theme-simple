<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="w3-container w3-section">
	<div class="w3-row">
		<h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
		<p>
			<span><?php $this->category(','); ?></span> / 
			<span><?php $this->date('Y-m-d'); ?></span> / 
			<span><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
		</p>
		<?php $this->content(); ?>
		<p><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
		<hr>
		<ul style="padding-left: 15px;">
	        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
	        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
	    </ul>
	 	<hr>
	 	<div class="w3-center">
	 		<!-- AD start -->
	        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- focus -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:300px;height:250px"
			     data-ad-client="ca-pub-9174837723084614"
			     data-ad-slot="4302553003"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			<!-- AD end -->
	    </div>
		<hr>
	</div>
	<div id="comment">
		<!--PC和WAP自适应版-->
		<div id="SOHUCS" ></div> 
		<script type="text/javascript"> 
		(function(){ 
		var appid = 'cytb6BBd2'; 
		var conf = 'prod_a544f5dfc066fedfda1be6f0e00314ec'; 
		var width = window.innerWidth || document.documentElement.clientWidth; 
		if (width < 960) { 
		window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
	</div>
</div>
<?php $this->need('footer.php');?>
