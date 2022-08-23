<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Phone Number Services</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
   <h1><span class="auto-play"></span> </h1>
      Number:<input type="tel" name="name" placeholder="Enter a phone number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br><br>
      <input type="submit" value="Submit" name="ope" id="submit" onclick="show_image()" >
   </form>
   <?php


   if (isset($_POST['ope'])) {

      $x = $_POST['name'];



      function startsWith($x, $startnum)
      {

         if (preg_match('/^[0-9]{9}+$/', $x)) {

            $len = (strlen($startnum));
            return (substr($x, 0, $len) === $startnum);
         }
      }

      // Main function
      if (
         startsWith("$x", "655") || startsWith("$x", "656") || startsWith("$x", "657") || startsWith("$x", "658")
         || startsWith("$x", "659") || startsWith("$x", "69")
      )
         echo $_POST["name"]. "<br>"  . "is an Orange Number";

      elseif (startsWith("$x", "2"))
         echo $_POST["name"].  "<br>" . "is a Camtel Number";

      elseif (
         startsWith("$x", "650") || startsWith("$x", "651") || startsWith("$x", "652") || startsWith("$x", "653") || startsWith("$x", "654")
         || startsWith("$x", "67") || startsWith("$x", "68")
      )
         echo $_POST["name"]. "<br>" . "is a MTN Number";

      elseif (startsWith("$x", "66"))
         echo $_POST["name"] . "<br>" . "is a Nextel Number";

      elseif (empty($x))
         echo "Please Enter a Valid Number";

      else
         echo $_POST["name"] . "<br>"  . "is not a valid Number";
   }


   ?>

   <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

   <script>

      var typed = new Typed()
 

   </script>


</body>

</html>


<!-- <p id="demo"></p>

<script>
function display_image(src, width, height, alt) {
    var a = document.createElement("img");
    a.src = src;
    a.width = width;
    a.height = height;
    a.alt = alt;
    document.body.appendChild(a);
}
display_image('JavaScript.jpg', 
                 276, 
                 110, 
                 'JavaScriptImage'); -->