<?include 'getInput.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!--Linka o arquivo css-->
    <title>Calculadora Geométrica</title>
</head>
<body>
    <div>
        <h1 style="text-align: center;">Calculadora Geométrica</h1>
    </div>
    <div class="uk-grid uk-grid-small" style="text-align: center;"><!-- seleção da forma geométrica-->
        <label>Selecione a forma geométrica: </label>
        <form class="entradaDados" method="get" action="getInput.php">
            <select name="forma" id="forma"> 
                <option name="selecione" value="selecione">--Selecione--</option>    
                <option value="cilindro">Cilindro</option> 
                <option value="circulo">Círculo</option>
                <option value="esfera">Esfera</option> 
                <option value="quadrado">Quadrado</option>    
                <option value="retangulo">Retângulo</option>
                <option value="trapezio">Trapézio</option>
                <option value="equilatero">Triangulo Equilátero</option>
                <option value="isoceles">Triangulo Isóceles</option>
                <option value="triangRetangulo">Triangulo Retângulo</option>
            </select>        
    </div>
    <div class="selecaoUnidadeMedida width-1-1" style="text-align: center;"> <!-- seleção da unidade de medida-->
        <label>Selecione a unidade de medida:</label><br>                     
        <select name="unidadeMedida" id="unidadeMedida">
            <option value="selecione">--Selecione--</option>   
            <option value="metro">Metro</option> 
            <option value="centimetro">Centímetro</option>
        </select>        
    </div>
    <div>
        <!-- Inserção dos parâmetros da forma-->
    </div>
    <br><br>
    <div class="parametrosForma"  style="text-align: center;">
        <input type="submit" value="Calcular">
        <input name="res" type="reset" value="Reset">
    </div>
    </form>
  
</body>
</html>