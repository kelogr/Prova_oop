<?php

	ini_set('display_errors', 'on');

	require 'tauler.php';

	$tauler = new Tauler(8, 8, 'escac');

	//$tauler = new Tauler(8, 8, 'aleat');

	$tauler->show();