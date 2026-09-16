<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pythagorean Theorem Calculator</title>
</head>
<body>
    <h1>Pythagorean Theorem Calculator</h1>
    <form id="pythagoreanForm">
        <label for="a">Side A:</label>
        <input type="number" id="a" name="a" required><br><br>
        
        <label for="b">Side B:</label>
        <input type="number" id="b" name="b" required><br><br>
        
        <button type="submit">Calculate Side C</button>
    </form>
    <p>Result: <span id="result"></span></p>

    <script>
        document.getElementById('pythagoreanForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const a = parseFloat(document.getElementById('a').value);
            const b = parseFloat(document.getElementById('b').value);
            const c = Math.sqrt(a * a + b * b);
            document.getElementById('result').innerText = `Side C: ${c.toFixed(2)}`;
        });
    </script>
</body>
</html>