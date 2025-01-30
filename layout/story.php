<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Share Your Story - Fur-N-Feather</title>
  <link rel="stylesheet" href="../layout/css/story.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Chewy&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="header-overlay">
      <h1>Share Your Story</h1>
      <p>We’d love to hear about your journey with your furry or feathery friend!</p>
    </div>
  </header>

  <!-- Story Submission Form -->
  <section class="story-form">
    <h2>Tell Us Your Story</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="pet-name">Your Pet's Name:</label>
        <input type="text" id="pet-name" name="pet-name" required>
      </div>
      <div class="form-group">
        <label for="story">Your Story:</label>
        <textarea id="story" name="story" rows="6" required></textarea>
      </div>
      <div class="form-group">
        <label for="photo">Upload a Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" required>
      </div>
      <button type="submit" class="btn">Submit Your Story</button>
    </form>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <p>Fur-N-Feather: Where Every Pet Finds a Home 🐾</p>
    <div class="footer-links">
      <a href="#adopt">Adopt</a>
      <a href="#donate">Donate</a>
      <a href="#volunteer">Volunteer</a>
      <a href="#contact">Contact</a>
    </div>
  </footer>
</body>
</html>