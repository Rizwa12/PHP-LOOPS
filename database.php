<?php
 class DB{
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect("localhost","root","","user_database");

    }
    function UserData()
    {
        $query = "select * from users";
        $result = mysqli_query($this->con,$query); 
        $result1 = mysqli_fetch_all($result);
        //var_dump($result1);

        //echo count($result1);
        
       // for($i=0;$i<13;$i++)
      /* for($i=0;$i<count($result1);$i++)
        {
        echo "<tr>";

        echo "<td>".$result1[$i][0]."</td>";
        echo "<td>".$result1[$i][1]."</td>";
        echo "<td>".$result1[$i][2]."</td>";
        echo "<td>".$result1[$i][3]."</td>";
       // echo $result1[0][2];
        //echo $result1[0][3];
        echo "</tr>";
        }*/
        // $i = 0;
        // while($i<count($result1))
        // {
           
        //     echo "<tr>";

        //     echo "<td>".$result1[$i][0]."</td>";
        //     echo "<td>".$result1[$i][1]."</td>";
        //     echo "<td>".$result1[$i][2]."</td>";
        //     echo "<td>".$result1[$i][3]."</td>";
        //    // echo $result1[0][2];
        //     //echo $result1[0][3];
        //     echo "</tr>";
        //     $i=$i+1;

        // }
        foreach($result1 as $items)
        {
            echo "<tr>";

               echo "<td>".$items[0]."</td>";
                echo "<td>".$items[1]."</td>";
                 echo "<td>".$items[2]."</td>";
                echo "<td>".$items[3]."</td>";
            //    // echo $result1[0][2];
            //     //echo $result1[0][3];
                echo "</tr>";
        }

    }

    
 }
 $database = new DB;
?>