<?php


// Fill up array with names
$a[]="Star Wars: Episode 1"; $a[]="Star Wars: Episode I"; $a[]= "Star Wars: Episode II";
$a[]="Star Wars: Episode 2"; $a[]="Star Wars: Episode III"; $a[]= "Star Wars: Episode 3";
$a[]="Star Wars: Episode IV"; $a[]="Star Wars: Episode 4"; $a[]="Star Wars: Episode V";
$a[]="Star Wars: Episode 5"; $a[]="Star Wars: Episode VI"; $a[]="Star Wars: Episode 6";
$a[]="Star Wars: Episode VII"; $a[]="Star Wars: Episode 7"; $a[]="Harry Potter and the Philosopher's Stone";
$a[]="Harry Potter and the Chamber of Secrets"; $a[]="Harry Potter and the Prisoner of Azkaban"; $a[]="Harry Potter and the Goblet of Fire"; 
$a[]="Harry Potter and the Order of the Phoenix"; $a[]="Harry Potter and the Half-Blood Prince"; 


//get the q parameter from URL
$q = $_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint.", ".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="No movies/book match";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>