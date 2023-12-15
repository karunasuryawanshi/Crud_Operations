<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: #eb87ad;
;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        </style>
</head>
<body>


<div class="content">
        <center>
        <h1>Student Enquiry</h1>

        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name">
</div>
<div>
                    <label>Email</label>
                    <input type="email" name="email">
</div>
<div>
                    <label>Course Name</label>
                    <input type="text" name="course_name">
</div>
<div>
                    <label>comment</label>
                    <input type="text" name="comment">
</div>



<div>
                    <label>Contact</label>
                    <input type="number" name="contact">
</div>
<div>
                    <label>Address</label>
                    <input type="text" name="address">
</div>

<div>
                    <label>Password</label>
                    <input type="text" name="password">
</div>
<div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
</div>

</form>
</div>
    </center>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
    </html>
