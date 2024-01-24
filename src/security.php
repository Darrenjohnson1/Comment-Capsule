<?php
    include("database.php");

    function security_validate() {
        // Set a default value
        $status = false;
        
        // Validate
        if(isset($_POST["username"]) and isset($_POST["password"])) {
            $status = true;
        }

        return $status;
    }

    function security_login() {
        // Set a default value
        $status = false;
        // Validate and sanitize
        $result = security_sanitize();
        // Open connection
        database_connect();
        // Use the connection
        $status = database_verifyUser($result["username"], $result["password"]);

        // Close connection
        database_close();
        // Check status
        if($status) {
            // Set a cookie
            setcookie("login", "yes");
        } else if (!$status && ($result["username"] != null)) {
            echo('Login failed, try again...');
        } 
    }

    function security_addNewUser() {
        // Validate and sanitize.
        $result = security_sanitize();
        // Open connection.
        database_connect();

        // Use connection.
        //
        // We want to make sure we don't add
        //  duplicate values.
        if(!database_verifyUser($result["username"], $result["password"]) && ($result["username"] != null) && ($result["password"] != null)) {
            // Username does not exist.
            // Add a new one.
            database_addUser($result["username"], $result["password"]);
        } else if (database_verifyUser($result["username"], $result["password"]) && ($result["username"] !== "")) {
            echo('An account is already created with this information...');
        }
        
        // Close connection.
        database_close();
    }

    function security_loggedIn() {
        // Does a cookie exist?
        return isset($_COOKIE["login"]);
    }

    function security_logout() {
        // Set a cookie to the past
        setcookie("login", "yes", time() - 10);
    }

    function security_sanitize() {
        // Create an array of keys username and password
        $result = [
            "username" => null,
            "password" => null,
            "user_post" => null
        ];

        if(security_validate()) {
            $result["username"] = htmlspecialchars($_POST["username"]);
            $result["password"] = htmlspecialchars($_POST["password"]);
            if (isset($_POST["new_Password"])) {
                $result["new_Password"] = htmlspecialchars($_POST["new_Password"]);
            } 
        } else if (isset($_POST["user_post"])) {
            $result["user_post"] = htmlspecialchars($_POST["user_post"]);
        }

        // Return array
        return $result;
    }

    function security_deleteUser() {

        $result = security_sanitize();

        // Open connection.
        database_connect();
        
        if(database_verifyUser($result["username"], $result["password"])) {
            // Username exists.
            // Delete it.
            database_deleteUser($result["username"], $result["password"]);
        }
        
        // Close connection.
        database_close();       
    }

    function security_updatePassword() {
        
        $result = security_sanitize();

        // Open connection.
        database_connect();
        
        if(database_verifyUser($result["username"], $result["password"])) {
            // Username exists.
            // Update password.
            database_updatePassword($result["username"], $result["password"], $result["new_Password"]);
        } 
        // Close connection.
        database_close();    
    }

    function security_post() {
        global $connection;

        $result = security_sanitize();

        database_connect();
        
        if (($result["user_post"] !== "") && ($result["user_post"] !== null)) {
            database_addPost($result["user_post"]);
        }

        if($connection != null) {

            $results = mysqli_query($connection, "SELECT post FROM posts;");

                while($row = mysqli_fetch_assoc($results)) {

                    echo("<div class='post'>");
                    echo($row['post']);
                    echo("</div>");
                }
        }

        database_close();  

    }

    function security_retrieve_posts() {
        global $connection;

        database_connect();        

        if($connection != null) {

            $results = mysqli_query($connection, "SELECT post FROM posts;");

                while($row = mysqli_fetch_assoc($results)) {

                    echo("<div class='container'>");
                    echo($row['post']);
                    echo("</div>");
                }
        }

        database_close();  
    }
?>