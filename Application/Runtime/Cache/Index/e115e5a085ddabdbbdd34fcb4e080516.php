<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MessageAddPage</title>
</head>
<body>
    <form action="<?php echo U('Index/index/doUp');?>" method="post" >
        <input type="text" name="title" value="<?php echo ($result['title']); ?>"/><br><br>
        <textarea name="context" style="height: 200px;"><?php echo ($result['context']); ?></textarea><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="reset">
        <input type="hidden" value="<?php echo ($result['id']); ?>"/>
    </form>
</body>
</html>