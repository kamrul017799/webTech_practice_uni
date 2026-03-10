<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="calculator">

   
    <input type="text" id="display" disabled>

    
    <div class="buttons">

        <button onclick="add('7')">7</button>
        <button onclick="add('8')">8</button>
        <button onclick="add('9')">9</button>
        <button onclick="add('/')">/</button>

        <button onclick="add('4')">4</button>
        <button onclick="add('5')">5</button>
        <button onclick="add('6')">6</button>
        <button onclick="add('*')">*</button>

        <button onclick="add('1')">1</button>
        <button onclick="add('2')">2</button>
        <button onclick="add('3')">3</button>
        <button onclick="add('-')">-</button>

        <button onclick="add('0')">0</button>
        <button onclick="clearDisplay()">C</button>
        <button onclick="calculate()">=</button>
        <button onclick="add('+')">+</button>

    </div>

</div>

<script >

function add(value)
{
    document.getElementById("display").value += value;
}

function clearDisplay()
{
    document.getElementById("display").value = "";
}

function calculate()
{
    var result = document.getElementById("display").value;
    document.getElementById("display").value = eval(result);
}

</script>

</body>
</html>