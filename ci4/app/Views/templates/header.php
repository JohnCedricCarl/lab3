<!DOCTYPE html>
<html lang="en">
<head>
<title>My Profile</title>
<meta charset="UTF-8">
<link rel = "stylesheet" type = "text/css" href = <?php echo base_url('css/styles.css'); ?>>
</head>
<div class="navbar">
    <ul>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#resources">RESOURCES</a></li>
        <li><a href="formvalidation.php">FORMS</a></li>
        <li><button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          What time is it?</button>
          
          <p id="demo"></p></li>
      </ul>
  </div>