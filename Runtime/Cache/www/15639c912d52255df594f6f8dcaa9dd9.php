<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
.article_preview {
	margin-top:40px;
}

.article_preview_head{
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #CCC;
	border-right-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
	color: #396;
	}
.article_preview_content {
	font-size: 13px;
	font-family: "Times New Roman", Times, serif;
	color: #333;
	font-weight: lighter;
}
.a_tip{
	font-family: "Courier New", Courier, monospace;
	font-size: 11px;
	}
.page_show{
	text-align:right;
}

.article_title{
	font-size:18px;
	text-decoration: underline;
	}
</style>


<span class="search_tip">为你匹配到<?php echo ($search_count); ?>条记录</span>
<?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article_preview">
<div class="article_preview_head"><a href="__APP__/article/show/article_id/<?php echo ($vo["article_id"]); ?>" target="_blank" class="article_title"><?php echo (msubstr($vo["article_title"],0,50)); ?></a><span class="a_tip">阅读<?php echo ($vo["read_count"]); ?>次   打印<?php echo ($vo["
download"]["count"]); ?>次</span> </div>
<div class="article_preview_content">   <?php echo ($vo["content"]); ?></div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="page_show"><?php echo ($page_show); ?></div>