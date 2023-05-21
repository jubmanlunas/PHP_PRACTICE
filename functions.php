<?php

function isUrl($url){
	$uri = $_SERVER['REQUEST_URI'];
	if($uri == $url){
		return 'bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium';

	}else{
		return 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium';
	}
}


?>