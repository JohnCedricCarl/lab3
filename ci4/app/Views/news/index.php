<div class="navbar">
    <ul>
        <li><a href="/pages/home#about">ABOUT</a></li>
        <li><a href="/pages/home#contact">CONTACT</a></li>
        <li><a href="/pages/home#resources">RESOURCES</a></li>
        <li><a href="/pages/formvalidation">FORMS</a></li>
        <li><a href="index">NEWS</a></li>
        <li><a href="create">CREATE NEWS</a></li>
        <li><button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?> 