<?php
print (date('D, d M Y '));
include "scriptclock.html";

if (date('H')<11){
  print("Good morning, peons.");
}elseif(date('H')<18){
  print("Good afternoon, peons.");
}else{
  print("Good evening, peons.");
}

?>