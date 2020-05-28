<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="panel" id="adelePage"> 
    <h2>Aniket Rai</h2>
    <p>Phone number: 773-528-7483</p>
    <p>Address: 121 N. LaSalle Street
    <br>Chicago, Illinois 60602 USA</p>
    <p>Email: thebestadelepitt@gmail.com</p>
    <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-b ui-icon-delete ui-btn-icon-left">Close</a>
  </div> 
  <div data-role="panel" id="billyPage"> 
    <h2>Malay Mishra</h2>
    <p>Phone number: 212-330-5200</p>
    <p>Address: 350 Fifth Avenue
    <br>New York, NY 10118-3299 USA</p>
    <p>Email: theoneandonlybilly@gmail.com</p>
    <a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-b ui-icon-delete ui-btn-icon-left">Close</a>
  </div> 
 
  <div data-role="header">
    <h1>Page Header</h1>
  </div>

  <div data-role="main" class="ui-content">
    <h2>My Phonebook</h2>
    <ul data-role="listview" data-autodividers="true" data-inset="true">
      <li><a href="#adelePage">Aniket</a></li>
      <li><a href="#billyPage">Malay</</a></li>
    </ul>
  </div>

  <div data-role="footer">
    <h1>Page Footer</h1>
  </div>

</div> 

</body>
</html>
