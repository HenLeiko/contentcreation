<main class="video-page">
    <section class="video">
        <div class="video__player" id="player"></div>
        <h2 class="video__title"><?=$data['title']?></h2>
        <div class="video__views"><?=@$data['views']?> просмотров</div>
        <div class="video__channel">
            <img src="../../img/avatar.png" alt="Аватар" class="video__avatar">
            <div class="video__user-info">
                <div class="video__username"><?=$data->users['login']?></div>
                <div class="video__subs">1337 подписчика</div>
            </div>
        </div>
        <p class="video__desc"><?=$data['desc']?></p>

        <div class="comments">
            <h3 class="comments__title">Комментарии (11)</h3>
            <form action="/view/comment" method="post" class="comments__form">
                <img src="../../img/avatar.png" alt="Аватар" class="comments__avatar">
                <input type="text" placeholder="Оставить комментарий..." name="comment" id="comment"
                    class="comments__input">
                <input type="hidden" name="videoid" value="<?=$_GET['id']?>">
            </form>
            <?php include 'comments.php';?>
        </div>
    </section>
    <section class="other-videos">
        <?php include 'recommended.php';?>
    </section>
</main>
<script type="text/javascript">
    let name = '<?php echo $data['video'];?>';
    let player = new Playerjs({
        id: "player",
        file: "/resources/videos/" + name
    });
</script>