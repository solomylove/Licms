<?php if (!defined('THINK_PATH')) exit();?><table width="658" border="0">
  <tr>
    <td width="113">消费积分</td>
    <td width="266">消费时间</td>
    <td width="265">在文章</td>

  </tr>
  <?php if(is_array($pay_list)): $i = 0; $__LIST__ = $pay_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><?php echo ($vo["pay"]); ?></td>
    <td><?php echo (date("y-m-d H-i-s",$vo["create_time"])); ?></td>
    <td><?php echo ($vo["article_title"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tbody>
  </tbody>
</table>
<div class="page_show">
  <?php if(empty($pay_list)): ?>暂无相关记录<?php endif; ?>
<?php echo ($page_show); ?></div>