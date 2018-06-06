<!DOCTYPE html>
<head>
<title>How do I insert link in select tag in HTML?</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
Please select city :
<select id="test" name="select-city" onChange="window.open(this.value, '_blank');">
<option value="">Select-City</option>
<?php $a = "https://en.wikipedia.org/wiki/New_Delhi" ?>
 <option value="<?php echo $a ?>">New Delhi</option>
 <option value="https://en.wikipedia.org/wiki/New_York">New York</option>
 <option value="https://en.wikipedia.org/wiki/Bern">Bern</option>
 <option value="https://en.wikipedia.org/wiki/Beijing">Beijing</option>
</select>

<script>
$("#test").click(function() {
    var open = $(this).data("isopen");
    if(open) {
      window.location.href = $(this).val()
    }
    //set isopen to opposite so next time when use clicked select box
    //it wont trigger this event
    $(this).data("isopen", !open);
  });
</script>
</body>
</html>