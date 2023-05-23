<html>  
    <head> 
        <h1>Tracking</h1>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,500&display=swap');
*{
    background-color:rgb(245, 179, 185);
    margin: auto;
    text-align: center;
    font-family: 'Ubuntu', sans-serif;
    padding: 5px;
}
        </style>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}

echo "Total Visits: " . $_SESSION['visits'];
?>
