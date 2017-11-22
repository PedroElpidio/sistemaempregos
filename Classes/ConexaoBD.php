<?php

/**
 * Classe que efetua a conexao com o banco de dados.
 *
 * @author pedro
 */
class ConexaoBD {


    private static $dsn = null; //Usando apensa para depuração da conexão
    private static $host = HOST; //  Local onde está o banco de dados
    private static $usuario = USUARIO; // Usuario de acesso ao banco
    private static $senha =SENHA; // Senha de acesso ao banco
    private static $banco = BANCO; // Nome do Banco de Dados


   
    private static $conexao = null ; // Conexão com o Banco

    //So vamos executar a conexão se $conexao = null;
    // Se $conexao != null usamos a conexão ja criada, isso é singleton.


    /** 
     * Conecta com o banco de dados usando o padrão singleton
     * Retorna um objeto PDO
     */
    public static function Conectar(){
        try {
            if(self::$conexao == null):
                //Montando o DSN para a conexão com o banco
                $dsn='mysql:host=' .self::$host. ';dbname=' .self::$banco;
                self::$dsn = $dsn; // Para fins de depuração
                //Setando codificação utf-8 no banco de dados;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8'];
                self::$conexao= new PDO($dsn, self::$usuario, self::$senha, $options);
            endif;
        } catch (PDOException $erro) {
            BackEndErros($erro->getCode(), $erro->getMessage(), $erro->getFile(), $erro->getLine());
            die;
        }
        
        self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conexao;
    }

    static function ObterConexao(){
        return self::Conectar();
    }

    public function VerAtributos(){
        echo "<hr>";
        echo "Dados de conexao com o banco <br>";
        echo" HOST:";
        var_dump(self::$host);
        echo "USUARIO: ";
        var_dump(self::$usuario);
        echo"SENHA: ";
        var_dump(self::$senha);
        echo"DSN: ";
        var_dump(self::$dsn);
        echo "CONEXAO: ";
        var_dump(self::$conexao);
    }

    public function VerObjeto(){
        var_dump($this);
        echo '<hr>';
    }
}


