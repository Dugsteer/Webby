<!-- admin.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Upload Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
</head>

<body>
    <div class="container mt-5">
        <h2>Upload New PDF</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-3">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label for="fileToUpload">Select PDF:</label>
                <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" accept=".pdf"
                    required>
            </div>
            <div class="form-group">
                <label for="thumbnail">Select Thumbnail Image:</label>
                <input type="file" class="form-control-file" name="thumbnail" id="thumbnail" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Upload PDF</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
