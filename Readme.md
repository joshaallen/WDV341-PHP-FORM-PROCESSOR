# **Unit-5 PHP Form Processing- Two Part**

## 5-1:HTML Form Processor

Use the _WDV101-DemonstrateInputForm_ example code for this assignment.

Modify the _Example Form_ to add the following fields:

  * Customer Email - consider using the `type=email` value
  * A set of radio buttons for current academic standing with appropriate values:
    * High School
    * Freshman
    * Sophomore
  * A drop down list containing the following options:  Use their acronym for the value attribute
    * Default option
    * Computer Information Systems
    * Graphic Design
    * Web Development
  * Two checkboxes with appropriate value attributes:
    * Please contact me with program information
    * I would like to contact an program advisor
  * A textarea for 'Comments'

Modify the DemonstrateFormHandler.php to display the fields in the following format as stand alone fields on the confirmation page:

Dear _firstName_,

Thank for you for your interest in DMACC.

We have you listed as an _academicStanding_ starting this fall. 

You have declared _selectedMajor_ as your major. 

Based upon your responses we will provide the following information in our confirmation email to you at _emailAddress_.

_checkbox_

_checkbox_

You have shared the following comments which we will review:

_comments_

NOTE: You are welcome and encouraged to format and style the page as you wish.