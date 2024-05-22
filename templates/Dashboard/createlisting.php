<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Step 1</title>
<style>
 body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #007bff;
}

.form-group input[type="text"] {
  width: calc(100% - 22px);
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.btn-listnow {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 8px 16px; /* Adjust padding to make button smaller */
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px; /* Adjust font size */
  float: right; /* Align button to the right */
}

.btn-listnow:hover {
  background-color: #0056b3;
}

.intro-heading {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #007bff;
}

.step-heading {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #333;
}

.intro-description {
  font-size: 16px;
  margin-bottom: 20px;
  color: #555;
}

.container_step1 {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.container_step1_2 {
  max-width: 1200px;
  height: auto;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.container_step1_2 form {
  /* Remove the grid layout */
  /* display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px; */
}

/* Ensure radio buttons stay in a single row and are spread out */
.form-group.radio-group {
  display: flex;
  align-items: center;
  justify-content: space-between; /* Spread out the radio buttons */
}

.form-group.radio-group label {
  margin-right: 10px;
}

.form-group.radio-group input[type="radio"] {
  margin-right: 5px;
}

</style>
</head>
<body>
<div class="container_step1" id="step1">
  <form id="step1">
    <div class="form-group">
      <label for="address">Enter Address:</label>
      <input type="text" id="address" placeholder="Enter your street address here to get started" required>
    </div>
    <button class="btn-listnow" onclick="showStep2()">List Now</button>
  </form>
</div>

<div class="container_step1_2" id="step1_2" style="display: none;">
  <div class="intro-heading">Get Listed Now!</div>
  <div class="step-heading">Step 1 of 6: Address Details of your listing</div>
  <div class="intro-description">We have filled in these details as best we can, how did we do? (Change anything below if needed)</div>
  <form>
    <div class="form-group">
      <label for="unit">Unit Number:</label>
      <input type="text" id="unit">
    </div>
    <div class="form-group">
      <label for="street_number">Street Number:</label>
      <input type="text" id="street_number">
    </div>
    <div class="form-group">
      <label for="street_name">Street Name:</label>
      <input type="text" id="street_name">
    </div>
    <div class="form-group">
      <label for="suburb">Suburb:</label>
      <input type="text" id="suburb">
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="text" id="state">
    </div>
    <div class="form-group">
      <label for="postcode">Postcode:</label>
      <input type="text" id="postcode">
    </div>
    <div class="form-group radio-group">
    <label style="font-size: 16px; color: black;">Property Type:</label>

      <input type="radio" name="propertyType" id="house" value="House">
      <label for="house">House</label>
      <input type="radio" name="propertyType" id="apartment" value="Apartment">
      <label for="apartment">Apartment</label>
      <input type="radio" name="propertyType" id="townhouse" value="Townhouse">
      <label for="townhouse">Townhouse</label>
      <input type="radio" name="propertyType" id="unit" value="Unit">
      <label for="unit">Unit</label>
      <input type="radio" name="propertyType" id="villa" value="Villa">
      <label for="villa">Villa</label>
      <input type="radio" name="propertyType" id="land" value="Land For Sale">
      <label for="land">Land For Sale</label>
    </div>
  
  </form>
  <button class="btn-listnow" onclick="showStep3()">Next</button>
</div>
<script>
  function showStep2() {
    document.getElementById("step1").style.display = "none";
    document.getElementById("step1_2").style.display = "block";
  }

  function showStep3() {
    alert("Step 3 content will go here...");
    // You can continue implementing steps similarly
  }
</script>
</body>
</html>

  
</div>
<script>
  function showStep2() {
    document.getElementById("step1").style.display = "none";
    document.getElementById("step1_2").style.display = "block";
  }

  function showStep3() {
    alert("Step 3 content will go here...");
    // You can continue implementing steps similarly
  }
</script>
</body>
</html>
