<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomMatch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
    <style>
        .navbar { background: white; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); }
        .navbar-brand { font-weight: bold; font-size: 1.5rem; }
        .navbar-nav { margin: 0 auto; }
        .navbar-nav .nav-link { color: #333; font-size: 1rem; margin: 0 10px; }
        .navbar-nav .nav-link:hover { color: black; }
        .btn-login { color: black; text-decoration: none; margin-right: 15px; }
        .btn-signup { color: #ccc; text-decoration: none; cursor: not-allowed; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand" href="index.php">RoomMatch</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#how-it-works" class="nav-link">How It Works</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Find Roommates</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Explore Properties</a></li>
        </ul>
        
        <div>
            <a href="#" class="btn-login">Login</a>
            <a href="#" class="btn-signup">Sign Up</a>
        </div>
    </div>
</nav>
