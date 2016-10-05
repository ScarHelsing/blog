<?php require('header.php'); ?>

<div class="container">
    <div class="content">
        <h1>Entries in my blog</h1>
        <?php foreach($records as $row): ?>
            <h3><a href="?act=view-entry&id=<?= $row['id'] ?>"><?= $row['header'] ?></a></h3>
            <p><?= $row['content'] ?></p>
            <div class="comments">
                <span><?= $row['date'] ?></span>
                <a href="?act=view-entry&id=<?= $row['id'] ?>">Comment</a>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php require('footer.php'); ?>

