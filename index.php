<?php
    $page = $_GET['page'];
    switch ($page) {
        case 'landing':
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
