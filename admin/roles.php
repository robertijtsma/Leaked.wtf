<?php

			if ($_SESSION["username"] == 'baronet') {
			$_SESSION["owner"] = true;
			$_SESSION["admin"] = true;
			$_SESSION["mod"] = true;
			}
			