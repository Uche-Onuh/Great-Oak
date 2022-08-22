<?php

require_once 'core/init.php';

if (!isset($_GET['id'])) {
	Redirect::to('addprojects.php');
} else {
	$data = DB::getInstance()->query("SELECT * FROM projects WHERE id = ?", array($_GET['id']));
	$fileName = 'images/'.$data->first()->banner;
	
	if (!unlink($fileName)) {
		Redirect::to('addprojects.php');
	} else {
		try {
			DB::getInstance()->delete('projects', array('id', '=', $_GET['id']));
		} catch (Exception $e) {
			Redirect::to('addprojects.php?errrrr');
		}
		Redirect::to('addprojects.php');
	}
}