<html>

<body>
    <h1>Word Search</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Search:
        <input type="text" name="search" rows="10" cols="30" placeholder="Enter a word here." />
        <input type="submit">
    </form>
</body>

</html>
<?php

//Uncomment the following to test

// 01 ############################## with API ###################################################

// $url = 'https://random-word-api.herokuapp.com/all';       //Uncomment this to test
// $response = file_get_contents($url);                      //Uncomment this to test
// $words = json_decode($response, true);                    //Uncomment this to test

// 02 ################################# coded arrays ############################################

$words = ["I", "TWO", "FORTY", "THREE", 'JEN', "TWO", "tWo", "Two"];   //Uncomment this to test

// ##############################################################################################

$limitWords = array_slice($words, 0, 100);
$count = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target = $_POST['search'];

    $indices = array_keys(array_filter($limitWords, function ($limitWord) use ($target) {
        return $limitWord === $target;
    }));

    echo "<strong>Target:</strong> " . (!empty($target) ? $target : "Target not found");
    echo "<br><strong>Output:</strong> ";

    if (!empty($indices)) {
        $formattedIndices = implode(" and ", array_map(function ($index) {
            return "INDEX " . $index;
        }, $indices));
        echo $formattedIndices . "<br><br>";
    } else {
        echo "Not found.<br><br>";
    }
}

echo "<strong>List of searchable words:</strong><br><br>";
foreach ($limitWords as $word) {
    echo $count++ . " => <strong>" . $word . "</strong>, &nbsp;";
}
