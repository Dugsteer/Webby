<?php
// Include the database connection
include 'db_connect.php';

// Define the target directory for uploads
$target_dir = "uploads/";

// File paths for the PDF and the thumbnail
$pdf_target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$thumbnail_target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);

// Flag to check the upload status
$uploadOk = 1;

// File type validation
$pdfFileType = strtolower(pathinfo($pdf_target_file, PATHINFO_EXTENSION));
$thumbnailFileType = strtolower(pathinfo($thumbnail_target_file, PATHINFO_EXTENSION));

// Check if file is a PDF
if ($pdfFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}

// Check if file is an image
if ($thumbnailFileType != "jpg" && $thumbnailFileType != "png" && $thumbnailFileType != "jpeg"
&& $thumbnailFileType != "gif" && $thumbnailFileType != "webp") {
    echo "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed for thumbnails.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your files were not uploaded.";
} else {
    // Try to upload files
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pdf_target_file) && 
        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $thumbnail_target_file)) {

        // Retrieve form data
        $title = $_POST['title'];
        $description = $_POST['description'];

        // SQL to insert file data into the database
        $sql = "INSERT INTO pdf_files (title, description, file_path, thumbnail_path) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $title, $description, $pdf_target_file, $thumbnail_target_file);

        if ($stmt->execute()) {
            echo "The file and thumbnail have been uploaded successfully and record created.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

$conn->close();
?>
