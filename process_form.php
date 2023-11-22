<?php
class FormInfoClass {
    private $last_name;
    private $first_name;
    private $middle_initial;
    private $age;
    private $contact_no;
    private $email;
    private $address;

    // Getter and Setter methods
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    // Implement getter and setter for other properties
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

// Create an instance of FormInfoClass
$form_info = new FormInfoClass();

// Set values from the form data
$form_info->setLastName($_POST['last_name']);
$form_info->setFirstName($_POST['first_name']);
$form_info->setMiddleInitial($_POST['middle_initial']);
$form_info->setAge($_POST['age']);
$form_info->setContactNo($_POST['contact_no']);
$form_info->setEmail($_POST['email']);
$form_info->setAddress($_POST['address']);

// Display the output
echo "<style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(211, 211, 255);
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .details {
            margin-top: 20px;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.534);
        }

        .details label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .details p {
            margin: 5px 0;
        }

        button{
            padding: 10px;
            margin-top: 40px;
            border-radius: 10px;
            cursor: pointer;
            border: none;
            background-color: darkslategrey;
            color: white;
        }
      </style>";

echo "<h2>Registration Details</h2>";
echo "<div class='details'>";
echo "<label>Last Name:</label>";
echo "<p>" . $form_info->getLastName() . "</p>";

echo "<label>First Name:</label>";
echo "<p>" . $form_info->getFirstName() . "</p>";

echo "<label>Middle Initial:</label>";
echo "<p>" . $form_info->getMiddleInitial() . "</p>";

echo "<label>Age:</label>";
echo "<p>" . $form_info->getAge() . "</p>";

echo "<label>Contact No.:</label>";
echo "<p>" . $form_info->getContactNo() . "</p>";

echo "<label>Email:</label>";
echo "<p>" . $form_info->getEmail() . "</p>";

echo "<label>Address:</label>";
echo "<p>" . $form_info->getAddress() . "</p>";
echo "</div>";

echo "<a href='./index.php'><button>Back</button></a>";
?>