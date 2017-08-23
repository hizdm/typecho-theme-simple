<?php
/**
 * 一款简洁的Typecho皮肤
 *
 * @package Simple 主题
 * @author https://github.com/hizdm/
 * @version 1.0
 * @link http://w3schools.wang
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php while($this->next()): ?>
	<div class="w3-container w3-section">
		<div class="w3-row">
			<h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
		  	<div class="w3-col s3" style="padding-top:10px;">
		  		<!-- <img src="<?php Fimg_Plugin::showfimg($this->cid,1);?>" style="max-width: 92px;max-height: 92px"> -->
		  		<ul class="w3-ul">
				  <li><?php $this->category(','); ?></li>
				  <li><?php $this->date('y/m/d'); ?></li>
				  <!--
				  <li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
				  -->
				</ul>
		  	</div>
		  	<div class="w3-col s9 w3-container">
		  	<?php $this->excerpt(100); ?>
		  	<p><a href="<?php $this->permalink() ?>"> - 阅读剩余部分 - </a></p>
		  	</div>
		</div>
		<hr>
	</div>
<?php endwhile; ?>
<div class="w3-center" style="padding-bottom: 25px">
	<?php $this->pageNav('«', '»', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'w3-pagination', 'itemTag' => 'li', 'textTag' => 'a', 'currentClass' => 'current-page', 'prevClass' => '', 'nextClass' => '')); ?>
</div>
<?php $this->need('footer.php');?>