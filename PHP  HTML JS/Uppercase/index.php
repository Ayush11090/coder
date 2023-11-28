<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve text input from the form
    $inputText = $_POST['inputText'];

    // Convert the input text to lowercase
    $lowercaseText = strtolower($inputText);

    // Capitalize the first character of each word
    $capitalizedText = ucwords($lowercaseText);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uppercase to Lowercase with Capitalized First Letters</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="inputText">Enter Text:</label><br>
        <input type="text" id="inputText" name="inputText"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Display the transformed text if it's available
    if (isset($capitalizedText)) {
        echo "<h2>Transformed Text:</h2>";
        echo "<p>$capitalizedText</p>";
    }
    ?>
</body>
</html>
