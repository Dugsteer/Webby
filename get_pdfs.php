<?php
include 'db_connect.php';

$level = isset($_GET['sheet_level']) ? $_GET['sheet_level'] : '';

$query = "SELECT sheet_title, sheet_description, sheet_url, sheet_level, sheet_image FROM worksheets WHERE sheet_url LIKE '%.pdf%'";
if ($level) {
    $query .= " AND sheet_level LIKE ? ORDER BY id DESC";
    $stmt = $conn->prepare($query);
    $like_level = '%' . $level . '%';
    $stmt->bind_param("s", $like_level);
} else {
    $query .= " ORDER BY id DESC";
    $stmt = $conn->prepare($query);
}
$stmt->execute();
$result = $stmt->get_result();

$pdfs = array();
while($row = $result->fetch_assoc()) {
    $pdfs[] = $row;
}

echo json_encode($pdfs);

$conn->close();
?>
