<?php session_start()?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking</title>

<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script src="semantic/jquery.min.js"> </script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
<link href="semantic/datepicker.css" rel="stylesheet" type="text/css">
<script src="semantic/datepicker.js"></script>
<script>
  var ORDERREF = '<?php echo $_SESSION['ORDERREF']?>';
  function verify() {
     var tclass= document.getElementById("travelclass").value;
     var seat= document.getElementById("seats").value;
    

    if(tclass=="High Class Travel")
    {
      price=seat*20;
      
      document.getElementById('amount').value= price;
       
    }
    else if(tclass=="Middle Class Travel")
    {
      price=seat*15;
      document.getElementById('amount').value= price;
     
    }
    else
    {
      price=seat*10;
      document.getElementById('amount').value= price;
      
    }

  }

  function updateTravelTimes() {
    var date = document.getElementById("traveldate").value;
    var timeSelect = document.getElementById("time_booking");
    var timeOptions = ["09:00", "12:00", "16:00", "18:00", "21:00"];

    timeSelect.innerHTML = "";

    for (var i = 0; i < timeOptions.length; i++) {
      if (date != "") {
        var time = timeOptions[Math.floor(Math.random() * timeOptions.length)];
        timeSelect.options.add(new Option(time, time));
      }
    }
  }

  $(document).ready(function() {
    $(".datepicker-here").datepicker({
      minDate: new Date(),
      maxDate: new Date().setMonth(new Date().getMonth() + 1),
      onSelect: function(date) {
        updateTravelTimes();
      }
    });
  });

</script>
<script src="nav.js"></script>

<style>
body{
background-color:f1f1f1;
}
a{
cursor:pointer;    
}
</style>
</head>
<body>
  
  <!-- Your existing HTML code -->
</body>
</html>