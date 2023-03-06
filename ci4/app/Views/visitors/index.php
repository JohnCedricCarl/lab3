<div class="navbar">
    <ul>
        <li><a href="/~jbmolina/lab3/ci4/public/home#about">ABOUT</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/home#contact">CONTACT</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/home#resources">RESOURCES</a></li>
        <li><a href="visitors/create">CREATE ENTRY</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/visitors">VISITORS LIST</a></li>
        <li><button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<h2><?= esc($title) ?></h2>

<?php if (! empty($visitors) && is_array($visitors)): ?>

    <?php foreach ($visitors as $visitors_item): ?>

        <h3><?= esc($visitors_item['title']) ?></h3>

        <div class="main">
            <?= esc($visitors_item['body']) ?>
        </div>
        <p><a href="news/<?= esc($visitors_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Visitors</h3>

    <p>No one was here ;-;.</p>

<?php endif ?> 