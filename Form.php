<!DOCTYPE html> 
<html>
    <head>
        <body>
            <?php
                $fullname=$email=$gender=$comment=$number=$age="";
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $fullname=test_input($_POST["name"]);
                    $email=test_input($_POST["email"]);
                    $gender=test_input($_POST["gender"]);
                    $comment=test_input($_POST["comment"]);
                    $number=test_input($_POST["number"]);
                    $age=test_input($_POST["age"]);
                }
                function test_input($data)
                {
                    $data=trim($data);
                    $data=stripslashes($data);
                    $data=htmlspecialchars($data);
                    return $data;
                }
                ?>
                <h2>form validation</h2>
                <form method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                name:<input type="text"name="name">
                <br><br>
                E-mail:<input type="text" name="email">
                <br><br>
                gender:<input type="radio"name="gender" value="female">Female
                <input type="radio"name="gender"value="male">Male
                <br><br>
                comment:<input type="text"name="comment">
                <br><br>
                number:<input type="text"name="number">
                <br><br>
                age:<input type="text"name="age">
                <br><br>
                <input type="submit"name="clickhere"value="clickhere">
            </form>
            <?php
               echo "<h2>your input:</h2>";
               echo $fullname;
               echo "<br>";
               echo $email;
               echo "<br>";
               echo $age;
               echo "<br>";
               echo $comment;
               echo "<br>";
               echo $gender;
               echo "<br>";
               echo $number;
               echo "<br>";
               ?>
        </body>
    </head>
</html>