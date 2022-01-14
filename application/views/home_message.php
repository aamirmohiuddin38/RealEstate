<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Real Estate Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style='background-color: #42f5c2;'>
<div class="container-fluid">
    <a class="navbar-brand" href="#">Real Estate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
    </div>
</div>
</nav>


    <div class="container">
    <h1>Welcome to Real Estate project</h1>
    <a href="#"> checkmyproperty.com</a>
    <div class='row'>
        <div class='col-6'>
        <?php 
        echo "<table class='table table-striped'>";
            echo "<tr>
            <th>Name</th>
            <th>Course</th>
            <th>Age</th>
            </tr>";
            foreach($tableData as $name => $v1){
                echo "<tr>
                <td> $name </td>";
                foreach($v1 as $v2){
                    echo"<td> $v2</td>";
                }
                echo "</tr>";
            }
        echo"</table>";

        // echo $message;
        // echo "<hr>";
        // echo '<pre>';
        // var_dump($message);
        // echo '</pre>';
    ?>
        </div>
    </div>
    <a class='btn btn-success' href = '#'>Contact</a>
    </div>
</body>
</html>