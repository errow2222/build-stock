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
                    <h1>Overall Inventory</h1>
                    <div class="actions">
                        <button class="btn btn-primary" id="openModalBtn">Add Product</button>
                    </div>
                </div>
                    <div class="inventory-stats">
                        <div><strong>Item Category</strong> <br>0</div>
                        <div><strong>Total Items</strong> <br>0</div>
                        <div><strong>Low Stocks</strong> <br>0</div>
                        <div><strong>Out of Stock</strong> <br>0</div>
                    </div>


                    <table>
                        <thead>
                            <tr>
                                <th>Products</th>
                                <th>Buying Price</th>
                                <th>Quantity</th>
                                <th>Threshold Value</th>
                                <th>Expiry Date</th>
                                <th>Availability</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <tr>
                                <td>Hollow Blocks</td>
                                <td>$1</td>
                                <td>1000 Pieces</td>
                                <td>20 Pieces</td>
                                <td>21/12/22</td>
                                <td class="success">In-Stock</td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>


    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>Add Product</h2>
            <form id="userForm">
                <label for="productName">Product:</label>
                <input type="text" id="productName" name="productName" required>

                <label for="buyingPrice">Price:</label>
                <input type="number" id="buyingPrice" name="buyingPrice" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="threshold">Threshold:</label>
                <input type="number" id="threshold" name="threshold" required>

                <label for="expiryDate">Expiry:</label>
                <input type="date" id="expiryDate" name="expiryDate" required>
                
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
