<?php
 function dealArr($array,$pid=0,$level=0){
      $arr=array();
	  foreach($array as $v){
        if($v['pid']==$pid){
            $v['level']=$level;
			//$v['html']=str_repeat(&nbsp;&nbsp;,$level);
			$arr[]=$v;
			$arr=array_merge($arr,dealArr($array,$v['p_id'],$level+1));
		}
	  }
	  return $arr;
  }

?>