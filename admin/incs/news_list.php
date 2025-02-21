<?php 
require_once('connection.php'); // Database Connection
// Delete News
if(isset($_GET['news_delete'])) {
    $delete_news = $_GET['news_delete'];
    $query = "DELETE FROM news WHERE news_id='$delete_news'";
    mysqli_query($conn, $query);
    header("Location: news_list.php?deleted=success");
    exit();
}
// Fetch News Data
$query = "SELECT * FROM news";
$result = mysqli_query($conn, $query);
$news_items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center fw-bold">News List</h1>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th class="w-50">News Title</th>
                    <th class="w-25">News Content</th>
                    <th class="w-25 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news_items as $news): ?>
                <tr>
                    <td><?php echo htmlspecialchars($news['news_title']); ?></td>
                    <td><?php echo htmlspecialchars($news['news_content']); ?></td>
                    <td class="text-center">
                        <a href="news_edit.php?news_id=<?php echo $news['news_id']; ?>" class="btn btn-success">Edit</a>
                        <a href="?news_delete=<?php echo $news['news_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this news?');">Delete</a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
