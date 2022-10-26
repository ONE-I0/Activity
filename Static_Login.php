<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Static Login</title>
</head>
<body>
    <form action="" method="post">
    <div class="container bg-white" >
            <div class="row">
                <div class="col-lg-6 py-lg-5" style="float:none;margin:auto;margin-top: 10rem;">
                    <div class="card text-center bg-light t-1 shadow p-3 mb-5 bg-white rounded">
                        <i class="fa-regular fa-user fa-5x"></i>
                        <div align="center" style="padding-left: 4px;" class="py-">
                            <select name="drpCars" id="" style="width: 37.5%;">
                                <option value="" id="admin">Admin</option>
                                <option value="" id="content">Content Manager</option>
                                <option value="" id="system">System User</option>
                            </select>
                        </div><br>
                        <div align="center">
                            <label for="txtusername"></label>
                            <input type="text" name="txtusername" id="txtusername" placeholder="User Name">
                            <br>
                            <label for="txtpassword"></label>
                            <input type="password" name="txtpassword" id="txtpassword" placeholder="Password">
                            <br>
                            <button type="submit" name="btnProcess">Process</button>
                        </div>
                        
                    </div>     
                </div>
            </div>
        </div>    
    </form>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>