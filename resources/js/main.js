function submit(textBox, value = '')
{
	delay = 5;

	if (value != '')
	{
		get = { value: value };

		$.get("./action.php", get, function(data)
		{
			$(".content").html(data);
		});

		setTimeout(function () { window.scrollTo(0,document.body.scrollHeight) }, delay);
	}
	else
	{
		if(event.keyCode == 13)
		{
			get = { value: textBox.value };

			$.get("./action.php", get, function(data)
			{
				$(".content").html(data);
			});

			textBox.value = '';

			setTimeout(function () { window.scrollTo(0,document.body.scrollHeight) }, delay);
		}
	}
}

get = { value: '' };

$.get("./action.php", get, function(data)
{
	$(".content").html(data);
})
