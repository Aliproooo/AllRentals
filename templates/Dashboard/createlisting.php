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

.form-group input[type="text"],
.form-group input[type="date"],
.form-group input[type="number"] {
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
  padding: 8px 16px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  margin-left: 5px; /* Adjust margin */
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
  max-width: 800px;
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
.container_step6 {
  max-width: 900px;
  height: auto;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
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
  gap: 10px;
}

.form-group.radio-group label {
  margin-right: 5px;
}

.form-group.radio-group input[type="radio"] {
  margin-right: 5px;
}

.button-group {
  display: flex;
  justify-content: space-between;
}

.form-group.checkbox-group {
  display: flex;
  flex-wrap:wrap;
  gap: 20px;
}

.form-group.checkbox-group label {
  margin-right: 8px;
}

.form-group.checkbox-group input[type="radio"] {
  margin-right: 8px;
}

.container {
    max-width: 700px;
    margin: 0 auto;
    
}

.step-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.step-description {
    margin-bottom: 30px;
}

.image-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 40px;
}

.uploaded-images {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
}

.uploaded-files-title {
    margin-top: 0;
}

.uploaded-files-description {
    margin-bottom: 10px;
}

.image-upload {
    border: 2px dashed #ccc;
    background-color: #f9f9f9;
    text-align: center;
    padding: 40px;
    border-radius: 10px;
    width: 100%;
}

.upload-title {
    font-size: 18px;
    margin-bottom: 20px;
}

#file-input {
    display: none;
}

.file-input-field,
.link-input {
    width: calc(100% - 40px);
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 20px;
}

.image-enhancement {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}

.enhancement-image {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.enhancement-details {
    flex-grow: 1;
}

.enhancement-title {
    margin-top: 0;
    margin-bottom: 10px;
}

.enhancement-checkbox {
    font-size: 16px;
    font-weight:700;
}

.checkmark {
    position: absolute;
    top: 2px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border: 1px solid #ccc;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.enhancement-checkbox input:checked ~ .checkmark:after {
    display: block;
}

.button-group {
    text-align: center;
}

.btn-back,
.btn-next {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    margin-right: 10px;
}

.btn-back {
    background-color: #ccc;
}

.btn-next {
    background-color: #4CAF50;
    color: #fff;
}

#inspection-start-time,
#inspection-end-time {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Button styles */
#add-time-btn {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin-top: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

#add-time-btn:hover {
  background-color: #45a049;
}



/* Success message styles */
.success-message {
  display: none;
  color: green;
  font-weight: bold;
  margin-top: 10px;
}


</style>


</head>
<body>
<div class="container_step1" id="step1">
  <form id="step1_form">
    <div class="form-group">
      <h3 style="color:#ff00ff">Sit back and let our AI technology pave the way to your ideal location.</h3>
      <label for="address">Enter Address:</label>
      <input type="text" id="address" placeholder="Enter your street address here to get started" required>
    </div>
    <button type="button" class="btn-listnow" onclick="showStep2()">List Now</button>
  </form>
</div>

<div class="container_step1_2" id="step1_2">
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
  <div class="button-group">
    <button type="button" class="btn-listnow" onclick="showStep1()">GO BACK (CHANGES SAVED)</button>
    <button type="button" class="btn-listnow" onclick="showStep3()">Looks Good! (next step)</button>
  </div>
</div>

<div class="container_step1_2" id="step3">
  <div class="intro-heading">Get Listed Now!</div>
  <div class="step-heading">Step 2 of 6: Additional Details</div>
  <div class="intro-description">Please provide additional details about your property.</div>
  <form>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" id="price" required>
    </div>
    <div class="form-group">
      <label for="price_view">Price View (optional):</label>
      <input type="text" id="price_view">
    </div>
    <div class="form-group">
      <label for="available_from">Available From*:</label>
      <input type="date" id="available_from" required>
    </div>
    <div class="form-group">
      <label for="bond_amount">Bond Amount*:</label>
      <input type="number" id="bond_amount" required>
    </div>
    <div class="form-group radio-group">
      <input type="radio" name="listingType" id="rental" value="Rental" required>
      <label for="rental">This is a Rental</label>
      <input type="radio" name="listingType" id="sale" value="Sale" required>
      <label for="sale">This is a Sale</label>
    </div>
  </form>
  <div class="button-group">
    <button type="button" class="btn-listnow" onclick="showStep2()">GO BACK (CHANGES SAVED)</button>
    <button type="button" class="btn-listnow" onclick="showStep4()">Looks Good! (next step)</button>
  </div>
</div>

<div class="container_step1_2" id="step4">
  <div class="intro-heading">Get Listed Now!</div>
  <div class="step-heading">Step 3 of 6: Details</div>
  <div class="intro-description">The nitty gritty good stuff about the property goes in here.</div>
  <form>
    <div class="form-group">
      <label for="Bedrooms">Bedrooms*:</label>
      <input type="number" id="Bedrooms" required>
    </div>
    <div class="form-group">
      <label for="Bathrooms">Bathrooms*:</label>
      <input type="number" id="Bathrooms" required>
    </div>
    <div class="form-group">
      <label for="Car Spaces">Car Spaces:</label>
      <input type="number" id="Car_Spaces">
    </div>
    <div class="form-group">
      <label for="Internal Area (sqm)">Internal Area (sqm):</label>
      <input type="number" id="Internal_Area">
    </div>
    <div class="form-group">
      <label for="Land Area (sqm)">Land Area (sqm):</label>
      <input type="number" id="Land_Area">
    </div>
    <div class="form-group checkbox-group">
      <input type="checkbox" name="otherType" id="furnished" value="Fully Furnished">
      <label for="furnished">Fully Furnished</label>
      <input type="checkbox" name="otherType" id="pets" value="Pets Approved">
      <label for="pets">Pets Approved</label>
    </div>
  </form>
  <div class="button-group">
    <button type="button" class="btn-listnow" onclick="showStep3()">GO BACK (CHANGES SAVED)</button>
    <button type="button" class="btn-listnow" onclick="showStep5()">Looks Good! (next step)</button>
  </div>
</div>

<div class="container_step1_2" id="step5">
  <div class="intro-heading">Get Listed Now!</div>
  <div class="step-heading">Step 4 of 6: The Advertising</div>
  <div class="intro-description">Fill out the ad headline and wording below. Remember: we are not allowed to put phone numbers, emails, websites, names in the ad wording. We've written an original ad for you below to get started, you can use it or write your own.</div>
  <form>
    <div class="form-group">
      <label for="headline">Headline*</label>
      <input type="text" id="headline" name="headline" required>
    </div>
    <div class="form-group">
      <label for="adWording">Ad Wording*</label>
      <textarea id="adWording" name="adWording" rows="7" style="width: 100%;" required></textarea>
    </div>
    <div class="form-group checkbox-group">
      <label>Features</label>
      <div>
        <input type="checkbox" id="airConditioning" name="features" value="Air Conditioning">
        <label for="airConditioning">Air Conditioning</label>
      </div>
      <div>
        <input type="checkbox" id="alarmSystem" name="features" value="Alarm System">
        <label for="alarmSystem">Alarm System</label>
      </div>
      <div>
        <input type="checkbox" id="broadband" name="features" value="Broadband">
        <label for="broadband">Broadband</label>
      </div>
      <div>
        <input type="checkbox" id="spa" name="features" value="Spa">
        <label for="spa">Spa</label>
      </div>
      <div>
        <input type="checkbox" id="pool" name="features" value="Pool">
        <label for="pool">Pool</label>
      </div>
      <div>
        <input type="checkbox" id="tennisCourt" name="features" value="Tennis Court">
        <label for="tennisCourt">Tennis Court</label>
      </div>
      <div>
        <input type="checkbox" id="intercom" name="features" value="Intercom">
        <label for="intercom">Intercom</label>
      </div>
      <div>
        <input type="checkbox" id="fullyFenced" name="features" value="Fully Fenced">
        <label for="fullyFenced">Fully Fenced</label>
      </div>
      <div>
        <input type="checkbox" id="fireplace" name="features" value="Fireplace">
        <label for="fireplace">Fireplace</label>
      </div>
      <div>
        <input type="checkbox" id="gym" name="features" value="Gym">
        <label for="gym">Gym</label>
      </div>
      <div>
        <input type="checkbox" id="shed" name="features" value="Shed">
        <label for="shed">Shed</label>
      </div>
      <div>
        <input type="checkbox" id="study" name="features" value="Study">
        <label for="study">Study</label>
      </div>
    </div>
  </form>
  <div class="button-group">
    <button type="button" class="btn-listnow" onclick="showStep4()">GO BACK (CHANGES SAVED)</button>
    <button type="button" class="btn-listnow" onclick="showStep6()">Looks Good! (next step)</button>
  </div>
</div>

<div class="container_step6" id="step6">
<div class="container">
    <div class="step">
        <h2 class="step-title">Step 5 of 6: Photos and Files</h2>
        <p class="step-description">Upload photos and files for your listing.</p>
        
        <div class="image-section">
            <div class="uploaded-images">
                <h3 class="uploaded-files-title">Uploaded Images</h3>
                <p class="uploaded-files-description">Drag and rearrange to set the order.</p>
                <!-- Thumbnails of uploaded files will be displayed here -->
            </div>
            <div class="image-upload">
                <h3 class="upload-title">Drag & Drop Images Here</h3>
                <input type="file" id="file-input" multiple>
            </div>
        </div>

        <div class="additional-options">
            <div class="file-input">
                <label class="file-label">Floor Plan (gif format)</label>
                <input type="file" class="file-input-field" name="floorplan">
            </div>
            <div class="external-links">
                <label class="link-label">Link to Virtual Tour</label>
                <input type="url" class="link-input" placeholder="https://" name="externalLink">
                <label class="link-label">Link to Video</label>
                <input type="url" class="link-input" placeholder="https://" name="videoLink">
            </div>
        </div>
        <img class="enhancement-image" src="../webroot/img/before.jpg" alt="Image Enhancement">
        <div class="image-enhancement">
           
            <div class="enhancement-details">
                <h3 class="enhancement-title">Professional Image Enhancement</h3>
                <p class="enhancement-description">Enhance your images for just $10 each.</p>
                <label class="enhancement-checkbox">Yes, enhance my photos
                    <input type="checkbox" name="enhancement" value="1">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>

        <div class="button-group">
            <button type="button" class="btn-back" onclick="showStep5()">GO BACK (CHANGES SAVED)</button>
            <button type="button" class="btn-next" onclick="showStep7()">Looks Good! (next step)</button>
        </div>
    </div>
</div>
</div>

</div>


<div class="container_step1" id="step7">
  <form>
    <label for="inspection-start-time">Inspection Start Time:</label>
    <input type="date" id="inspection-start-time" name="inspection-start-time">
    <label for="inspection-end-time">Inspection End Time:</label>
    <input type="time" id="inspection-end-time" name="inspection-end-time">
    <button type="button" id="add-time-btn" onclick="addTime()">ADD THIS TIME</button>
  </form>
  <div id="success-message" class="success-message"></div>
  <div class="button-group">
    <button type="button" class="btn-back" onclick="showStep6()">GO BACK (CHANGES SAVED)</button>
    <button type="button" class="btn-next" onclick="confirmed()">Save my add</button>
  </div>
</div>

<script>
  function hideAllSteps() {
    const steps = document.querySelectorAll('.container_step1, .container_step1_2, .container_step6');
    steps.forEach(step => step.style.display = 'none');
  }

  function showStep1() {
    hideAllSteps();
    document.getElementById("step1").style.display = "block";
  }

  function showStep2() {
    hideAllSteps();
    document.getElementById("step1_2").style.display = "block";
  }

  function showStep3() {
    hideAllSteps();
    document.getElementById("step3").style.display = "block";
  }

  function showStep4() {
    hideAllSteps();
    document.getElementById("step4").style.display = "block";
  }

  function showStep5() {
    hideAllSteps();
    document.getElementById("step5").style.display = "block";
  }

  function showStep6() {
    hideAllSteps();
    document.getElementById("step6").style.display = "block";
  }

  function showStep7() {
    hideAllSteps();
    document.getElementById("step7").style.display = "block";
  }
  function confirmed() {
    // Function to confirm the listing and submit the form
    alert('Listing confirmed!');
  }

  // Initialize by showing the first step
  showStep1();



  function addTime() {

  
  var successMessage = document.getElementById("success-message");
  successMessage.innerText = "Time has been added!";
  successMessage.style.display = "block";
}

</script>
</body>
</html>