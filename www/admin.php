<?php
	session_start();
	
	if (!isset($_SESSION['rights'])) {
		header ("Location: registration.html");
	} else {
		if($_SESSION['rights'] != 0) {

		} else {

			echo "<div class=\"header\">
			<ul class=\"main-nav\">
				<li>
					<a href=\"#\">На главную</a>
				</li>

				<li>
					<a href=\"#\">Выход</a>
				</li>

			</ul>
		</div>";

		}
	}


?>
