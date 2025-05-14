<?php


// Initialize contact storage
$contact_count = 0;
$contact1_name = "";
$contact1_phone = "";
$contact2_name = "";
$contact2_phone = "";

while (true) {
    // Display menu
    echo "\nContact Management App\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose an option (1-3): ";
    $choice = trim(fgets(STDIN));

    // Handle choice using if/else
    if ($choice === '1') {
        // Add Contact
        if ($contact_count >= 2) {
            echo "\nWarning: You can only store up to 2 contacts.\n";
        } else {
            echo "\nEnter Name: ";
            $name = trim(fgets(STDIN));
            echo "Enter Phone Number: ";
            $phone = trim(fgets(STDIN));

            if ($contact_count === 0) {
                $contact1_name  = $name;
                $contact1_phone = $phone;
                $contact_count++;
                echo "\nContact saved as #1.\n";
            } else {
                $contact2_name  = $name;
                $contact2_phone = $phone;
                $contact_count++;
                echo "\nContact saved as #2.\n";
            }
        }
    } elseif ($choice === '2') {
        // View Contacts
        echo "\nSaved Contacts:\n";
        if ($contact_count === 0) {
            echo "No contacts saved.\n";
        } else {
            if ($contact_count >= 1) {
                echo "1) Name: {$contact1_name}, Phone: {$contact1_phone}\n";
            }
            if ($contact_count === 2) {
                echo "2) Name: {$contact2_name}, Phone: {$contact2_phone}\n";
            }
        }
    } elseif ($choice === '3') {
        echo "\nExiting... Goodbye!\n";
        break;
    } else {
        echo "\nInvalid option. Please choose 1, 2, or 3.\n";
    }
}
?>
