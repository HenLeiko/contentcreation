<?php
$videos = R::findAll('videos', 'ORDER BY RAND()');
foreach ($videos as $video):
?>
<a href="/view/video/?id=<?=$video['id']?>">
    <div class="video-item">
        <img src="/resources/imgs/<?=$video['preview']?>" alt="Видео" class="video-item__preview">
        <div class="video-item__wrapper">
            <img src="../../img/avatar.png" alt="Аватар" class="video-item__avatar">
            <div class="video-item__info">
                <h4 class="video-item__title"><?=$video['title']?></h4>
                <div class="video-item__user-name"><?=$video->users['login']?></div>
            </div>
        </div>
        <div class="video-item__stats">100 тыс. просмотров - неделю назад</div>
    </div>
</a>
<?php
endforeach;
?>