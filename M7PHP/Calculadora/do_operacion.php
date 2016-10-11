<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Solucion</title>
</head>
<body>
<div id="header">
    <ul>
        <li><a href="calculadoraHtml.html">Calculadora</a></li>
    </ul>

    <div id="Sumar">
    <h2>La suma de los dos números es: <?php echo $_POST['primerOperador'] + $_POST['segundoOperador'];?></h2>
    </div>
    <div id="Restar">
        <h2>La suma de los dos números es: <?php echo $_POST['primerOperador'] - $_POST['segundoOperador'];?></h2>
    </div>
    <div id="Multiplicar">
        <h2>La suma de los dos números es: <?php echo $_POST['primerOperador'] * $_POST['segundoOperador'];?></h2>
    </div>
    <div id="Dividir">
        <h2>La suma de los dos números es: <?php echo $_POST['primerOperador'] / $_POST['segundoOperador'];?></h2>
    </div>
</body>
</html>