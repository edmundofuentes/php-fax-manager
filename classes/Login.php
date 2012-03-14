<?

// LOGIN para estudiantes.  El panel de administradores se manejara desde otra parte

require_once( "DataObject.php" );

class Login extends DataObject {

    private $_id;
    private $_username;
    private $_password;
    private $_passmd5;

    private $_errors;
    private $_access;
    private $_login;
    private $_token;

    public function __construct() {
        $this->_errors = array();
        $this->_login  = isset($_POST['login'])? 1 : 0;
        $this->_access = 0;
        // $this->_token  = $_POST['token'];
        $this->_token  = ($this->_login) ? $_POST['token'] : $_SESSION['token'];
    
        $this->_id       = 0;
        $this->_username = ($this->_login)? $this->filter($_POST['username']) : $_SESSION['username'];
        $this->_password = ($this->_login)? $this->filter($_POST['password']) : '';
        $this->_passmd5  = ($this->_login)? md5($this->_password) : $_SESSION['password'];
    }

    public function isLoggedIn() {
        ($this->_login)? $this->verifyPost() : $this->verifySession();
    
        return $this->_access;
    }

    public function filter($var) {
        return preg_replace('/[^a-zA-Z0-9]/','',$var);
    }

    public function verifyPost() {
        try {
            if(!$this->isTokenValid())
                throw new Exception('Invalid Form Submission');

            if(!$this->isDataValid())
                throw new Exception('Invalid Form Data');

            if(!$this->verifyDatabase())
                throw new Exception('Invalid Username/Password');
                
            $this->_access = 1;
            $this->registerSession();
        
        } catch(Exception $e) {
             $this->_errors[] = $e->getMessage();
        }
    }

    public function verifySession() {
        if($this->sessionExist() && $this->verifyDatabase())
            $this->_access = 1;
    }
    
    public function verifyDatabase() {
        
        require_once( "../config/db.php" );
        
        $conn = parent::connect();
        $sql = "SELECT id FROM " . TBL_USERS . " WHERE username = :username AND password = :passmd5";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":username", $this->_username, PDO::PARAM_STR);
            $st->bindValue( ":passmd5", $this->_passmd5, PDO::PARAM_STR);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect( $conn );
            
            if ( $row ){
                $this->_id = $row['id'];
                return True;
            } else {
                return False;
            }
            
        } catch (PDOException $e) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage );
        }
        
    }
    
    public function isDataValid() { // re-check the reg.exp. search, make passwords longer.
        return (preg_match('/^[a-zA-Z0-9]{5,12}$/',$this->_username) && preg_match('/^[a-zA-Z0-9]{5,12}$/',$this->_password))? 1 : 0;
    }

    public function isTokenValid() {
        return (!isset($_SESSION['token']) || $this->_token != $_SESSION['token'])? 0 : 1;
    }

    public function registerSession() {
        $_SESSION['ID'] = $this->_id;
        $_SESSION['username'] = $this->_username;
        $_SESSION['password'] = $this->_passmd5;
    }
    
    public function getUserId(){
        return $this->_id;
    }
    
    public function sessionExist() {
        return (isset($_SESSION['username']) && isset($_SESSION['password']))? 1 : 0;
    }

    public function showErrors() { 
        foreach($this->_errors as $key=>$value){
            $string = $value;
        }
        return $string;
    }

}