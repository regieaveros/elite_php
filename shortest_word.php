<html>

<body>
    <h1>Shortest Word</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>Message:</p>
        <textarea name="msg" rows="10" cols="30" placeholder="Enter a message here."></textarea>
        <div style="margin-top: 1rem;"><input type="submit"></div>
    </form>
    <h4>Output:</h4>

</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['msg'])) {
        $message = $_POST['msg'];
        $shortest = findShortestWord($message);
        echo "Message: <strong>" . $message . "</strong><br>";
        echo "Because the shortest word is: <strong>" . $shortest . "</strong>";
    } else {
        echo "Please fill up the message.";
    }
}

function findShortestWord($value)
{
    $words = explode(" ", $value);
    $shortestWord = null;
    $shortestLength = PHP_INT_MAX;

    foreach ($words as $word) {
        $length = strlen($word);
        if ($length < $shortestLength) {
            $shortestLength = $length;
            $shortestWord = $word;
        }
    }

    return $shortestWord;
}
?>