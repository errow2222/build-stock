<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="container">
    <?php include "sidebar.php";?>
        <main>
            <header><?php include "header.php";?></header>
            <section class="inventory">
                <div class="inventory-header">
                    <h1>Supplier</h1>
                    <button class="btn btn-primary" id="openFormBtn">Add Supplier</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Product</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>On the Way</th>
                        </tr>
                    </thead>
                    <tbody id="supplierTable">
                        <tr>
                            <td>Maggi</td>
                            <td>Hollow Blocks</td>
                            <td>0994-323-2132</td>
                            <td>maggie@gmail.com</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Beatriz Mirandilla</td>
                            <td>Bakal</td>
                            <td>0923-234-2342</td>
                            <td>beatriz@gmail.com</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <!-- Modal for Adding Personnel -->
    <div id="supplierFormModal" class="modal">
        <div class="modal-content">
            <h2>Add Supplier</h2>
            <form id="supplierForm">
                <label for="name">Name:</label>
                <input type="text" id="name" required>

                <label for="position">Product:</label>
                <input type="text" id="product" required>

                <label for="contact">Contact:</label>
                <input type="text" id="contact" required>

                <label for="email">Email:</label>
                <input type="email" id="email" required>

                <label for="ontheway">On the way:</label>
                <input type="otw" id="otw" required>

                <div class="modal-buttons">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn-close" id="closeFormBtn">Close</button>
                </div>
            </form>
        </div>
    </div>
    <script src="functions.js"></script>
</body>
</html>
