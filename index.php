<?php
// index.php

// Start the session (if needed for login/register functionality)
session_start();

// Basic HTML Structure with Bootstrap for simplicity
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR. Worldwide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div id="left">
    <button type="button"><img src="burger-menu-svgrepo-com.svg" alt="menu" width="25em" height="25em"></button>
        <h1>MR. Worldwide</h1>
    </div>
    <div id="cta-b">
        <a href="#">Bejelentkezés</a>
        <a href="#">Regisztráció</a>
    </div>
</header>


<main class="container my-4">
<p>Nyisd ki az elméd, fedezd fel a világot!</p>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="continent" class="form-label">Kontinens:</label>
            <select id="continent" class="form-select">
                <option selected>Európa</option>
                <option>Ázsia</option>
                <option>Észak-Amerika</option>
                <option>Dél-Amerika</option>
                <option>Ausztrália</option>
                <option>Afrika</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="country" class="form-label">Ország:</label>
            <input type="text" id="country" class="form-control" placeholder="Search...">
        </div>
    </div>

    <!-- Posts Section -->
    <div class="row">
        <!-- Post Card 1 -->
        <div class="col-md-6">
            <div class="post-card">
                <img src="https://via.placeholder.com/400x200" alt="Post Image">
                <div class="post-content mt-3">
                    <h5>Andrew Attie</h5>
                    <p><i class="bi bi-geo-alt"></i> Patagonia</p>
                    <p>Find out the amazing view of this paradise! The waters, the mountains, all the beauty of Patagonia and the country...</p>
                    <div class="d-flex justify-content-between">
                        <span><i class="bi bi-hand-thumbs-up"></i> 15</span>
                        <span><i class="bi bi-chat"></i> 3</span>
                        <span><i class="bi bi-bookmark"></i> 15</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post Card 2 -->
        <div class="col-md-6">
            <div class="post-card">
                <img src="https://via.placeholder.com/400x200" alt="Post Image">
                <div class="post-content mt-3">
                    <h5>Andrew Attie</h5>
                    <p><i class="bi bi-geo-alt"></i> Patagonia</p>
                    <p>Find out the amazing view of this paradise! The waters, the mountains, all the beauty of Patagonia and the country...</p>
                    <div
