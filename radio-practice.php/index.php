<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Custom Radio Buttons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background: #f5f7fa;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        .radio-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .radio-container {
            position: relative;
            width: 22px;
            height: 22px;
        }

        .radio-container input[type="radio"] {
            opacity: 0;
            position: absolute;
            cursor: pointer;
            z-index: 2;
            width: 22px;
            height: 22px;
        }

        .custom-radio {
            position: absolute;
            top: 0;
            left: 0;
            height: 22px;
            width: 22px;
            background-color: white;
            border: 2px solid #888;
            border-radius: 50%;
            transition: all 0.2s ease;
        }

        .radio-container input:checked+.custom-radio {
            border-color: #4caf50;
        }

        .custom-radio::after {
            content: "";
            position: absolute;
            display: none;
            top: 5px;
            left: 5px;
            width: 8px;
            height: 8px;
            background-color: #4caf50;
            border-radius: 50%;
        }

        .radio-container input:checked+.custom-radio::after {
            display: block;
        }

        label {
            font-size: 1rem;
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <form action="index.php" method="POST">
        <h2>Select Your Gender</h2>

        <div class="radio-group">
            <div class="radio-wrapper">
                <div class="radio-container">
                    <input type="radio" id="male" name="gender" value="Male">
                    <span class="custom-radio"></span>
                </div>
                <label for="male">Male</label>
            </div>

            <div class="radio-wrapper">
                <div class="radio-container">
                    <input type="radio" id="female" name="gender" value="Female">
                    <span class="custom-radio"></span>
                </div>
                <label for="female">Female</label>
            </div>

            <div class="radio-wrapper">
                <div class="radio-container">
                    <input type="radio" id="other" name="gender" value="Other">
                    <span class="custom-radio"></span>
                </div>
                <label for="other">Other</label>
            </div>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["gender"])){
            $gender =$_POST["gender"];
            if($gender == "Other"){
                echo "<h2>May be you are shemale, trans and others. I have respect for you.</h2>";
            }else{
                echo"<h1>You are: $gender</h1>";
            }
        }else{
            echo"<h1>PLZ select a gender.</h1>";
        }
    }
    ?>
</body>

</html>