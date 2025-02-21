<?php 
require_once('connection.php'); // Database Connection

// Delete Slider
if(isset($_GET['slider_delete'])) {
    $delete_slider = $_GET['slider_delete'];
    $query = "DELETE FROM slider WHERE slider_id='$delete_slider'";
    mysqli_query($conn, $query);
    header("Location: slider_list.php"); 
    exit();
}

// Fetch Slider Data
$query = "SELECT * FROM slider";
$result = mysqli_query($conn, $query);
$sliders = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<style>
    /* Basic Styling */
    .container {
        width: 90%;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }
    
    h1 {
        text-align: center;
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    img {
        max-width: 100px;
        height: auto;
    }

    .action-links a {
        text-decoration: none;
        color: white;
        padding: 5px 10px;
        margin: 2px;
        display: inline-block;
        border-radius: 3px;
    }

    .edit-btn {
        background-color: #28a745;
    }

    .delete-btn {
        background-color: #dc3545;
    }

    .action-links a:hover {
        opacity: 0.8;
    }
</style>

<div class="container">
    <h1>Slider List</h1>
    <table>
        <thead>
            <tr>
                <th>Slider Title</th>
                <th>Slider Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sliders as $slider): ?>
            <tr>
                <td><?php echo htmlspecialchars($slider['slider_title']); ?></td>
                <td><img src="<?php echo htmlspecialchars($slider['slider_path']); ?>" alt="Slider Image"></td>
                <td class="action-links">
                    <a href="slider_edit.php?slider_id=<?php echo $slider['slider_id']; ?>" class="edit-btn">Edit</a>
                    <a href="?slider_delete=<?php echo $slider['slider_id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this slider?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
