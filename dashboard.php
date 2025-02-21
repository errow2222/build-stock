<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="script.js"></script>
    <title>Dashboard</title>
    
</head>
<body>
    <div class="container">
        <?php include "sidebar.php";?>
        <main>
        <header><?php include "header.php"; ?> </header>

            <main>
                <h1>Dashboard</h1>
                
                <section class="dashboard-stats">
                    <div class="stat-container">
                        <div class="stat-box">
                            <div class="icon">📦</div>
                            <div class="content">
                                <h3>868</h3>
                                <p>Total items</p>
                            </div>
                        </div>
                    
                        <div class="stat-box">
                            <div class="icon">👥</div>
                            <div class="content">
                                <h3>1</h3>
                                <p>Personnel</p>
                            </div>
                        </div>
                    
                        <div class="stat-box">
                            <div class="icon">📦</div>
                            <div class="content">
                                <h3>350</h3>
                                <p>Products</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    <script src="script.js"></script>
</body>
</html>