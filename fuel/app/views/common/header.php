<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php echo Asset::css('bootstrap.css'); ?>
    <!--個別スタイルの追加-->
    <?php echo Asset::css('add01.css'); ?>
    <title>develop lab</title>
</head>
<body>
    <div class="container">
<?php if(Auth::check()){ ?>
<div class="content">
<h2>ようこそ<?=Auth::get_screen_name()?>さん</h2>
<p><a href="/">TOP</a></p>
<p><a href="/admin/logout">ログアウト</a></p>
</div>
<?php } ?>
<div class="row">
        <div class="col-md-12">
    <h1 class="text-center">*develop lab*</h1>
        </div>
    <hr>
        </div>