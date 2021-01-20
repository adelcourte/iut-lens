<section>
    <h1><?=$datas['title']; ?></h1>
    <p><?=$datas['content']; ?></p>
    <?php foreach($datas['ess'] as $ess) : ?>
        <h2><?=$ess['title']; ?></h2>
        <p><?=$ess['content']; ?></p>
    <?php endforeach; ?>
</section>