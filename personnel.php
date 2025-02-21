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
                    <h1>Personnel</h1>
                    <button class="btn btn-primary" id="openFormBtn">Add Personnel</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="personnelTable">
                        <tr>
                            <td>John Doe</td>
                            <td>Pahinante</td>
                            <td>0932-323-2039</td>
                            <td>doethepahinante@gmail.com</td>
                            <td class="status success">Present</td>
                            <td><button class="btn btn-outline toggle-status">Mark Absent</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

        <!-- Modal for Adding Personnel -->
    <div id="personnelFormModal" class="modal">
        <div class="modal-content">
            <h2>Add Personnel</h2>
            <form id="personnelForm">
                <label for="name">Name:</label>
                <input type="text" id="name" required>

                <label for="position">Position:</label>
                <input type="text" id="position" required>

                <label for="contact">Contact:</label>
                <input type="text" id="contact" required>

                <label for="email">Email:</label>
                <input type="email" id="email" required>

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
