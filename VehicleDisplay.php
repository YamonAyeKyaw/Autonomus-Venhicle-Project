 <?php 
 include('header.php');
 include('connect.php');
                if (isset($_POST['btnSearch']))
            {
                    $VehicleName=$_POST['txtSearch'];
                    $query="SELECT * FROM Vehicle 
                            WHERE VehicleName LIKE '%$VehicleName%'";
                    $result=mysqli_query($connection,$query);
                    $count=mysqli_num_rows($result);
                    if ($count>0)
                    {
                        echo "<table class='car' align='center' width='65%'>";
                        for ($i=0; $i < $count; $i+=1)
                        { 
                    $query1="SELECT * FROM Vehicle 
                            WHERE VehicleName LIKE '%$VehicleName%'
                            LIMIT $i,1";
                            $result1=mysqli_query($connection,$query1);
                            $count1=mysqli_num_rows($result1);
                            echo "<tr>";
                            for ($j=0; $j < $count1; $j++)
                            { 
                                $arr=mysqli_fetch_array($result1);
                                echo "<td>";
                                echo "<a href='DetailVehicle.php?PID=".$arr['VehicleID']."'>";
                                echo "<img src='".$arr['VehicleImage']."'width='300px'> </a>";
                                echo "<br>";
                                echo "<br>";
                                echo "<b>".$arr['VehicleName']."</b>";
                                echo "<br>";
                                echo $arr['UnitPrice']." <b>Dollars</b>";
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                    else
                {
                    echo "<h1><b><u>Search Record Not Found</u></b></h1>";
                }
            }
                    else
                {   $query="SELECT * FROM Vehicle 
                    ORDER BY VehicleName";
                    $result=mysqli_query($connection,$query);
                    $count=mysqli_num_rows($result);

                    if ($count>0)
                    {
                        echo "<table class='car' align='center' width='70%'>";
                        for ($i=0; $i < $count; $i+=1)
                        { 
                    $query1="SELECT * FROM Vehicle 
                            ORDER BY VehicleName
                            LIMIT $i,1";
                            $result1=mysqli_query($connection,$query1);
                            $count1=mysqli_num_rows($result1);
                            echo "<tr>";
                            for ($j=0; $j < $count1; $j++)
                            { 
                                $arr=mysqli_fetch_array($result1);
                                echo "<td>";
                                echo "<a href='DetailVehicle.php?PID=".$arr['VehicleID']."'>";
                                echo "<img src='".$arr['VehicleImage']."'width='300px' '> </a>";
                                echo "<br>";
                                echo "<b>".$arr['VehicleName']."</b>";
                                echo "<br>";
                                echo $arr['UnitPrice']." <b>Dollars</b>";
                                echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        ?>

<?php 
include('footer.php');
 ?>