<?php
//formulas matemáticas
//Triângulo retângulo, o usuário entrará com 2 lados do triangulo e o
#software mostrara a hipotenusa, area e perimetro
class calculaForma
{
    public $raio, $altura, $base, $profundidade;

    //calculo do volume do cilindro
    function volumeCilindro($raio,$altura)
    {        
        return pi() * pow($raio,2) * $altura; //πa²b        
    }
	
    //calculo da área da base do cilindro
    function areaBaseCilindro($raio){
        return pi()* pow($raio, 2); //πa²
    }

    //calculo da área lateral do cilindro
    function areaLateralCilindro($raio, $altura){
        return 2 * pi() * $raio * $altura; //2πab
    }

    //calculo da área total do cilindro
    function areaTotalCilindro($raio, $altura){
        return 2 * pi() * pow($raio,2) * 2 * pi() * $raio * $altura; //2πa²2πab
    }

    //calculo do perímetro do cilindro
    function perimetroCilindro($raio){
        return 2 * pi() * $raio; //2πa
    }

    //calculo da área do circulo
    function areaCirculo($raio){
        return pi() * pow($raio,2); //πa²
    }

    //calculo do perímetro do circulo
    function perimetroCirculo($raio){
        return 2 * pi() * $raio; //2πa
    }

    //calculo da área do quadrado
    function areaQuadrado($base, $altura){
        return $base * $altura; //ab
    }

    //calculo do volume do quadrado
    function volumeQuadrado($base, $altura, $profundidade){
        return  $base * $altura * $profundidade; //abc
    }

    //calculo do perímetro do quadrado
    function perimetroQuadrado($base, $altura){
        return (2 * $base) + (2 * $altura); //2a+2b
    }

    //calculo da área do triangulo equilatero
    function areaEquilatero($altura){
        return pow($altura,2) / sqrt(3); //a²/√3
    }

    //calculo do volume do triangulo equilatero
    function volumeEquilatero($altura, $profundidade){
        return (pow($altura,2)/3) * $profundidade; //(a²/3)b
    }

    //calculo do perímetro do triangulo equilatero
    function perimetroEquilatero($altura){
        return 3 * $altura;//3a
    }

    //calculo da área do triangulo isosceles
    function areaIsosceles($base, $altura){
        return ($base * $altura) / 2;//ab/2
    }

    //calculo do volume do triangulo isosceles
    function volumeIsosceles($base, $altura, $profundidade){
        return (($base * $altura) / 2) * $profundidade;//(ab/2)c
    }

    //calculo do perímetro do triangulo isosceles
    function perimetroIsosceles(){
        return ;//2(√(a²+(b/2)²+b)
    }

    //calculo da área do triangulo retangulo
    function areaRetangulo(){

    }

    //calculo do volume do triangulo retangulo
    function volumeRetangulo(){

    }

    //calculo do perímetro do triangulo retangulo
    function perimetroRetangulo(){
        
    }
}
