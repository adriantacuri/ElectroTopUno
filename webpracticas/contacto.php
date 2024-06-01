<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="no-global-styles">
		<?php include './header.html';?>
	</div>
    <!-- contact -->
        <div class="container" id="contact">
            <h1 class="text-center">CONTACT US</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-phone"> Phone</i>
                        <h6>+00000000000000000</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-envelope"> Email</i>
                        <h6>example@gmail.com</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-location-dot"> Address</i>
                        <h6>Karachi Sinfh Pakistan</h6>
                    </div>
                </div>
            </div>
    
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Name">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Email">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="number" class="form-control form-control" placeholder="Phone">
                </div>
                <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control" id=""rows="5" placeholder="Message"></textarea>
            </div>
            <div id="messagebtn" class="text-center"><button>Message</button></div>
            </div>
        </div><br><br><br><br>
        


</body>
</html>