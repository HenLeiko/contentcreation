<main class="upload-video">
    <div class="upload-video__player" id="player"></div>

    <form class="upload-video__form" action="upload/send" method="post" enctype="multipart/form-data">
        <input type="hidden" name="video" value="<?=$data?>">
        <label for="title" class="upload-video__label">Придумайте название видео</label>
        <input type="text" placeholder="Пример: спидран по диплому, погнали" name="title" id="title"
            class="upload-video__title">
        <label for="desc" class="upload-video__label">Введите описание Вашего видео, если требуется</label>
        <textarea name="desc" placeholder="Пример: Пишу диплом за ночь до сдачи, что получится?" id="desc" cols="30"
            rows="10" class="upload-video__desc"></textarea>
        <label for="preview" class="upload-video__label">Загрузите значок для видео, иначе будет взят случайный кадр
            из видео</label>
        <label for="preview" class="upload-video__file-label"></label>
        <input type="file" name="preview" id="preview" class="upload-video__file-input">
        <div class="upload-video__buttons-wrapper">
            <a href="" class="upload-video__cancel-button">Отменить</a>
            <input type="submit" value="Загрузить" class="action-button">
        </div>
    </form>
</main>
<script type="text/javascript">
    let name = '<?php echo $data;?>';
    let player = new Playerjs({
        id: "player",
        file: "../resources/videos/" + name
    });
</script>