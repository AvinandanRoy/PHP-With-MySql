<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Custom Checkbox List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background: #f9f9f9;
        }

        .checkbox-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-container {
            position: relative;
            width: 24px;
            height: 24px;
        }

        .checkbox-container input[type="checkbox"] {
            opacity: 0;
            width: 24px;
            height: 24px;
            margin: 0;
            cursor: pointer;
            position: absolute;
            z-index: 2;
        }

        .custom-checkbox {
            position: absolute;
            top: 0;
            left: 0;
            height: 24px;
            width: 24px;
            background-color: white;
            border: 2px solid #888;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .checkbox-container input:checked+.custom-checkbox {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        .custom-checkbox::after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 3px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-container input:checked+.custom-checkbox::after {
            display: block;
        }

        label {
            font-size: 1rem;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <form class="checkbox-list" action="index.php" method="post">
        <div class="checkbox-wrapper">
            <div class="checkbox-container">
                <input type="checkbox" id="item1" name="item1" value="item1">
                <span class="custom-checkbox"></span>
            </div>
            <label for="item1">Item 1</label>
        </div>

        <div class="checkbox-wrapper">
            <div class="checkbox-container">
                <input type="checkbox" id="item2" name="item2" value="item2">
                <span class="custom-checkbox"></span>
            </div>
            <label for="item2">Item 2</label>
        </div>

        <div class="checkbox-wrapper">
            <div class="checkbox-container">
                <input type="checkbox" id="item3" name="item3" value="item3">
                <span class="custom-checkbox"></span>
            </div>
            <label for="item3">Item 3</label>
        </div>

        <div class="checkbox-wrapper">
            <div class="checkbox-container">
                <input type="checkbox" id="item4" name="item4" value="item4">
                <span class="custom-checkbox"></span>
            </div>
            <label for="item4">Item 4</label>
        </div>

        <div class="checkbox-wrapper">
            <div class="checkbox-container">
                <input type="checkbox" id="item5" name="item5" value="item5">
                <span class="custom-checkbox"></span>
            </div>
            <label for="item5">Item 5</label>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    echo "<div>
     <h1>Your selected items is:</h1>
     <ul>";
    if (isset($_POST["submit"])) {
        foreach ($_POST as $key => $value) {
            if ($key != "submit") {
                echo "<li> {$value}</li>";
            }
        }
    }
    echo "</ul>
    </div>";
    ?>
</body>

</html>
<?php

?>