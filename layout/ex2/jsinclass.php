<?php
  $title = "JavaScript Events and from validaton";
  include "header.php" ?>
  <h2>A simple button to display data</h2>
  <button onclick="this.innerHTML = Date()">Click to know date</button>
  <h2>Make a button and a place holder as paragragh for date</h2>
  <button onclick="getElementById('p1').innerHTML = Date()">Click to know date</button>
  <p id="p1"></p>

  <h2>Change the background color</h2>
  <form action="">
    <input type="color" id="background" onchange="changeColor()">
  </form>

  <h2>Change the font color</h2>
  <form action="">
    <input type="color" id="fcolor" onchange="changeFcolor()">
  </form>

  <h2>On mouse over & on mouse out</h2>

  <span onmouseover="
                     this.style.color='red';
                     this.style.backgroundColor='yellow';
                     this.style.fontSize='4em';"
      onmouseout="
                    this.style.color='blue';
                     this.style.backgroundColor='white';
                     this.style.fontSize='1.1em';"
                      >Some text</span>








<?php include "footer.php" ?>