<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<article>
    <h2>voeg een item toe aan je to do list</h2>
    <form action="todolist.php" method="post" >
        <label for="todo">Wat moet ik doen:</label>
        <input type="text" id="todo" name="todo" required><br>

        <label for="time">Hoe lang duurt dit in minuten:</label>
        <input type="number" id="time" name="time" required><br>

        <input type="submit" value="Toevoegen">
    </form>
</article>
<article>
    <h2>to do list</h2>
   <?php
   if ($_SERVER["REQUEST_METHOD"] === "POST") {
       $text = (int)$_POST['todo'];
       $tijd = (int)$_POST['time'];
       if (!empty($text) && !empty($tijd)) {
           echo "<p>Taak: $text<br>Tijd: $tijd minuten</p>";

       } else {
           echo "je moet nog iets toevoegen";
           // dit kan je veel beter doen met mysql.
       }
   }
   ?>
</article>
<a href="../index.php">home</a>
</body>
</html>
