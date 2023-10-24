<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Specify the path to the Visual Studio Code shortcut
    sleep(5);
    $shortcutPath = 'C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Adobe Digital Editions 4.5.lnk';
    // C:\ProgramData\Microsoft\Windows\Start Menu\Programs
    // Use shell_exec to open the Visual Studio Code shortcut
    $result = shell_exec("start \"\" \"$shortcutPath\"");

    // echo "<script>alert('dsfgdf');</script>";

    if ($result !== null) {
        echo "Visual Studio Code opened successfully.";
    } else {
        echo "Failed to open Visual Studio Code.";
    }


}
?> 