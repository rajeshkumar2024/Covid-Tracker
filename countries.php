<?php 
$json = file_get_contents("https://api.covid19api.com/summary");
$data = json_decode($json);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajesh Kumar's Covid Tracker</title>
    <link rel="icon" type="image/jpg" href="./imgs/covid.jpg"/>
    <?php require_once "bootstrap.php"; ?>
</head>
<body>

    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">        
        <div class="container">         
        <a class="navbar-brand mr-auto" href="#">Covid Tracker</a>
            <button class="navbar-toggler navbar-toggler-right justify-content-end" type="button" data-toggle = "collapse" data-target = "#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="Navbar">
                <ul class="navbar-nav">
                   
                    <li class="nav-items"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Indian States</a></li>
                    <li class="nav-items active"><a class="nav-link" href="./countries.php"><span class="fa fa-info fa-lg"></span> All Counteries</a></li>
                    
                </ul>                
            </div>
        </div>
    </nav>
<div class= "container">
    


    <div class= "table-responsive col col-lg-8 mx-auto">
        <table class='table table-md text-center table-bordered table-hover '>
            
                
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>Total Confirmed</th>
                        <th >Total Recovered</th>
                        <th >TotalDeaths</th>
                        <th >New Recovered</th>
                        <th >NewDeaths</th>
                    </tr>
                </thead>
                
            
            <tbody>
                <?php 
                                   
                    
                        foreach ($data->Countries as $idx =>$Countries){
                            echo "<tr>";
                            echo "<td>$Countries->Country</td>";
                            echo "<td>$Countries->TotalConfirmed</td>";
                            echo "<td>$Countries->TotalRecovered</td>";
                            echo "<td>$Countries->TotalDeaths</td>";
                            echo "<td>$Countries->NewRecovered</td>";
                            echo "<td>$Countries->NewDeaths</td>";
                            echo "</tr>";
                        }
                        
                    
                ?> 
        </tbody>
            

        </table>
    </div>

    </div>    
    
    <footer class="footer bg-primary ">
        <div class="row justify-content-center text-white"> <span>&#169;</span> 2021 Copyright:&nbsp;
            <a href="https://www.linkedin.com/in/rajesh-kumar2024/" class="text-warning"> Rajesh Kumar</a>
        </div>
    </footer>

</body>
</html>

