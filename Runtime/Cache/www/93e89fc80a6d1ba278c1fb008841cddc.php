<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
.alist_font {
	font-size: 12px;
	color: #436373;
}
</style>

<?php if(empty($article_list)): ?>抱歉，没有找到你需要的内容<?php endif; ?>

<ul>
<?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/article/show/article_id/<?php echo ($vo["article_id"]); ?>" class="alist_font" target="_blank"><?php echo (msubstr($vo["article_title"],0,20)); ?></a><li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>