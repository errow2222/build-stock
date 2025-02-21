<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="container">
    <?php include "sidebar.php";?>
        <main>
            <header><?php include "header.php";?></header>
            <section class="orders">
                <div class="stat-container">
                    <div class="stat-box">
                        <div class="content">
                            <h3>0</h3>
                            <p>Total Orders</p>
                        </div>
                    </div>
                    <div class="stat-box">
                        <div class="content">
                            <h3>0</h3>
                            <p>Total Received</p>
                        </div>
                    </div>
                    <div class="stat-box">
                        <div class="content">
                            <h3>0</h3>
                            <p>On the way</p>
                        </div>
                    </div>
                </div>
            </section><br>

            <div class="inventory">
                <div class="inventory-header">
                    <h1>Orders</h1>
                    <button class="btn btn-primary" id="addOrderBtn">Add Order</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Supplier</th>
                            <th>Product</th>
                            <th>Order Value</th>
                            <th>Quantity</th>
                            <th>Order ID</th>
                            <th>Expected Delivery</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="ordersTable">
                        <tr>
                            <td>Maggi</td>
                            <td>Hollow Blocks</td>
                            <td>$400</td>
                            <td>500 Pieces</td>
                            <td>7535</td>
                            <td>11/12/22</td>
                            <td class="warning">Delayed</td>
                            <td><button class="receivedBtn">Received</button></td>
                        </tr>
                        <tr>
                            <td>Beatriz Mirandilla</td>
                            <td>Bakal</td>
                            <td>$3557</td>
                            <td>22 Pieces</td>
                            <td>5724</td>
                            <td>21/12/22</td>
                            <td class="success">Confirmed</td>
                            <td><button class="receivedBtn">Received</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

        <!-- Order Modal -->
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <h2>Add New Order</h2>
            <form id="orderForm">
                <label for="supplier">Supplier:</label>
                <select id="supplier" required>
                    <option value="">Loading...</option>
                </select>

                <label for="product">Product:</label>
                <input type="text" id="product" required>

                <label for="orderValue">Order Value:</label>
                <input type="number" id="orderValue" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" required>

                <label for="expectedDelivery">Expected Delivery:</label>
                <input type="date" id="expectedDelivery" required>

                <div class="modal-buttons">
                    <button type="submit" class="btn btn-primary">Place Order</button>
                    <button type="button" class="btn-close" id="closeModal">Close</button>
                </div>
            </form>
        </div>
    </div>

    <script src="functions.js"></script>
</body>
</html>
