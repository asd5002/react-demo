<?php
	header("Access-Control-Allow-Origin: *");

	$conn = mysql_connect("localhost","root","");
	if(!$conn){
		die('不能连接：'.mysql_error());
	}
	echo "[";
	mysql_select_db("test",$conn);
	$result = mysql_query("SELECT * FROM test");
	echo '[';
	while($row = mysql_fetch_array($result)){
		echo "{name:".'"'.$row['name'].'"'.",age:".$row['age']."},";
	}
	echo ']';
//	echo ',[';
//	$path = "../echo";
//	$pathinfo = opendir($path);
//	while(($file=readdir($pathinfo))!==false){
//		echo '{filename:"'.$file.'"},';
//	}
//	closedir($pathinfo);
//	echo "]";
	
	function file2dir($sourcefile, $dir)
	{
	     if( is_dir($sourcefile) ){ // 如果你希望同样移动目录里的文件夹
	         return dir2dir($sourcefile, $dir);
	     }
	     if( ! file_exists($sourcefile)){
	         return false;
	     }
	     $filename = basename($sourcefile);
	     return copy($sourcefile, $dir .'/'. $filename);
	}
	function dir2dir($sourcedir, $dir)
	{
	     if( ( !is_dir($sourcedir) ) || ( !is_dir($dir) )  ){
	          return false;
	     }
	     // 要复制到新目录
	     $newPath = $dir.'/'.basename($sourcedir);
	     if( ! realpath( $newPath)  ){ // 
	          mkdir($newPath);
	     }
	     foreach(glob($sourcedir.'/*') as $filename){
	         var_dump( file2dir($filename, $newPath));
	     }
	}
	echo "]";
	dir2dir("../echo","C:/Users/Administrator/Desktop/react");
?>