<?php
session_start();
include 'database.php';
class FormInfoClass {
    private $last_name;
    private $first_name;
    private $middle_initial;
    private $age;
    private $contact_no;
    private $email;
    private $address;

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setMiddleInitial($middle_initial) {
        $this->middle_initial = $middle_initial;
    }

    public function getMiddleInitial() {
        return $this->middle_initial;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setContactNo($contact_no) {
        $this->contact_no = $contact_no;
    }

    public function getContactNo() {
        return $this->contact_no;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_info = new FormInfoClass();

    $form_info->setLastName($_POST['last_name']);
    $form_info->setFirstName($_POST['first_name']);
    $form_info->setMiddleInitial($_POST['middle_initial']);
    $form_info->setAge($_POST['age']);
    $form_info->setContactNo($_POST['contact_no']);
    $form_info->setEmail($_POST['email']);
    $form_info->setAddress($_POST['address']);

    $_SESSION['form_data'] = [
        'last_name' => $form_info->getLastName(),
        'first_name' => $form_info->getFirstName(),
        'middle_initial' => $form_info->getMiddleInitial(),
        'age' => $form_info->getAge(),
        'contact_no' => $form_info->getContactNo(),
        'email' => $form_info->getEmail(),
        'address' => $form_info->getAddress()
    ];

    $sql = "INSERT INTO registration_data (last_name, first_name, middle_initial, age, contact_no, email, address)
    VALUES ('{$form_info->getLastName()}',
            '{$form_info->getFirstName()}',
            '{$form_info->getMiddleInitial()}',
            '{$form_info->getAge()}',
            '{$form_info->getContactNo()}',
            '{$form_info->getEmail()}',
            '{$form_info->getAddress()}')";

    if ($conn->query($sql) === TRUE) {
        header("Location: confirmation.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>