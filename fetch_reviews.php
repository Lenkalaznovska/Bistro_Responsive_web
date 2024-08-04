<?php
include("conn.php");

// Load existing reviews from the database
$sql = "SELECT * FROM reviews ORDER BY created_at DESC";
$reviews = fetchAll($sql, $conn);

// Check if there are any reviews
if ($reviews) {
    // Iterate through each review and display it
    foreach ($reviews as $row) {
        echo "<div class='review-item'>";
        echo "<strong>" . htmlspecialchars($row['name']) . ":</strong>";
        echo "<p>" . htmlspecialchars($row['review']) . "</p>";
        echo "</div>";
    }
} else {
    // Display a message if no reviews are available
    echo "<p>Zatím nejsou žádné recenze k dispozici.</p>";
}
?>
