<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CK Car Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body class="p-3 bg-dark text-white">

    <h2 class="text-center">CK Form infomation</h2>

    <div class="container">
        <form action="ckinsertData.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="carname">Car Name</label>
                <input type="text" name="carname" id="" class="form-control">
            </div>            
            <div class="form=group">
                <label for="typecar">Type Car</label>
                <input type="text" name="typecar" id="" class="form-control">

            </div>
            <div class="form-group">
                <label for="Image">Upload Car Image</label>
                <input type="file" name="file" class="form-control ">

            </div>
                                
            <button type="submit" name="submit" class="btn btn-success mt-3 p-1" >Save</button>
            <button type="reset" class="btn btn-danger mt-3 p-1">Delete Info</button>
                
        </form>

        <a href="index.php" class="btn btn-primary mt-3">Back to index</a>


    </div>


</body>
</html>
    


    
    
