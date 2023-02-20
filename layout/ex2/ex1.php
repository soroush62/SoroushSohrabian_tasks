  <?php
  $title = "Exercise 1";
  include "header.php" ?>
  <style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid)</h1>
    <?php
    echo "Soroush Sohrabian <br>";
    echo "bbcap22_6";

    //opening tag
    echo "hello world";
    echo "this is a nie line";
    echo "i need to use back slash to escape spe char\".
    to close";
    echo "hello world this is 'good' ";
    ?>
    <h1>3.2.Write PHP code to display the following message.</h1>
    <?php
     echo "Hello world! My name is \"Soroush\"";
    ?>
    <h1>3.3.Write the PHP code in to display the current date.</h1>
    <?php echo date("d.m.Y") ?>
   <script>
    document.write("Hello world this is JavaScript");
   </script>
   <noscript>
    Please enable JavaScript to view this content;
   </noscript>
   <input type="button" onclick="hello()" value="Click me">;
    <h3>3.4.$title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h3>
    <?php
    $title1 = "php is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>
    <script>
      //window.alert
      // window.alert("this will trigger an alert box");
      // window.alert(5+10);
      //document write
      document.write("Hello this is interesting");
    </script>
    <h3>3.5.table & variables. </h3>
    <button onclick="add()">click to add</button>
    <hr>
    <p id="place1" style="color:red; backgroundcolor:yellow;"> </p>
    <span id="place2" style="color:red; backgroundcolor:green;"> </span>
    <script>
    document.getElementById("place1").innerHTML="This will go to place1";
    document.getElementById("place2").innerHTML = "This will go to span";
    </script>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table>
    <tr>
    <th> S.N </th><th> Name </th><th> Grade </th>
    </tr>
    <tr>
    <td> 1</td><td> Pekka </td><td> $g1 </td>
    </tr>
    <tr>
    <td> 2</td><td> Johanna </td><td> $g2 </td>
    </tr>
    <tr>
    <td> 3</td><td> John </td><td> $g3 </td>
    </tr>
    </table>
    
    ";
    ?>
     <h2>Changing the background-color</h2>
    <form>
     <input type="color" name="background" onchange="changeColor('background', this.value)">
  </form>
    <h3>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php.</h3>
    <img src="ex1.png" alt="ex1 image" width="1000px>
   

    <?php include "footer.php" ?>