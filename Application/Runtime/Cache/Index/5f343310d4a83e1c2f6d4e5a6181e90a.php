<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thinkphp3.2MessageSystem</title>
</head>
<style>
    *{margin: 0;padding: 0;}
    span{color:red; font-weight: bold;}
</style>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<body>
    <h1><a href="<?php echo U('Index/index/add');?>">添加</a></h1>
    <br>
<hr/>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div id="s<?php echo ($data['id']); ?>">
<div>
    <br>
    <div>ID:<span><?php echo ($data['id']); ?></span>&nbsp;&nbsp;标题：<span><?php echo ($data['title']); ?></span>&nbsp; 时间：<span><?php echo (date("Y-m-d H:i:s",$data['inputtime'])); ?></span> &nbsp; <a href="<?php echo U('Index/index/add',array('id'=>$data['id']));?>">修改</a>&nbsp; <a href="javascript:del('<?php echo ($data[id]); ?>')">删除</a></div><br>
    <p>
        <?php echo ($data['context']); ?>
    </p>
</div><br><hr/></div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>
<script>
function del(id){
    var truthBeTold = window.confirm("确定删除此信息吗");
    if(truthBeTold){
        var url = "<?php echo U('Index/index/del');?>";
        $.get(url+'&id='+id,function(data){
            if(data == 1) $("#s"+id).slideUp(1000);
        })
    }

}
</script>