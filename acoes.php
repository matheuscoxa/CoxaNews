
<?php //687f3d8305a7d6b7c0199f504446559b - My key 
// api.openweathermap.org/data/2.5/weather?q={CIDADE}&appid={MYKEY}

require_once __DIR__ . "/../../vendor/autoload.php";

session_start();

use jpdik\Request;

define("API_KEY", "687f3d8305a7d6b7c0199f504446559b");

header('Content-type:application/json;charset=utf-8');


if ($_GET['acao'] == 'obter_tempo') {


$req = new Request("https://api.openweathermap.org/data/2.5");

$res = $req->get("/weather", "?q=$_POST[campo]&appid=" . API_KEY);

$status = $req->getStatusCode();

if ($status == 200 && $res) {
  $_SESSION['tempo'] = $res;
  header('Location: tempo.php');
} else if ($status == 404) {
  header('Location: index.php?message=Cidade não encontrada');
} else {
  error_log($status);
  if ($res) {
    error_log(json_encode($res));
  }
  header('Location: index.php?message=Ocorreu um problema. Tente novamente mais tarde.');
}

}
