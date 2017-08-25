<!--header.php読込-->
<?php echo View::forge('common/header'); ?>

<div> 
<h2>グローバルなび</h2>
<ul>
    <li><a href="/junk/index.php">ジャンク品倉庫</a></li>
    <!--<li><a href="/bord/index.php">掲示板</a></li>-->
    <!--<li><a href="/diray/index">日記</a></li>-->
    <li><a href="/contact/index.php">ご質問＆ご相談</a></li>
    <?php if((Auth::get_screen_name() == 'jun')){ ?>
    <li><a href="/admin/add_user.php">ユーザ登録</a></li>
    <?php } ?>
</ul>

</div>


<!--footer.php読込-->
<?php echo View::forge('common/footer'); ?>