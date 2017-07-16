<?php


class ImglnxUtils {

	public static function contains($str, array $arr) {
	    foreach($arr as $a) {
	        if (stripos($str,$a) !== false) {
	        	 return true;
	        }
	    }
	    return false;
	}

	public static function humanFileSize($size) {
		if ($size >= 1 << 30) {
			return number_format($size / (1 << 30), 2)." GB";
		}	
		if ($size >= 1 << 20) {
			return number_format($size / (1 << 20), 2)." MB";
		}	
		if ($size >= 1 << 10) {
			return number_format($size / (1 << 10), 2)." KB";
		}
		
		return number_format($size)." bytes";
	}

	public static function getDirectorySize($directory) {
		$size = 0;
	    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file) {
	        $size += $file->getSize();
	    }
	    return $size;
	}

	public static function getFileCount($directory) {
		return count(glob($directory."*.{jpeg,jpg,png,tiff,bmp,ico,gif}", GLOB_BRACE));
	}
}