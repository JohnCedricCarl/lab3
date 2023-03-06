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
<h2><?= esc($visitors['title']) ?></h2>
<p><?= esc($visitors['body']) ?></p>