<?php 




////测试一下代码看看
//$mem = new Memcache;
//$mem->connect("127.0.0.1", 11211);
//$mem->set('key', 'This is a test!', 0, 60);
//$val = $mem->get('key');
//echo $val;


 header('Content-Type: text/plain'); 

 class Example 
{ 
     /** 
      * This is my DocComment! 
      * 
      * @DocTag: prints Hello World! 
      */ 
     public function myMethod() 
     { 
         echo 'Hello World!'; 
     } 
 } 

 function getDocComment($str, $tag = '') 
 { 
     if (empty($tag)) 
     { 
         return $str; 
     } 

     $matches = array(); 
     preg_match("/".$tag.":(.*)(\\r\\n|\\r|\\n)/U", $str, $matches); 

     if (isset($matches[1])) 
     { 
         return trim($matches[1]); 
     } 

     return ''; 
 } 

$method = new ReflectionMethod('Example', 'myMethod'); 

// will return Hello World! 
echo getDocComment($method->getDocComment(), '@DocTag'); 
// echo getDocComment("Hello World!");
echo ($method);



 ?>