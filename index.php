<? include 'algo.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!--Linka o arquivo css-->
    <title>Calculadora Geométrica</title>
</head>

<body>
    <div class="mainBackground">
        <div class="mainHeader">
            <h1>Calculadora Geométrica</h1>
        </div>

        <div class="seuNome">
            <form class="entradaDados" method="post" action="algo.php">
                <label>Seu Nome: </label>
                <input type="text" name="nomeUsuario" id="nomeUsuario">
        </div>

        <div class="selecaoFormaGeometrica"><!-- seleção da forma geométrica-->
            <label>Forma geométrica: </label>            
                <select  name="forma" id="forma">
                    <option name="selecione" value="selecione">--Selecione--</option>
                    <option value="cilindro">Cilindro</option>
                    <option value="circulo">Círculo</option>                    
                    <option value="quadrado">Quadrado</option>                                       
                    <option value="equilatero">Triangulo Equilátero</option>
                    <option value="isoceles">Triangulo Isóceles</option>
                    <option value="triangRetangulo">Triangulo Retângulo</option>
                </select>
        </div>

        <div class="selecaoUnidadeMedida width-1-1"> <!-- seleção da unidade de medida-->
            <label>Unidade de medida:</label><br>
            <select name="unidadeMedida" id="unidadeMedida">
                <option value="selecione">--Selecione--</option>
                <option value="metro">Metro</option>
                <option value="centimetro">Centímetro</option>
            </select>
        </div>
        
        <div class="formCilindro"> <!-- Entrada de dados dos parâmetros do Cilindro-->
        <br><br>
            <form class="entradaCilindro" >
                <label for="raio">Raio (a):</label>
                <input type="text" name="raio" id="raio"><br>
                <label for="altura">Altura (b):</label>
                <input type="text" name="altura" id="altura">
            </form>
        </div>

        <div class="formCirculo"> <!-- Entrada de dados dos parâmetros do Circulo-->
        <br><br>
            <form class="entradaCirculo" >
                <label for="raio">Raio (a):</label>
                <input type="number" name="raio" id="raio"><br>                
            </form>
        </div>

        <div class="formQuadrado"> <!-- Entrada de dados dos parâmetros do Quadrado-->
        <br><br>
            <form class="entradaQuadrado" >
                <label for="base">Base (a):</label>
                <input type="number" name="base" id="base"><br>
                <label for="altura">Altura (b):</label>
                <input type="number" name="altura" baseid="altura"><br>  
                <label for="profundidade">Profundidade (c):</label>
                <input type="number" name="profundidade" id="profundidade"><br>                  
            </form>
        </div>

        <div class="formEquilatero"> <!-- Entrada de dados dos parâmetros do Triangulo Equilatero-->
        <br><br>
            <form class="entradaEquilatero" >                
                <label for="altura">Altura (a):</label>
                <input type="number" name="altura" baseid="altura"><br>  
                <label for="profundidade">Profundidade (b):</label>
                <input type="number" name="profundidade" id="profundidade"><br>                  
            </form>
        </div>

        <div class="formIsosceles"> <!-- Entrada de dados dos parâmetros do Triangulo Isosceles-->
        <br><br>
            <form class="entradaIsosceles" >                
                <label for="base">Base (a):</label>
                <input type="number" name="base" id="base"><br>
                <label for="altura">Altura (b):</label>
                <input type="number" name="altura" baseid="altura"><br>  
                <label for="profundidade">Profundidade (c):</label>
                <input type="number" name="profundidade" id="profundidade"><br>                 
            </form>
        </div>

        <div class="formRetangulo"> <!-- Entrada de dados dos parâmetros do Triangulo Retangulo-->
        <br><br>
            <form class="entradaRetangulo" >                
                <label for="base">Base (a):</label>
                <input type="number" name="base" id="base"><br>
                <label for="altura">Altura (b):</label>
                <input type="number" name="altura" baseid="altura"><br>  
                <label for="profundidade">Profundidade (c):</label>
                <input type="number" name="profundidade" id="profundidade"><br>                 
            </form>
        </div>

        <br><br>
        <div class="parametrosForma">
            <input id="button" type="submit" value="Calcular">
            <input onclick="myFunction()" class="res" name="res" id="button" type="reset" value="Reset">
        </div>
            </form>
    </div>    
    <script>
       /* function myFunction() {
            document.getElementById("");
        }*/
    </script>
</body>

</html>