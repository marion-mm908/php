<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marion Cookie Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav {
            background-color: #007bff;
            padding: 1rem;
        }
        nav a {
            color: white;
            margin: 0 1rem;
            text-decoration: none;
        }
        main {
            padding: 2rem;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Marion Cookie Company</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Products</a>
        <a href="#">Contact</a>
    </nav>
    <main>
        <h2>About Us</h2>
        <p>
            <?php
            echo "Marion Cookie Company is dedicated to baking the best cookies in town. Our secret recipes have been passed down through generations, ensuring that every bite is filled with love and tradition.";
            ?>
        </p>
        <h2>Our Products</h2>
        <ul>
            <li>Chocolate Chip Cookies</li>
            <li>Oatmeal Raisin Cookies</li>
            <li>Peanut Butter Cookies</li>
            <li>Snickerdoodles</li>
            <li>And many more!</li>
        </ul>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Marion Cookie Company. All rights reserved.</p>
    </footer>
</body>
</html>
