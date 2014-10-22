<?php
   
   //Use recursion to change multiple files name
   
  function readFiles1($dirName){
  
    $handle=opendir($dirName); 
    
    while($fileName=readdir($handle)){
  
       if($fileName!="."&&$fileName!=".."){
	        $curFileN=$dirName."/".$fileName;
			
			// use recursion.
			 if (is_dir($curFileN)){
			   readFiles1($curFileN);
			 }else{
			    
				$path=pathinfo($curFileN); 
				$oldName=$path['dirname']."/".$path['filename'].".".$path['extension'];
				$newName=$path['dirname']."/".$path['filename'].".txt";
				rename($oldName,$newName);
										
			 }
					 
	}
    }
   
    
    closedir($handle);
 }
 readFiles1($dirName="xsphp");
 
?>
