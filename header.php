<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
	<link rel="stylesheet" href="<?php $this->options->themeUrl('w3.css'); ?>">
	<style type="text/css">
		.w3-theme-l5 {color:#000 !important; background-color:#f4faf4 !important}
		.w3-theme-l4 {color:#000 !important; background-color:#dbefdc !important}
		.w3-theme-l3 {color:#000 !important; background-color:#b7dfb8 !important}
		.w3-theme-l2 {color:#000 !important; background-color:#93cf95 !important}
		.w3-theme-l1 {color:#fff !important; background-color:#6ec071 !important}
		.w3-theme-d1 {color:#fff !important; background-color:#459c48 !important}
		.w3-theme-d2 {color:#fff !important; background-color:#3d8b40 !important}
		.w3-theme-d3 {color:#fff !important; background-color:#357a38 !important}
		.w3-theme-d4 {color:#fff !important; background-color:#2e6830 !important}
		.w3-theme-d5 {color:#fff !important; background-color:#265728 !important}

		.w3-theme-light {color:#000 !important; background-color:#f4faf4 !important}
		.w3-theme-dark {color:#fff !important; background-color:#265728 !important}
		.w3-theme-action {color:#fff !important; background-color:#265728 !important}

		.w3-theme {color:#fff !important; background-color:#4caf50 !important}
		.w3-text-theme {color:#4caf50 !important}
		.w3-theme-border {border-color:#4caf50 !important}
		.w3-hover-theme:hover {color:#fff !important; background-color:#4caf50 !important}

		.current-page a {
			background-color: #4CAF50;
			color: #FFFFFF;
		}
		img{max-width:100% !important;height:auto !important;}
		.links ul {
		    list-style: none;
		    float: left;
		    padding-left: 1px;
		}
		.links li {
		    float: left;
		    padding-left: 5px;
		}

		pre {
		    background-color: #f8f8f8;
		    border-left: 5px solid #ccc;
		    color: #5d6a6a;
		    font-size: 14px;
		    line-height: 1.6;
		    overflow: hidden;
		    padding: 0.6em;
		    position: relative;
		    white-space: pre-wrap;
		    word-break: break-word;
		    word-wrap: break-word;
		}

		.w3-row h3 a {
			text-decoration: none;
		}
		.w3-row h3 a:hover {
			color :#4caf50;
		}
	</style>
	<!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
	<div style="max-width:400px;margin:16px;border:1px solid #ccc;margin: 0px auto">
		<header class="w3-container w3-card-4 w3-theme">
		<h1><a class="header-title" href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" style="text-decoration: none;"><?php $this->options->title() ?></a></h1>
		</header>
		<ul class="w3-navbar w3-green" style="border-top: 1px solid #ccc">
			<li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
	        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	        <?php while($pages->next()): ?>
	        <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
	        <?php endwhile; ?>
		</ul>