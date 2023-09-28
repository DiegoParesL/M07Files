<style>
    table, td, tr{
        border: 1px solid black;
        border-collapse:collapse;
    }
</style>
<body>
    <p>PROCESSA CONTACTES</p>
<?php

$contactList= file("D:/xampp/htdocs/PHP/contactes31.txt");
$newContacts = "";
echo '<table>';
for ($i=0; $i < (count($contactList)); $i++) {
    $contact = explode(",", $contactList[$i]);
    $newContacts .="$contact[0]#$contact[1]#$contact[2]#$contact[3]\n";
    echo '<tr>';
        echo "<td> $contact[0]</td><td> $contact[1]</td><td> $contact[2]</td><td> $contact[3]</td>";
    echo '</tr>';
    
}
$file = fopen("contactes31b.txt", "w");
fwrite($file,$newContacts);
fclose($file);
echo '</table>';
?>
</body>