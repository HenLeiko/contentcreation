<?php
$id = $_GET['id'];
$commets = R::find('comments', 'videos_id = ?', [$id]);
foreach ($commets as $comment):
?>
<div class="comments__item">
    <img src="../../img/avatar.png" alt="" class="comments__avatar">
    <div class="comments__wrapper">
        <div class="comments__name"><?=$comment->users['login']?></div>
        <p class="comments__text"><?=$comment['comment']?></p>
        <a href="" class="comments__answer">Ответить</a>
    </div>
</div>
<?php
endforeach;
?>