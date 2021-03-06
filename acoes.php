
<?php //687f3d8305a7d6b7c0199f504446559b - My key 
// api.openweathermap.org/data/2.5/weather?q={CIDADE}&appid={MYKEY}

require_once __DIR__ . "/vendor/autoload.php";

session_start();

use jpdik\Request;

define("API_KEY", "687f3d8305a7d6b7c0199f504446559b");
define("LANG", "&lang=pt_br");
define("UNITS", "&units=metric");

header('Content-type:application/json;charset=utf-8');


if ($_GET['acao'] == 'obter_tempo') {


$req = new Request("https://api.openweathermap.org/data/2.5");

$res = $req->get("/weather", "?q=$_POST[campo]&appid=" . API_KEY . UNITS . LANG);

$status = $req->getStatusCode();

if ($status == 200 && $res) {
  $_SESSION['tempo'] = $res;
  header('Location: tempo.php');
} else if ($status == 404) {
  $_SESSION['message'] = "Cidade não encontrada";
  header('Location: index.php');
} else {
  error_log($status);
  if ($res) {
    error_log(json_encode($res));
  }
  header('Location: index.php?message=Ocorreu um problema. Tente novamente mais tarde.');
}

}
