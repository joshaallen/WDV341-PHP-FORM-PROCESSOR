<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This assignment is a webpage that will display confirmation info for a user who has just submitted from the form">
  <meta name="keywords" content="Confirmation Page, PHP, WebForms">
  <meta name="author" content="Joshua Allen">
  <title>PHP Form Confirmation Page</title>
                                  <!-- 
                                    Joshua Allen
                                    Assignment 5
                                    October 4 2021
                                  -->
</head>
<body>
  <p style="height:600px;width:600px;margin:0 auto; background-color:lightblue">
    Dear <?php echo $_POST['cxFirstName'] ?>,
    <br>
    Thank you for your interest DMACC.
    <br>
    We have you listed as an <?php echo $_POST['academic'] ?> starting this fall.
    <br>
    You have declared <?php echo $_POST['select'] ?> as your major.
    <br>
    Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST['cxEmail'] ?>.
    <br>
    <?php echo $_POST['contact'] ?>
    <br>
    You have shared the following comments which we will review: 
    <?php echo $_POST['comments'] ?>
  </p>
</body>
</html>