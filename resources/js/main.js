function submit(textBox, value = '')
{
	delay = 5;

	if (value != '') // if a value was sent strait to the function
	{
		get = { value: value }; // collect the contents into an array

		$.get("./action.php", get, function(data) // and send it to action.php
		{
			$(".content").html(data); // then put the response into the content span
		});
	}
	else // if not
	{
		if(event.keyCode == 13) // and the return key was pressed
		{
			get = { value: textBox.value }; // collect the contents of the text box into an array

			$.get("./action.php", get, function(data) // and send it to action.php
			{
				$(".content").html(data); // then put the response into the content span
			});

			textBox.value = ''; // clear the text box

			setTimeout(function () { window.scrollTo(0,document.body.scrollHeight) }, delay); // and scroll the screen
		}
	}
}

// send an empty request to load the history when the page loads
//
get = { value: '' };

$.get("./action.php", get, function(data)
{
	$(".content").html(data);
})
