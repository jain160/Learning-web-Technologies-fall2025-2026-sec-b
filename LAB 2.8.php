<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task 8 - 2D Array & Nested Loop</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            margin: 40px;
            background: #fff;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 30px 0;
        }
        .outer-table {
            border: 3px solid black;
        }
        .outer-table th {
            background: #f0f0f0;
            padding: 12px;
            text-align: center;
            font-size: 18px;
            border: 2px solid black;
        }
        .outer-table td {
            padding: 20px;
            border: 2px solid black;
            vertical-align: top;
        }
        .array-box {
            background: #f8f8f8;
            border: 2px solid #999;
            padding: 15px;
            font-size: 20px;
        }
        .array-box table {
            width: 100%;
            border-collapse: collapse;
        }
        .array-box td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: center;
            font-weight: bold;
            width: 25%;
        }
        .output-table {
            width: 100%;
            border-collapse: collapse;
        }
        .output-table td {
            border: 2px solid #999;
            padding: 12px 20px;
            text-align: center;
            font-size: 26px;
            background: #f0f0f0;
        }
        pre { margin: 0; white-space: pre; }
    </style>
</head>
<body>

<h2>8. Declare a 2D array like following and print the following shapes</h2>
<p><strong>Hint: use 2D ARRAY & NESTED LOOP</strong></p>

<table class="outer-table">
    <tr>
        <th>The array to declare</th>
        <th>Shapes to print</th>
    </tr>
    <tr>
        <!-- LEFT COLUMN: Array Declaration as Table -->
        <td>
            <div class="array-box">
                <table>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>B</td>
                        <td>C</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>D</td>
                        <td>E</td>
                        <td>F</td>
                    </tr>
                </table>
            </div>
            <br>
            
        </td>

        <!-- RIGHT COLUMN: Shapes to print (2-column inner table) -->
        <td>
            <table class="output-table">
                <tr>
                    <!-- First column: Mixed numbers + letters -->
                    <td>
                        <?php
                        $array = [
                            [1, 2, 3, "A"],
                            [1, 2, "B", "C"],
                            [1, "D", "E", "F"]
                        ];

                        for ($i = 0; $i < 3; $i++) {
                            // Print decreasing numbers
                            for ($j = 0; $j < 3 - $i; $j++) {
                                echo $array[$i][$j] . " ";
                            }
                            // Print increasing letters
                            for ($j = 3 - $i; $j < 4; $j++) {
                                echo $array[$i][$j] . " ";
                            }
                            echo "<br>";
                        }
                        ?>
                    </td>

                    <!-- Second column: Only letters (A, B C, D E F) -->
                    <td>
                        A<br>
                        B C<br>
                        D E F
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>