<?php
if (isset($_GET['text'])) {
    echo htmlspecialchars($_GET['text']);
} else {
    echo 'Text not found';
}
?>
