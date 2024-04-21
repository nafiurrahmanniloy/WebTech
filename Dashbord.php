<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="../Design/design.css">
</head>
<body>
  <div class="container">
    <h2>FinTech</h2>
    <form method="POST" action="">
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your address">
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" placeholder="Enter your age">
      </div>
      <div class="form-group">
        <label for="zip">Zip:</label>
        <input type="text" id="zip" name="zip" placeholder="Enter your zip code">
      </div>
      <div class="form-group">
        <label>Gender:</label>
        <div class="radio-group">
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label>
          <div id="gender-error" class="error"></div>
        </div>
      </div>
      <div class="form-group">
        <button type="submit">Confirm</button>
      </div>
    </form>
  </div>
  <script src="../controller/dashbordJS.js"></script>
</body>
</html>