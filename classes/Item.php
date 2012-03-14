<?php

require_once("DataObject.php");
require_once("Game.php");
require_once("Sport.php");
require_once("League.php");

class Item extends DataObject {
    
    private $_id;
    private $_description;
    private $_sport;
    private $_league;
    
    private $_type;
    private $_price;
    private $_start_date;
    private $_end_date;
    
    private $_purchases;
    
    public function __construct($id=null){
        $this->_id = $id;
    }
    
    public static function exists($item){
        // verify if the given item id exists
        
        // "IF EXISTS (SELECT * FROM " . TBL_ITEMS . " WHERE id = :id) select 1 else select 0";
        $conn = parent::connect();
        $sql = "SELECT EXISTS (SELECT * FROM " . TBL_ITEMS . " WHERE id = :id)";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue(":id", $item, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect( $conn );
            
            if ($row[0]){
                return true;
            } else {
                return false;
            }
        
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
    }
    
    /**
     * Search if an item exists with the characteristics specified
     * @param int $sport
     * @param string $league
     * @param string $typeb D, W, M, S
     * @param string $price
     * @param string $start_date
     * @return bool true if found
    **/
    public static function search($sport, $league, $type, $price, $start_date){
        $conn = parent::connect();
        $sql = "SELECT * FROM " . TBL_ITEMS . " WHERE sport = :sport AND league = :league AND type = :type AND price = :price AND start_date = :start_date";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue(":sport", $sport, PDO::PARAM_INT);
            $st->bindValue(":league", $league, PDO::PARAM_STR);
            $st->bindValue(":type", $type, PDO::PARAM_STR);
            $st->bindValue(":price", $price, PDO::PARAM_STR);
            $st->bindValue(":start_date", $start_date, PDO::PARAM_STR);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect( $conn );
            
            if ($row['id']){
                return $row['id'];
            } else {
                return false;
            }
        
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
    }
    
    ## FUNCTIONS FOR LOADING THE ITEM ID
    public function load(){
        // loads all the info regarding the item
        
        $conn = parent::connect();
        $sql = "SELECT * FROM " . TBL_ITEMS . " WHERE id = :id";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue(":id", $this->_id, PDO::PARAM_INT);
            $st->execute();
            $row = $st->fetch();
            parent::disconnect( $conn );
                
                $this->_description = $row['description'];
                $this->_sport = $row['sport'];
                $this->_league = $row['league'];
                $this->_type = $row['type'];
                $this->_price = $row['price'];
                $this->_start_date = $row['start_date'];
                $this->_end_date = $row['end_date'];
                $this->_purchases = $row['purchases'];
                
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }    
    }
    
    public function details(){
        // returns an ordered array with the item details
        $details = array();
        $details['id'] = $this->_id;
        $details['description'] = $this->_description;
        $details['sport'] = Sport::getName( $this->_sport );
        $details['league'] = League::getName( $this->_league );
        
        $details['type'] = $this->_type;
        $details['price'] = $this->_price;
        
        $details['start_date'] = $this->_start_date;
        $details['end_date'] = $this->_end_date;
        
        $details['purchases'] = $this->_purchases;
        
        return $details;
    }
    
    public function getGamesArray(){
        // loads all the games included in the item as an array of id's
        
        $conn = parent::connect();
        $sql = "SELECT id FROM " . TBL_GAMES . " WHERE sport = :sport AND league = :league AND event_date >= :start_date AND event_date <= :end_date LIMIT :limit";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":sport", $this->_sport, PDO::PARAM_INT);
            $st->bindValue( ":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue( ":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue( ":end_date", $this->_end_date, PDO::PARAM_STR);
            $st->bindValue( ":limit", GAMES_PER_PAGE_LIMIT, PDO::PARAM_INT);
            $st->execute();
            
            $games = array();
            foreach( $st->fetchAll() as $row ){
                $games[] = $row['id'];
            }
            parent::disconnect( $conn );
            
            return $games;
        
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }  
    }
    
    public function getGames(){
        // loads all the games included in the item as an array of Game Objects
        
        $conn = parent::connect();
        $sql = "SELECT id FROM " . TBL_GAMES . " WHERE sport = :sport AND league = :league AND event_date >= :start_date AND event_date <= :end_date LIMIT :limit";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":sport", $this->_sport, PDO::PARAM_INT);
            $st->bindValue( ":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue( ":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue( ":end_date", $this->_end_date, PDO::PARAM_STR);
            $st->bindValue( ":limit", GAMES_PER_PAGE_LIMIT, PDO::PARAM_INT);
            $st->execute();
            
            $games = array();
            foreach( $st->fetchAll() as $row ){
                $games[] = new Game( $row['id'] );
            }
            parent::disconnect( $conn );
            
            return $games;
        
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }  
    }
    
    public function getGamesArrayByDate(){
        // returns an array with the games ordered by date
        
        $conn = parent::connect();
        $sql = "SELECT id, event_date FROM " . TBL_GAMES . " WHERE sport = :sport AND league = :league AND event_date >= :start_date AND event_date <= :end_date ORDER BY event_date LIMIT :limit ";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":sport", $this->_sport, PDO::PARAM_INT);
            $st->bindValue( ":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue( ":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue( ":end_date", $this->_end_date, PDO::PARAM_STR);
            $st->bindValue( ":limit", GAMES_PER_PAGE_LIMIT, PDO::PARAM_INT);
            $st->execute();
            
            $games = array();
            
            foreach( $st->fetchAll() as $row ){
                if( array_key_exists( $row['event_date'], $games) ){
                    $games[ $row['event_date'] ][] = $row['id'];
                } else {
                    $games[ $row['event_date'] ] = array();
                    $games[ $row['event_date'] ][] = $row['id'];
                }
            }
            parent::disconnect( $conn );
            
            return $games;
        
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        } 
        
    }
    
    public function getGamesByDate(){
        // returns an array with the games OBJECTS ordered by date
        
        $conn = parent::connect();
        $sql = "SELECT id, event_date FROM " . TBL_GAMES . " WHERE sport = :sport AND league = :league AND event_date >= :start_date AND event_date <= :end_date ORDER BY event_date LIMIT :limit ";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":sport", $this->_sport, PDO::PARAM_INT);
            $st->bindValue( ":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue( ":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue( ":end_date", $this->_end_date, PDO::PARAM_STR);
            $st->bindValue( ":limit", GAMES_PER_PAGE_LIMIT, PDO::PARAM_INT);
            $st->execute();
            
            $games = array();
            
            foreach( $st->fetchAll() as $row ){
                if( array_key_exists( $row['event_date'], $games) ){
                    $games[ $row['event_date'] ][] = new Game($row['id']);
                } else {
                    $games[ $row['event_date'] ] = array();
                    $games[ $row['event_date'] ][] = new Game($row['id']);
                }
            }
            parent::disconnect( $conn );
            
            return $games;
        
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        } 
        
    }
    
    public function getGamesDetailsByDate(){
        // returns an array with the games DETAILS ordered by date
        
        $conn = parent::connect();
        $sql = "SELECT id, event_date FROM " . TBL_GAMES . " WHERE sport = :sport AND league = :league AND ( event_date BETWEEN :start_date AND :end_date ) ORDER BY event_date";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":sport", $this->_sport, PDO::PARAM_INT);
            $st->bindValue( ":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue( ":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue( ":end_date", $this->_end_date, PDO::PARAM_STR);
            /* $st->bindValue( ":limit", GAMES_PER_PAGE_LIMIT, PDO::PARAM_INT); */
            $st->execute();
            
            $games = array();
            
            foreach( $st->fetchAll() as $row ){
                $game = new Game( $row['id'] );
                $game->load();
                if( array_key_exists( $row['event_date'], $games) ){
                    $games[ $row['event_date'] ][] = $game->details();
                } else {
                    $games[ $row['event_date'] ] = array();
                    $games[ $row['event_date'] ][] = $game->details();
                }
            }
            parent::disconnect( $conn );
            
            return $games;
        
        } catch ( PDOException $e ) {
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        } 
        
    }
    
    # FUNCTIONS FOR SAVING / CREATING A NEW ITEM
    public static function nextID(){
        // check the db for the last id and generate the next one
        $conn = parent::connect();
        $sql = "SELECT max(id) FROM " . TBL_ITEMS ;
        
        try {
            $st = $conn->prepare( $sql );
            $st->execute();
            $row = $st->fetch();
            parent::disconnect( $conn );
            
            return $row[0] + 1;
        
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }    
        
        return false;
        
    }
    
    public function addPurchase(){
        // adds one purchase to the item.
        $this->_purchases += 1;
    }
    
    public function setID($id){
        $this->_id = $id;
    }
    
    public function setParameter($parameter, $value){
        switch($parameter){
            case 'description':
                $this->_description = $value;
                break;
            case 'sport':
                $this->_sport = $value;
                break;
            case 'league':
                $this->_league = $value;
                break;
            case 'type':
                $this->_type = $value;
                break;
            case 'price':
                $this->_price = $value;
                break;
            case 'start_date':
                $this->_start_date = $value;
                break;
            case 'end_date':
                $this->_end_date = $value;
                break;
            case 'purchases':
                $this->_purchases = $value;
                break;
        }
    }
    
    public function save(){
        // save the current item id based on the parameters given
        $conn = parent::connect();
        $sql = "INSERT INTO " . TBL_ITEMS . " (id, description, sport, league, type, price, start_date, end_date, purchases)
                        VALUES (:id, :description, :sport, :league, :type, :price, :start_date, :end_date, :purchases)";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue(":id", $this->_id, PDO::PARAM_INT);
            $st->bindValue(":description", $this->_description, PDO::PARAM_STR);
            $st->bindValue(":sport", $this->_sport, PDO::PARAM_STR);
            $st->bindValue(":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue(":type", $this->_type, PDO::PARAM_STR);
            $st->bindValue(":price", $this->_price, PDO::PARAM_STR);
            $st->bindValue(":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue(":end_date", $this->_end_date, PDO::PARAM_STR);
            $st->bindValue(":purchases", $this->_purchases, PDO::PARAM_INT);
            $st->execute();
            parent::disconnect( $conn );
            
            return true;
        
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
        
        return false;
        
    }
    
    public function update(){
        // save the current item id based on the parameters given
        $conn = parent::connect();
        $sql = "UPDATE " . TBL_ITEMS . " SET id = :id, description = :description, sport = :sport, league = :league, type = :type,
                                        price = :price, start_date = :start_date, end_date = :end_date, purchases = :purchases
                                        WHERE id = :id";
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue(":id", $this->_id, PDO::PARAM_INT);
            $st->bindValue(":description", $this->_description, PDO::PARAM_STR);
            $st->bindValue(":sport", $this->_sport, PDO::PARAM_STR);
            $st->bindValue(":league", $this->_league, PDO::PARAM_STR);
            $st->bindValue(":type", $this->_type, PDO::PARAM_STR);
            $st->bindValue(":price", $this->_price, PDO::PARAM_STR);
            $st->bindValue(":start_date", $this->_start_date, PDO::PARAM_STR);
            $st->bindValue(":end_date", $this->_end_date, PDO::PARAM_STR);
            $st->bindValue(":purchases", $this->_purchases, PDO::PARAM_INT);
            $st->execute();
            parent::disconnect( $conn );
            
            return true;
        
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
        
        return false;
        
    }
    
    
    ### VIEW ITEMS FUNCTIONS
    public static function recent(){
        $conn = parent::connect();
        $sql = "SELECT id FROM " . TBL_ITEMS . " ORDER BY start_date DESC LIMIT 50";
        
        try {
            $st = $conn->prepare( $sql );
            $st->execute();
            $results = $st->fetchAll();
            parent::disconnect( $conn );
            
            $ids = array();
            foreach($results as $row){
                $ids[] = $row['id'];
            }
            
            return $ids;
                
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
        
        return false;
    }
    
    public static function recentFiltered($sport=false, $league=false){
        
        if($sport && $league){
            $sql = "SELECT id FROM " . TBL_ITEMS . " WHERE sport = :sport AND league = :league ORDER BY start_date DESC LIMIT 50";
        } elseif($sport){
            $sql = "SELECT id FROM " . TBL_ITEMS . " WHERE sport = :sport ORDER BY start_date DESC LIMIT 50";
        } elseif($league){
            $sql = "SELECT id FROM " . TBL_ITEMS . " WHERE league = :league ORDER BY start_date DESC LIMIT 50";
        } else return false;
        
        $conn = parent::connect();
        
        try {
            $st = $conn->prepare( $sql );
            if($sport) $st->bindValue('sport', $sport, PDO::PARAM_INT);
            if($league) $st->bindValue('league', $league, PDO::PARAM_STR);
            $st->execute();
            $results = $st->fetchAll();
            parent::disconnect( $conn );
            
            $ids = array();
            foreach($results as $row){
                $ids[] = $row['id'];
            }
            
            return $ids;
                
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        }
        
        return false;
    }
    
    public static function delete($id){
        $conn = parent::connect();
        $sql = "DELETE FROM " . TBL_ITEMS . " WHERE id = :id";
        
        
        try {
            $st = $conn->prepare( $sql );
            $st->bindValue("id", $id, PDO::PARAM_INT);
            $st->execute();
            parent::disconnect( $conn );
            
            return true;
                
        } catch ( PDOException $e ){
            parent::disconnect( $conn );
            die( "Query failed: " . $e->getMessage() );
        } 
        
        return false;
    }
    
}