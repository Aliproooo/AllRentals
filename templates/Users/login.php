<!DOCTYPE html>
<html>

<head>
    <title>All Rentals</title>
    <link rel="stylesheet" 
          href="style.css">
       
</head>

<body>
<div class="Dashboardmain">
<?php echo $this->Html->image('Rentals.png', ['alt' => 'logo', 'class' => 'logo']); ?>

        <h3>Enter your login credentials</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    
    <?= $this->Form->end() ?>
    <p>Not registered? 
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>" style="text-decoration: none;">Create an account</a>

        </p>
</div>
</body>

</html>

<style>
.logo {
    max-width: 80%; /* Adjust the maximum width as per your requirement */
    height: auto; /* Maintain aspect ratio */
}
  /*style.css*/
body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    
    flex-direction: column;
    margin: 0;
}

.Dashboardmain {
    
    border-radius: 15px;
    background:white;
    padding:10px 20px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    transition: transform 0.2s;
    width: 500px;
    text-align: center;
}

h1 {
    color: #4CAF50;
}

label {
    display: block;
    width: 100%;
    
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}

.required {
    border: 2px solid #ff0000; /* Red border */
    background-color: #ffe0e0; /* Light red background */
    color: #000000; /* Black text */
    padding: 5px 10px; /* Padding for better appearance */
    border-radius: 5px; /* Rounded corners */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    outline: none; /* Remove default outline */
}

.required:focus {
    border-color: #cc0000; /* Darker red border on focus */
}
input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
}

.wrap {
    
    justify-content: center;
    align-items: center;
    
}
.custom-submit {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
    text-decoration: none; /* Ensure previous styles don't apply */
}
  </style>