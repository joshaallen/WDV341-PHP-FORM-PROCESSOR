<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This is an assignment where php will be used to process data form a HTML input form">
  <meta name="keywords" content="PHP, FORM, HTML FORM, FROM PROCESSOR">
  <meta name="author" content="Joshua Allen">
  <title>PHP Form Processor</title>
      <!-- 
          Joshua Allen
          Assignment#5
          October 4th 2021
      -->
</head>
<body>
  <div class="container">
    <main>
        <form action="phpform.php" method="post">
          <legend>Assignment PHP FORM</legend>
          <fieldset>
            <legend>Contact Method</legend>
            <div>
            <label for="cxEmail">Email</label>
            <input type="email" name="cxEmail" id="cxEmail"placeholder="about@example.com" size=32>
          </div>
          </fieldset>
          <fieldset>
            <legend>Current Academic Standing</legend>
            <label for="HighSchool">High School</label>
            <input type="radio" name="academic" id="HighSchool" value="HighSchool">
            <label for="Freshman">Freshman</label>
            <input type="radio" name="academic" id="Freshman" value="Freshman">
            <label for="Sophmore">Sophomore</label>
            <input type="radio" name="academic" id="Sophmore" value="Sophmore">
        </fieldset>
        <fieldset>
          <legend>Course Options</legend>
          <label for="select">Courses</label>
          <select name="select" id="select" size=1>
            <option value="D" selected="selected">Default</option>
            <option value="CIS">Computer Information Systmes</option>
            <option value="GD">Graphic Design</option>
            <option value="WD">Web Development</option>
          </select>
        </fieldset>
        <fieldset>
          <legend>Contact Options</legend>
          <input type="checkbox" name="contact" id="PI" value="PI" checked="checked">
          <label for="PI">Please contact me with program Information</label>
          <input type="checkbox" name="contact" id="PA" value="PA">
          <label for="PA">I would like to contact an program advisor</label>
        </fieldset>
        <fieldset>
          <legend>Comments</legend>
          <textarea name="comments" id="comments" cols="30" rows="10">
          </textarea>
        </fieldset>
        <button type=submit>Submit</button>
      </form>
    </main>
  </div>
</body>
</html>