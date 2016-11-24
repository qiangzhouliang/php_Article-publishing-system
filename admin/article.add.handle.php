<?php
    require_once '../connect.php';
    //把传递过来的信息入库,在入库之前对所有的信息进行校验。
    //print_r($_POST);
    if (!(isset($_POST['title'])&&(!empty($_POST['title'])))){
        echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
    }
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];

    $dateline = time();
    $insertsql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content','$dateline')";
    //测试语句
    //echo $insertsql;

    //执行sql语句
    if($con->query($insertsql)){
        echo
            "<script>alert('发布文章成功');window.location.href='article.add.php'</script>";
    }else {
        echo "<script>alert('发布文章失败，请重新发布...');window.location.href='article.add.php'</script>";
    }
?>