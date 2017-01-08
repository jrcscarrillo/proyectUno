<?php

use Phalcon\Di\FactoryDefault;

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers
     * the services that provide a full stack framework.
     */
    $di = new FactoryDefault();

    /**
     * Read services
     */
    include APP_PATH . "/config/services.php";

    /**
     * Get config service for use in inline setup below
     */
    $config = $di->getConfig();

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);
//      print_r($di);
//      que_hay_en_di($di);
    
    echo $application->handle()->getContent();
} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}

function object_to_array($data) {
    if (is_array($data) || is_object($data)) {
        $result = array();
        foreach ($data as $key => $value) {
            echo "$key : $value";
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}
function que_hay_en_di($di) {
  
/**
 * El acceso a la clase Default Factory la hemos podido realizar solo accesando a la parte 'config'
 * primero cambiamos el string en la variable $di con json_encode
 * y despues podemos convertir a un objeto json o a un arreglo json
 * y accesar a cada propiedad en la clase
 */
    
    $variable = 'database';
    $clase = json_encode($di['config']);
    $clase_a = json_decode($clase, true);
    $clase_o = json_decode($clase, false);
    foreach ($clase_o->$variable as $k => $v) {
        echo "Campo $k : \t\tContenido $v<br>";
    }
    file_put_contents('salida.json', $clase);
}