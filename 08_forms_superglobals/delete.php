<?php

if (isset($_GET["id"])) {

    $contactsFile = "contacts.json";

    $contacts = file_exists($contactsFile)
        ? json_decode(file_get_contents($contactsFile), true)
        : [];

    $contacts = array_filter(
        $contacts,
        fn($c) => (string)($c["id"] ?? "") !== (string)$_GET["id"]
    );

    $contacts = array_values($contacts);

    file_put_contents(
        $contactsFile,
        json_encode($contacts, JSON_PRETTY_PRINT)
    );

    echo "Contact Deleted";
}

?>