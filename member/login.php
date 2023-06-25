<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>CSE INVENTORY MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/styles.css">
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/jquery.dataTables.min.css">

	
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.min.css">

	
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">

	
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">
	<meta charset="UTF-8">
    <title>CSE INVENTORY MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        
        html, body {
            height: 100%;
        }
        
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url(https://wallpapercave.com/wp/wp2939900.jpg);
            background-size: cover;
            background-position: center;
        }
        
        .panel {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 400px;
        }
        
        .panel h4 {
            margin-bottom: 20px;
			background-color:deepskyblue
        }
		
		.header-img {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 300px;
            height: auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .btn-primary {
            background-color: deepskyblue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: deepskyblue;
        }
        
        .link {
            margin-top: 10px;
        }
        
        .link a {
            color: #999;
            text-decoration: none;
        }
        
        .link a:hover {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="background"></div>
	<img class="header-img" src="h1.png" alt="Header Image">
    <div class="login-container">
        <div class="container-fluid">
            <div class="panel">
                <form class="frm_memberlogin">
                    <h4 class="alert bg-primary">Student Login</h4>
                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="number" name="id_number" class="form-control" autofocus="on">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Log in</button>
                        <br>
                        <div class="link">
                            <a href="../">Go to Admin Panel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>



<?php include 'footer.php'; ?> 