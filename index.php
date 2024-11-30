<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
  <link rel="stylesheet" href="style.css" />
  <title>API Fetch</title>
</head>

<body>
  <main>
    <?php
    // Include the PHP file that fetches the data
    include 'fetch.php';
    ?>

    <!-- .overflow-auto enables automatic scrollbars to an element if its content extends beyond its limits. -->
    <div class="overflow-auto">

      <!-- .striped enable striped rows -->
      <table class="striped">
        <tr>
          <th>Year</th>
          <th>Semester</th>
          <th>The Programs</th>
          <th>Nationality</th>
          <th>Colleges</th>
          <th>Number of Students</th>
        </tr>
        <?php
        // Check if the 'results' key exists
        if (isset($results['results'])) {
          foreach ($results['results'] as $result) {
            echo "<tr class=\"row\">";
            echo "<td>" . htmlspecialchars($result['year']) . "</td>";
            echo "<td>" . htmlspecialchars($result['semester']) . "</td>";
            echo "<td>" . htmlspecialchars($result['the_programs']) . "</td>";
            echo "<td>" . htmlspecialchars($result['nationality']) . "</td>";
            echo "<td>" . htmlspecialchars($result['colleges']) . "</td>";
            echo "<td>" . htmlspecialchars($result['number_of_students']) . "</td>";
            echo "</tr>";
          }
        }
        ?>
      </table>
    </div>
  </main>
</body>

</html>