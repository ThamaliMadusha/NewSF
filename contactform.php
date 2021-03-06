<!DOCTYPE html>
<html>
<head>
	<title>Contact page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/public.css">
    <style>
    .center{
     float: center;
    }
</style>
</head>

<body>
	<?php include("includes/mdnload.php") ?>
	<?php include("includes/header1.php") ?>

<!-- Material form contact -->
<div class="center">
<div class="col-md-6">
	<br><br>
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Contact us</strong>
    </h5>
<div class="center">


    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575; align-content: : center;">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormName" class="form-control">
                <label for="materialContactFormName">Name</label>
            </div>

            <!-- E-mail -->
            <div class="md-form">
                <input type="email" id="materialContactFormEmail" class="form-control">
                <label for="materialContactFormEmail">E-mail</label>
            </div>

            <!-- Subject -->
            <span>Subject</span>
            <select class="mdb-select">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a bug</option>
                <option value="3">Feature request</option>
            </select>

            <!--Message-->
            <div class="md-form">
                <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                <label for="materialContactFormMessage">Message</label>
            </div>

            <!-- Copy -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialContactFormCopy">&nbsp &nbsp &nbsp
                <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
</div>
<!-- Material form contact -->
</div>
<div class="col-md-6">
	


</body>
</html> 




