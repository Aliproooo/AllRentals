<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
  
<?php echo $this->Html->charset(); ?>
    <title><?php echo $this->fetch('title'); ?></title>
    <?php
        echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1.0');
        echo $this->Html->css('style');
        echo $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js');
    ?>
    <style>
        /* Loader styles */
        #loader {
            position: fixed;
            left: 50%;
            top: 50%;
            width: 100px;
            height: 100px;
            margin: -50px 0 0 -50px; /* Adjust based on loader size */
            z-index: 1000;
            display: block; /* Display the loader by default */
        }
        #loader-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 999;
            display: block; /* Display the loader background by default */
        }
        #content {
            display: none; /* Hide the content by default */
        }
    </style>
</head>
<body>
<div id="loader-bg"></div>
    <div id="loader">
        <?php echo $this->Html->image('loader.gif', ['alt' => 'Loading...']); ?>
    </div>

    <script>
        // Show the loader when the page starts loading
        document.addEventListener('DOMContentLoaded', function() {
            // Hide the loader once the page is fully loaded
            window.addEventListener('load', function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('loader-bg').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            });
        });

        // AJAX loader
        $(document).ready(function() {
            $(document).ajaxStart(function() {
                $('#loader').show();
                $('#loader-bg').show();
            }).ajaxStop(function() {
                $('#loader').hide();
                $('#loader-bg').hide();
            });
        });
    </script>
<?php if (!($this->request->getParam('controller') === 'Dashboard' && $this->request->getParam('action') === 'userdashboard')): ?>
    <nav class="top-nav">
        <menu>
            <a href="#"><li>All Rentals</li></a>
            <a href="#" class="topNav"><li>Call: 07 3868 4047</li></a>
            <a href="#" class="topNav"><li>Resources</li></a>

            <?php
                // Check if the user is logged in
                $identity = $this->request->getAttribute('identity');
                $isLoggedIn = $identity !== null;

                if ($isLoggedIn) {
                    // User is logged in, show the logout link
                    echo $this->Html->link('<li>Logout</li>', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'topNav', 'escape' => false]);
                } else {
                    // User is not logged in, show the login link
                    echo $this->Html->link('<li>Login</li>', ['controller' => 'Users', 'action' => 'login'], ['class' => 'topNav', 'escape' => false]);
                }
            ?>

            <a href="#"><li id="sidebarButton" onclick="toggleSidebar()">&#9001;</li></a>
        </menu>
        <menu class="sidebar">
            <a href="#"><li id="sidebarCloseButton" onclick="toggleSidebar()">&#9002;</li></a>
            <a href="#"><li>Call: 07 3868 4047</li></a>
            <a href="#"><li>Resources</li></a>
            <a href="#"><li>Login</li></a>
        </menu>
    </nav>
<?php endif; ?>


<main class="main">
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>

<footer>
</footer>

<script>
    const sidebar = document.querySelector(".sidebar");
    const sidebarButton = document.querySelector("#sidebarButton");
    const sidebarCloseButton = document.querySelector("#sidebarCloseButton");

    function toggleSidebar() {
        if(sidebar.style.display === 'flex') {
            sidebar.style.display = 'none';
            return;
        }
        sidebar.style.display = 'flex';
    }

    sidebarCloseButton.addEventListener('click', function() {
        sidebar.style.display = 'none';
    });
</script>

</body>
</html>


<style>

body {

  font-family: sans-serif;
  line-height: 2;
}
h1 {
  margin: 2ch 0;
  text-align: center;
}
body::after {
  content: "";
  background-image: var(--bg-img);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;  
  opacity: 0.4;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
nav {
    background: #D3AF1F;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 0;
  box-shadow: .12rem .12rem .2rem rgba(0, 0, 0, .1);
}
nav menu {
/*   background: pink; */
  list-style: none;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
nav li {

  height: 100%;
  padding-inline: 1.5rem;
  display: flex;
  align-items: center;
}
nav a {

  font-family: "Open Sans", sans-serif; /* Use Open Sans font or fallback to sans-serif */
  color: #fff; /* White text color */
  text-decoration: none;
}

/* Navbar text hover effect */
nav a:hover {
    
  color: #ff4500; /* Change text color on hover */
}
nav a:first-child {
  margin-right: auto;
}
.sidebar {
  display: none;
  position: fixed;
  padding: 0;
  top: 0;
  right: 0;
  height: fit-content;
  max-height: var(--vp-height);
  width: min-content;
  margin: 2ch;
  z-index: 2;
  box-shadow: .12rem .12rem .2rem rgba(0, 0, 0, .1);
  backdrop-filter: blur(.8rem);
/*   triggered by sidebarButton onClick display: flex; */
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  transition: display 200ms;
}
.sidebar li, .sidebar a {
  width: 100%;
}

ol li {
  max-width: calc(100svw - 6rem);
}
footer {
  min-height: 2ch;
  text-align: center;
}
@media (width > 800px) {
  #sidebarButton {
    display: none;
  }
}
@media (width < 800px) {
  body {
    line-height: 1.5;
  }
  .topNav {
    display: none;
  }
  ol li {
    margin-bottom: 1ch;
    background: rgba(240, 240, 240, .7);
    max-width: 80svw;
  }  
}
@media (width < 420px) {
  .sidebar {
    width: 100svw;
  }
  .sidebar li {
    margin-left: 2rem;
  }
}
    </style>