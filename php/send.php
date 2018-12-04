<?php

if (mail("anton23.pochta@gmail.com", "Test Ajax", $_REQUEST["fio"] . " " . $_REQUEST["phone"]))
  echo "1";
else  
  echo "0";

