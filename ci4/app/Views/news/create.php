<div class="navbar">
    <ul>
        <li><a href="/~jbmolina/lab3/ci4/public/home#about">ABOUT</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/home#contact">CONTACT</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/home#resources">RESOURCES</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/news">NEWS</a></li>
        <li><a href="news/create">CREATE NEWS</a></li>
        <li><button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create visitors entry">
</form>