<?php 

namespace Singleton;

class LogsSingleton
{
    /** @var self $instancia Instancia da classe logs. */

    protected static $instancia;

    public static function obterInstancia() : self
    {
        if(empty(self::$instancia))
        {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    public function gravarLog(array $dados)
    {
        $nomeArquivo = 'logs.txt';
        $logsAnteriores = [];

        if(filesize($nomeArquivo) > 0)
        {
            $conteudoDoArquivo = file_get_contents($nomeArquivo);
            $logsAnteriores = json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriores[] = $dados;
        $arquivo = fopen($nomeArquivo, 'w');

        fwrite($arquivo, json_encode($logsAnteriores));

        fclose($arquivo);
    }

    private function __construct(){} // default implementation ignored

    private function __clone(){}

    private function __wakeup(){}

}

?>