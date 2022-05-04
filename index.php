<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      class Tree{
        
        //properties
        public $tree_id;
        public $com_name;
        public $sci_name;
        public $cay_name;
        public $moh_name;
        public $leaf_traits;
        public $root_traits;
        public $branch_traits;
        public $bud_traits;
        public $bark_trait;
        public $soil_traits;
        public $drainage_traits;
        public $location;
        public $biome;
        public $growing_zone;
        public $health;
      }

      $trees = [];

      for ($i = 0; $i<10;$i++){
        array_push($trees, new Tree());
        $trees[$i]->tree_id = $i;
        $trees[$i]->com_name = "Maple";
      } 
      
echo '<p><br></p>';
//storing the trees array as a string of JSON data
echo $jsonData = json_encode($trees);
$fileName = "data.txt";
//write to the file 
$file = fopen($fileName, "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($file, $jsonData);
fclose($file);

echo '<p>Hello World</p>'; 
    ?> 
  </body>
</html>