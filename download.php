<?php
// Database connection details
$host = 'localhost';
$dbname = 'eslology_site';
$username = 'eslology_zaza';
$password = 'rufus4';

// Connect to the database
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);



// Get the PDF ID from the query string
$pdfId = isset($_GET['pdfId']) ? $_GET['pdfId'] : null;

// Before attempting to read or serve the file, check if it exists and is readable
// $pdfFilePath = "/docs/" . $pdfId;
// error_log("PDF ID: " . $pdfId . " | File Path: " . $pdfFilePath);

// if (file_exists($pdfFilePath) && is_readable($pdfFilePath)) {
//     // Serve the file here
// } else {
//     error_log("Failed to find or access the PDF file: $pdfFilePath");
//     echo "Error serving the file. Please contact support.";
// }

if ($pdfId) {
    // Update the download count for the PDF in the worksheets table
    $sql = "UPDATE worksheets SET download_count = download_count + 1 WHERE sheet_url = :pdfId";
$stmt = $pdo->prepare($sql);
$stmt->execute([':pdfId' => $pdfId]);
  
    // Retrieve the PDF path from the worksheets table
    $sql = "SELECT sheet_url FROM worksheets WHERE sheet_url = :pdfId";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':pdfId' => $pdfId]);
    $pdf = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($pdf) {
        $pdfFilePath = "../docs/" . $pdfId; // Concatenate the base directory with sheet_url

        if (file_exists($pdfFilePath)) {
            // Set headers to serve the file as a download
              header('Content-Description: File Transfer');
             header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($pdfFilePath) . '"');
              header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
            header('Content-Length: ' . filesize($pdfFilePath));
            readfile($pdfFilePath);
            exit;
        } else {
            // Handle case where the PDF does not exist
            echo "PDF not found.";
        }
    } else {
        // Handle case where no record is found in the database
        echo "No record found for the provided PDF ID.";
    }
} else {
    // Handle case where no PDF ID is provided
    echo "No PDF ID provided.";
}
?>
