<?php
    //加载配置文件
    require_once '../connect.php';
    $id = $_GET['id'];
    $deletesql = "delete from article where id = $id";
    if($con->query($deletesql)){
        echo "<script>alert('删除文章成功');window.location.href='article.manage.php</script>";
    }else {
        echo "<script>alert('删除文章失败');window.location.href='article.manage.php</script>";
    }
?>