<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <h1>Electricity Bill</h1>
        <form method="post" action="#">
            Consumer id:<input type="number" name="id"><br><br>
            Nmae:<input type="text" name="name"><br><br>
            previous reading:<input type="number" name="prev"><br><br>
            presnet reading:<input type="number" name="pres"><br><br>
            <input type="submit" name="submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $prev=$_POST['prev'];
            $pres=$_POST['pres'];
            $units=$pres-$prev;
            echo"----------------------------------------------------";
            echo"<br>Kerala state Electricity board<br>";
            echo"consumer id:".$id."<br>";
            echo"consumer name:".$name."<br>";
            echo"unit consumed:".$units."<br>";
            if($units<=100)
            {
                $amt=$units*3;
            }
            else if($unit>100&&$units<=200)
            {
                $amt=$units*4;
            }
            else if($units>200&&$units<=300)
            {
                $amt=$units*5;

            }
            else
            {
                $amt=$units*6;

            }
            
            echo"<br>Total rs".$amt."<br><br>";
            echo"----------------------------------------------------------";
        }
        ?>
        </body>
        </html>