<?php
// Path to the image file
$imagePath = 'images/test2.jpg';
<tbody>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
// Check if the file exists
if (file_exists($imagePath)) {
    // Set the content type header
    header('Content-Type: image/jpeg');

    // Output the image file
    readfile($imagePath);
    echo 'ver 2.';
} else {
    // Handle the case where the image does not exist
    echo 'Image not found.';
}
?>
