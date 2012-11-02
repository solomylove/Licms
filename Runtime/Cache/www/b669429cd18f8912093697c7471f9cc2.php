<?php if (!defined('THINK_PATH')) exit();?><table width="720" border="0">
  <tr>
    <td width="146">充值金额</td>
    <td width="246">充值时间</td>
    <td width="314">兑换积分</td>
  </tr>
      <tbody>
<?php if(is_array($money_list)): $i = 0; $__LIST__ = $money_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><?php echo ($vo["money"]); ?></td>
    <td><?php echo (date("y-m-d H-i-s",$vo["create_time)"])); ?></td>
    <td><?php echo ($vo["score"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
<div class="page_show">
  <?php if(empty($item_list)): ?>没有相关记录<?php endif; echo ($page_show); ?></div>