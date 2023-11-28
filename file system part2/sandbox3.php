<?php
//file system - part 2

$file = 'quote.txt';

//opening a file for reading

$handle = fopen($file, 'a+'); //'r' read only, 'r+' read+write, 'a+' append

//Read the file

//echo fread($handle, filesize($file));
//echo fread($handle, 11);

//read a single line(it remembers where it left off)
echo fgets($handle);
echo fgets($handle);

//read a single character
echo fgets($handle);

//writing to file
fwrite($handle, "\nEverything popular is wrong");

//closing file
fclose($handle);

//deleting file
unlink($file);
