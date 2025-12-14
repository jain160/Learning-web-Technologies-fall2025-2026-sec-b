<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 7 - Shapes with Nested Loops</title>
    <style>
        body { font-family: Consolas, monospace; margin: 40px; background: #f9f9f9; }
        h2 { color: #2c3e50; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        td { border: 2px solid #333; padding: 20px; text-align: center; vertical-align: top; background: white; }
        pre { margin: 0; font-size: 24px; line-height: 1.4; white-space: pre; }
    </style>
</head>
<body>


<table>
    <tr>
        <td>
            <pre><?php
            for ($i = 1; $i <= 3; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "\n";
            }
            ?></pre>
        </td>
        <td>
            <pre><?php
            for ($i = 3; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $j . " ";
                }
                echo "\n";
            }
            ?></pre>
        </td>
        <td>
            <pre><?php
            $char = 65; // 'A'
            for ($i = 1; $i <= 3; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo chr($char++) . " ";
                }
                echo "\n";
            }
            ?></pre>
        </td>
    </tr>
</table>

</body>
</html>