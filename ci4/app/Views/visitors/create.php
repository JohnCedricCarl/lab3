<div class="navbar">
    <ul>
        <li><a href="/~jbmolina/lab3/ci4/public/home#about">ABOUT</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/home#contact">CONTACT</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/home#resources">RESOURCES</a></li>
        <li><a href="create">CREATE ENTRY</a></li>
        <li><a href="/~jbmolina/lab3/ci4/public/visitors">VISITORS LIST</a></li>
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

    <label for="fname">Name</label>
    <input type="input" name="fname" value="<?= set_value('fname') ?>">
    <br>

    <label for="message">Message</label>
    <textarea name="message" cols="45" rows="4"><?= set_value('message') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create entry">
</form>