<html>
  <head>
    <title>PHP Assignment 2</title>
  </head>
  <body>
    <?php 
      //this allows you to easily add html segments to your generated pages
      echo include 'doc_header.html';
      //this in
      require 'Tree.php';

      $trees = [];

      for ($i = 0; $i<10;$i++){
        array_push($trees, new Tree());
        $trees[$i]->tree_id = $i;
        $trees[$i]->com_name = "Maple";
      } 
      
echo '<p><br></p>';
//storing the trees array as a string of JSON data
//NOte that I am writing it to the browser but do not need to
echo $jsonData = json_encode($trees);
$fileName = "data.txt";
//write to the file.  We could have also used a for append
$file = fopen($fileName, "w") or die("Unable to open file!");
//writing the data to the file
fwrite($file, $jsonData);
fclose($file);//this is important as the server will lose available memory over time and this will only be freed up if the server is restarted.  which is not something you want to do often.

    ?> 
  </body>
</html>