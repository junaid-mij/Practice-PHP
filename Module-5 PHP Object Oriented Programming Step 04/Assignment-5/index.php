<!DOCTYPE html>
<html>

<head>
    <title>Assignment: 5 (Marajul-Islam)</title>
</head>

<body>
    <center>
        <!-- Task 1: HTML Basics Form -->
        <h1>Task 1: HTML Basics Form</h1>
        <form method="post">
            <label for="name"><b>Name:</b></label>
            <input type="text" name="name" id="name" required>
            <br>
            <br>
            <label for="email"><b>Email:</b></label>
            <input type="email" name="email" id="email" required>
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>
        <br>
        <br>
        <?php
        //Task 2: Basic OOP in PHP
        // Define the Person class
        class Person
        {
            private $name;
            private $email;
        
            public function setName($name)
            {
                $this->name = $name;
            }
        
            public function setEmail($email)
            {
                $this->email = $email;
            }
        
            public function getName()
            {
                return $this->name;
            }
        
            public function getEmail()
            {
                return $this->email;
            }
        }
        $person = new Person();
        $person->setName('Marajul Islam');
        $person->setEmail('junath57@gmail.com');
        echo '<h1>Task 2: Basic OOP in PHP</h1>';
        echo '<b>Name:</b> ' . $person->getName() . '<br>';
        echo '<b>Email:</b> ' . $person->getEmail() . '<br><br>';
        
        //Task 3: Superglobal Variables
        // Check if form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Create new instance of Person class
            $person = new Person();
        
            // Set name and email properties using POST data
            $person->setName($_POST['name']);
            $person->setEmail($_POST['email']);
        
            // Display the name and email properties
            echo '<h1>Task 3: Superglobal Variables</h1>';
            echo '<h3>Person Details:</h3>';
            echo '<p><b>Name:</b> ' . $person->getName() . '</p>';
            echo '<p><b>Email:</b> ' . $person->getEmail() . '</p>';
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <p>© Marajul Islam. All Rights Reserved.</p>
    </center>
</body>

</html>
