<?php
    $page = $_GET['page'];
    switch ($page) {
        case 'main':
            header('Location: landing.html');
            break;
        case 'contacts':
            header('Location: contacts.html');
            break;
        case 'teachers':
            header('Location: teachers.html');
            break;
    }
?>
