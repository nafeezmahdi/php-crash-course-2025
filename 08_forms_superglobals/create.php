<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="POST" enctype="multipart/form-data">

        <!-- Name field -->
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <!-- Email field -->
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <!-- Phone field -->
        <label>Phone:</label><br>
        <input type="tel" name="phone" required><br><br>

        <!-- Contact image upload field -->
    <label>Contact Image:</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>



        <!-- Submit button -->
        <button type="submit">Add Contact</button>

    </form>
</body>
</html>

<?php
// echo "<pre>";
// var_dump($_SERVER, $_GET, $_POST, $_REQUEST);
// echo "</pre>";
// Display PHP superglobal arrays using var_dump().
// $_SERVER contains server and request information, $_GET collects data sent through URL parameters,
// $_POST collects data submitted using the POST method, and $_REQUEST contains request data
// (usually from GET, POST, and COOKIE, depending on PHP configuration).
// The <pre> tag preserves formatting for better readability in the browser.

$uploadsDir = __DIR__ . "/uploads/";
$contactsFile = __DIR__ . "/contacts.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
    $image = $_FILES["image"] ?? null;

    if ($name && $email && $phone && $image) {

        if ($image["error"] === UPLOAD_ERR_OK) {

            $allowedTypes = [
                "image/jpeg" => "jpg",
                "image/png" => "png",
                "image/webp" => "webp"
            ];

            $mimeType = mime_content_type($image["tmp_name"]);

            if (isset($allowedTypes[$mimeType]) && $image["size"] <= 10 * 1024 * 1024) {

                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0755, true);
                }

                $imageName = bin2hex(random_bytes(8)) . "." . $allowedTypes[$mimeType];

                $imagePath = $uploadsDir . $imageName;

                if (move_uploaded_file($image["tmp_name"], $imagePath)) {

                    $contacts = file_exists($contactsFile)
                        ? json_decode(file_get_contents($contactsFile), true)
                        : [];

                    if (!is_array($contacts)) {
                        $contacts = [];
                    }

                    $contacts[] = [
                        "id" => rand(1000000000, 2000000000),
                        "name" => $name,
                        "email" => $email,
                        "phone" => $phone,
                        "image" => "uploads/" . $imageName
                    ];

                    if (file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT), LOCK_EX) !== false) {

                        echo "Contact Added Successfully!<br>";
                        echo "Name: $name <br>";
                        echo "Email: $email <br>";
                        echo "Phone: $phone <br>";
                        echo "Image: " . htmlspecialchars($image["name"]);

                    } else {
                        echo "Contact could not be saved!";
                    }

                } else {
                    echo "Image upload failed!";
                }

            } else {
                echo "Invalid image format or file size!";
            }

        } else {
            echo "Image Upload Error: " . $image["error"];
        }

    } else {
        echo "Invalid Input!";
    }
}

?>
