<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Geométrica</title>
</head>
<body>
  <div class="uk-grid uk-grid-small"><!-- seleção da forma geométrica-->
    <label>Selecione a forma geométrica: </label>
    <form action="">
      <select name="formas" id="formas"> 
        <option value="selecione">--Selecione--</option>    
        <option value="cilindro">Cilindro</option> 
        <option value="circulo">Círculo</option>
        <option value="esfera">Esfera</option> 
        <option value="quadrado">Quadrado</option>    
        <option value="retangulo">Retângulo</option>
        <option value="trapezio">Trapézio</option>
        <option value="isoceles">Triangulo Isóceles</option>
        <option value="escaleno">Triangulo Escaleno</option>
        <option value="equilatero">Triangulo Equilátero</option>
      </select>
    </form>
  </div>
  <div class="selecaoUnidadeMedida width-1-1"> <!-- seleção da unidade de medida-->
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
  <input type="submit" value="Calcular">
</body>
</html>