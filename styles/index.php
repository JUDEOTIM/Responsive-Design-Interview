<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" href="styles/uikit/raw-main.css">
    <link rel="stylesheet" href="styles/uikit/main.scss">
    <title>Onboarding Exercise</title>
</head>
<body>
<nav>
</nav>
<div id="app_container">
    <!-- Your content goes here -->
<button class="open-modal-btn" data-modal-id="modal1">Open Modal 1</button>
<button class="open-modal-btn" data-modal-id="modal2">Open Modal 2</button>

 <div class="modal" id="modal1">
     <div class="modal-content">
         <!-- Modal 1 content goes here -->
         <span class="close-modal-btn">&times;</span>
     </div>
 </div>

 <div class="modal" id="modal2">
     <div class="modal-content">
         <!-- Modal 2 content goes here -->
         <span class="close-modal-btn">&times;</span>
     </div>
 </div>
</div>

<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>
<script src="scripts/uikit/custom.js"></script>
</body>
</html>