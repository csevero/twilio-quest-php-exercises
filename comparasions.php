<?php 

//a criação de variável no php é com o dólar na frente e o nome da variavel em frente $teste

function isABotCheck($isABot)
{
  //verificando se o isABot var passada via params é true
  if ($isABot === true) {
    return true;
  }
  return false;
}

function passwordCheck($providedPassword, $actualPassword)
{
  //verificando se a senha atual é diferente da que foi passada
  if (!($providedPassword === $actualPassword)) {
    return false;
  }
  return true;
}

function securityAnswerCheck($actualAnswer, $providedAnswer)
{
  //o strpos basicamente é similar ao includes do javascript onde ele vai primeiro comparar o primeiro parametro com com o segundo e ver se tem alguma parte do segundo dentro do primeiro, se sim ele retorna true
  $pos = strpos($actualAnswer, $providedAnswer);

  if ($pos === false) {
    return false;
  } else {
    return true;
  }
}

function passwordTriesHitLimit($tries)
{
  $limit = 5;
  if ($tries > $limit || $tries < 0) {
    return true;
  } else {
    return false;
  }
}

$isABot = isABotCheck(false);
$passwordCheck = passwordCheck('teste123', 'teste123');
$securityAnswerCheck = securityAnswerCheck('abc', 'd');
$passwordTries = passwordTriesHitLimit(-6);

//print printa algo na tela, similar ao echo
print 'is a bot check: ';
//var_dump printa informações sobre a variável (tipo e valor)
var_dump($isABot);
print 'password check: ';
var_dump($passwordCheck);
print 'security answer: ';
var_dump($securityAnswerCheck);
print 'password tries: ';
var_dump($passwordTries);
?>