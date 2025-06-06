<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz Result</title>
  <link rel="stylesheet" href="Style.css">
 
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Your Score</h2>
      <p>
        <?php
          if (isset($_GET['score']) && isset($_GET['total'])) {
            $score = htmlspecialchars($_GET['score']);
            $total = htmlspecialchars($_GET['total']);
            echo "You scored $score out of $total";
          } else {
            echo "Score not available.";
          }
        ?>
      </p>
      <button onclick="location.href='PreQuiz.php'">Try Again</button>
      <button onclick="location.href='/Funds.id/acad/academy.html'">Exit</button>
    </div>
  </div>
</body>
</html>
