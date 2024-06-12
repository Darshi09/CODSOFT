<!-- search.php -->
<?php
// Get the search query
$query = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : '';

// Define the directory containing travel package files
$directory = 'travel-packages/';

// Function to search for a travel package file
function searchPackage($directory, $query) {
    // Scan the directory for files
    $files = scandir($directory);

    // Loop through each file in the directory
    foreach ($files as $file) {
        // Skip '.' and '..'
        if ($file === '.' || $file === '..') continue;

        // Check if the filename contains the query string
        if (strpos(strtolower($file), $query) !== false) {
            // Return the content of the matching file
            return file_get_contents($directory . $file);
        }
    }
    // Return false if no matching file is found
    return false;
}

// Search for the package
$packageContent = searchPackage($directory, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <p>Results for: <strong><?php echo htmlspecialchars($query); ?></strong></p>
    <?php if ($packageContent): ?>
        <div>
            <h2>Travel Package Found:</h2>
            <pre><?php echo htmlspecialchars($packageContent); ?></pre>
        </div>
    <?php else: ?>
        <p>No travel package found for "<?php echo htmlspecialchars($query); ?>".</p>
    <?php endif; ?>
    <a href="search_form.html">Go Back</a>
</body>
</html>
