  <div class="navbar">
    <ul>
      <li><a href="home#about">ABOUT</a></li>
      <li><a href="home#contact">CONTACT</a></li>
      <li><a href="home#resources">RESOURCES</a></li>
      <li><a href="/~jbmolina/lab3/ci4/public/visitors/create">CREATE ENTRY</a></li>
      <li><a href="/~jbmolina/lab3/ci4/public/visitors">VISITORS LIST</a></li>
      <li><button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
        What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>
  <div id="about"class="about">
    <br><br><br><br>
    <h1>I'm <span>Ced</span></h1>
    <p>I look forward to studying with you. I'm not good at anything in particular. I'll work hard to get along with everyone.</p>
    <img src="images/cedced.jpg">

  </div>
  <div id="contact" class="contact">
    <h1>Here are ways the you can contact me:</h1>
    <ul>
        <li><a href="https://facebook.com" target="_blank" class="facebook">facebook</a></li>
        <li><a href="https://twitter.com" target="_blank" class="twitter">twitter</a></li>
        <li><a href="https://instagram.com" target="_blank" class="instagram">instagram</a></li>
    </ul>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <div id="resources"class="resources">
    <ul>
      <h1>Resources:</h1>
      <li><div class="img1"><a href="https://w3schools.com" target="_blank"><img src="images/w3logo.jpg"></a><p>w3schools.com</p></div></li>
      <li><div class="img2"><a href="https://codeacademy.com" target="_blank"><img src="images/codeacademylogo.jpg"></a><p>codeacademy.com</p></div></li>
    </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  </body>
  <body>
  <div class="enter" style = "color: rgb(190, 225, 207);
  font-size: 50px; text-align: center; position: relative; bottom: 200px;"
    <h1 id="welcome"> Hello There,  </h1>  
    </div>
  </body>
  
  <script type = "text/javascript">
    var nickname = prompt("Please enter your name: ");
    if (nickname != null) {
      document.getElementById("welcome").innerText =
      "Hello There, " + nickname + " !";
    }
  </script> 