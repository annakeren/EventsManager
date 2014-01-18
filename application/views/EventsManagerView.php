<html>
<head>
<script src="/EventsManagement/js/jquery-2.0.0.js" type="text/javascript">
</script>
<title>Events Manager</title>
</head>
<body>
<form id="theForm" method="post">
	<h1>Events Manager</h1>
	<button id="createNewEvent" type="button">create new event</button>
	
		<div id="divCreateNewEventHidden" style="display: block;">
		
			<span>
				<label for="EventName">Event Name</label>
			 	<input type="text" id="EventName"><br>
			</span>
			<span>
				<label for="Place">Place</label>
				<input type="text" id="Place"><br>
			</span>
			<span>
				<label for="Time">Time</label>
				<input type="text" id="Time"><br>
			</span>
			<div id="submitButtonDiv">
				<br><input type="submit"  id="submit" value="submit"><br>
			</div>
		</div>
</form>
</body>

<script type="text/javascript">

$( document ).ready(function() 
{
    console.log( "ready!" );
    $('#divCreateNewEventHidden').hide();

    $('#createNewEvent').on('click', function (e) 
   	{
        e.preventDefault();
        var elem = $(this).next('#divCreateNewEventHidden')
        $('#divCreateNewEventHidden').not(elem).hide('slow');
        elem.toggle('slow');
    });


    
});

var frm = $('#theForm');
frm.submit(function (ev) 
{
    $.ajax({
        type: "POST",
        url: "http://localhost/EventsManagement/index.php/EventsManagerController/post",
        data: "from submittt",
        done: function (data) 
        {
            alert(data);
        }
    });

    ev.preventDefault();
});

</script>
</html>
