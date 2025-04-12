<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Styled Checkbox</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .checkbox-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .custom-checkbox {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 16px;
            padding-left: 35px;
            user-select: none;
            color: #444;
        }

        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            left: 0;
            top: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 5px;
            transition: 0.3s;
        }

        .custom-checkbox:hover input~.checkmark {
            background-color: #ccc;
        }

        .custom-checkbox input:checked~.checkmark {
            background-color: #4CAF50;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked~.checkmark:after {
            display: block;
        }

        .custom-checkbox .checkmark:after {
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .submit-btn:hover {
            background-color: #45a049;
            transform: translateY(-3px);
            /* Slight lifting effect on hover */
        }

        .submit-btn:active {
            background-color: #388e3c;
            /* Darker green when clicked */
            transform: translateY(0);
            /* No lift effect when active */
        }

        .list-container {
            margin-top: 10px;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        ul.styled-list {
            list-style: none;
            padding: 0;
        }

        ul.styled-list li {
            background-color: #f0f2f5;
            margin-bottom: 12px;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.3s ease;
        }

        ul.styled-list li:hover {
            background-color: #d9e7ff;
        }

        ul.styled-list li::before {
            content: "✔️";
            font-size: 18px;
            color: #4CAF50;
        }
    </style>
</head>

<body>

    <div class="checkbox-container">
        <h2>Select Items</h2>
        <form action="index.php" method="post">
            <div class="checkbox-group">
                <label class="custom-checkbox">Basmati Rice
                    <input type="checkbox" name="bashmati_rice" value="Basmati Rice">
                    <span class="checkmark"></span>
                </label>

                <label class="custom-checkbox">Khasir Mangsho
                    <input type="checkbox" name="khasir_mangsho" value="Khasir Mangsho">
                    <span class="checkmark"></span>
                </label>

                <label class="custom-checkbox">Watermelon
                    <input type="checkbox" name="watermelon" value="Watermelon">
                    <span class="checkmark"></span>
                </label>

                <button type="submit" name="submit" class="submit-btn" value="submit">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        // Filter out 'submit' from POST data
        $items = array_filter($_POST, function($key) {
            return $key !== 'submit';
        }, ARRAY_FILTER_USE_KEY);

        if (empty($items)) {
            echo "<p>No items selected.</p>";
        } else {
            echo "<div class='list-container'>
                    <h2>Shopping List</h2>
                    <ul class='styled-list'>";
            
            foreach ($items as $val) {
                echo "<li>" . htmlspecialchars($val, ENT_QUOTES, 'UTF-8') . "</li>";
            }

            echo "  </ul> 
                  </div>";
        }
    }
}

?>