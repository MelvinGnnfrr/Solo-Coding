<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roblox Leaderboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Blank Space for Logo -->
    <div class="container">
        
    </div>

    <!-- Leaderboard Section -->
    <div id="leaderboard">
        <h2>Leaderboard</h2>
        <div id="leaderboard-items">
            <?php
            // Path to your JSON file with leaderboard data
            $jsonFile = 'leaderboard.json';

            // Fetch and decode the JSON data
            if (file_exists($jsonFile)) {
                $data = json_decode(file_get_contents($jsonFile), true);
                
                if ($data) {
                    // Loop through each username and score to create leaderboard items
                    foreach ($data as $username => $score) {
                        echo "<div class='leaderboard-item'>";
                        echo "<span>" . htmlspecialchars($username) . "</span><span>" . htmlspecialchars($score) . "</span>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Error decoding leaderboard data.</p>";
                }
            } else {
                echo "<p>Leaderboard data not found.</p>";
            }
            ?>
        </div>
    </div>
    
</body>
</html>
