function submit(textBox, value = '')
{
	if (value != '')
	{
		get = { value: value };

		$.get("./action.php", get, function(data)
		{
			$(".content").html(data);
		})
	}
	else
	{
		if(event.keyCode == 13)
		{
			get = { value: textBox.value };

			console.log(get);
			textBox.value = '';

			$.get("./action.php", get, function(data)
			{
				$(".content").html(data);
			})
		}
	}
}

get = { value: '' };

$.get("./action.php", get, function(data)
{
	$(".content").html(data);
})
