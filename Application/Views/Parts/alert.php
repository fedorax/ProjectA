<?php
function setAlert($message)
{
?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert">
	<span aria-hidden="true">&times;</span>
	<span class="sr-only">Close</span>
	</button>
	<strong>Error!</strong>
	<ul>
	<?php
		foreach($message as $msg)
		{
			echo "<li>".$msg."</li>\n";
		}
	?>
	</ul>
	</div>
<?php
}
?>