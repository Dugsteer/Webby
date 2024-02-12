<?php
// Assuming you receive the PDF ID as a GET parameter
$pdfId = $_GET['${pdf.sheet_url}'];

// Increment the download count in the database
$pdo = new PDO('mysql:host=eslology_site;dbname=worksheets', 'zaza', 'rufus4');
$stmt = $pdo->prepare("UPDATE pdf_downloads SET download_count = download_count + 1 WHERE pdf_id = :pdfId");
$stmt->execute([':pdfId' => $pdfId]);

// Redirect to the PDF file
header('Location: /docs/ $pdfId');
exit;
?>
