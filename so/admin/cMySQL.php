<?php

class cMySQL{
	
	//Properties
	protected $_oDBConn = null;
	protected $_bConnStatus = false;
	protected $_sPDOError = '';
    protected $_bAutoCommit;
    protected $_bDebug = FALSE;
	
	public function __construct($sDBServer = null, $sDBName = null, $sDBUser = null, $sDBPass = null, $bDebug = NULL, $sDBPort = '3306'){
		if (! empty($bDebug)) $this->_bDebug = $bDebug;
		try{
			//Initialize a PDO DB connection
			$this->_oDBConn = new PDO('mysql:host=' . $sDBServer . ';port=' . $sDBPort . ';dbname=' . $sDBName, $sDBUser, $sDBPass);
			$this->_bConnStatus = true;
            $this->_bAutoCommit = true;
		}catch(PDOException $ex){
			$this->_bConnStatus = false;
			$this->_sPDOError = $ex->getMessage();
		}
		// trigger_error('cMySQL Loaded');
	}
	
	//Public Functions
	public function execQ($sQuery, $arValues = array(), $file = 'file', $line = 0){
		try{
			$stmt = $this->_oDBConn->prepare($sQuery);
			if(!is_null($arValues) && is_array($arValues)){
				foreach($arValues as $key => $value){
					$stmt->bindValue(':' . $key, $value);
				}
			}
			if($stmt->execute() === false) {
				$this->_sPDOError = $stmt->errorInfo();
				$this->_sPDOError = $this->_sPDOError[2];
				return false;
			}
			
			$sQueryType = $this->getQueryType($sQuery);
			
			switch($sQueryType){
				case 'SELECT':
					return $stmt->fetchAll(PDO::FETCH_ASSOC);
					break;
				case 'INSERT':
					return $this->_oDBConn->lastInsertId();
					break;
				case 'UPDATE':
					return $stmt->rowCount();
					break;	
				case 'DELETE':
					return $stmt->rowCount();
					break;
				case 'REPLACE':
					return $stmt->rowCount();
					break;
			}
		}catch(PDOException $ex){
			$this->_sPDOError = $ex->getMessage();
			trigger_error('PDO Error: '.$ex->message.' ['.$file.'-'.$line.']', E_USER_WARNING);
			trigger_error('SQL: '.$sql, E_USER_WARNING);
			return false;
		}
	}
    
    public function getAutoCommitStatus(){
       return $this->_bAutoCommit;
    }
    
	
	public function valueExists($sTable, $sColumn, $sValue){
		$sQuery = 'SELECT COUNT(*) AS records FROM `$sTable` WHERE `' . $sColumn . '` = :value';
		$arValues = array('value' => $sValue );
		try{
			$stmt = $this->_oDBConn->prepare($sQuery);
			if(is_array($arValues)){
				foreach($arValues as $key => $value){
					$stmt->bindValue(':' . $key, $value);
				}
			}
			$stmt->execute();			
			$row = $stmt->fetch();
			$iRowCount = $row['records'];
			if($iRowCount == 0){
				return false;
			}else{
				return true;
			}
		}catch(PDOException $ex){
			$this->_sPDOError = $ex->getMessage();
		}
	}
	
	public function closeConnection(){
		$this->_oDBConn = null;
	}
	
	public function getPDOError(){
		return $this->_sPDOError;
	}
		
	public function getQueryType($sQuery){
		$arChunks = explode( ' ', trim( $sQuery ) );
		return strtoupper($arChunks[0]);
	}

	function createInsert($table, $fields)
	{
		$ins_clause = 'INSERT INTO `'.$table.'` (';
		$val_clause = ' VALUES (';
		foreach ($fields as $title => $value)
		{
			$ins_clause .= '`'.$title.'`, ';
			$val_clause .= ':'.$title.', ';
		}
		// removes trailing comma & space, closes parens
		return substr($ins_clause, 0, -2).') '.substr($val_clause, 0, -2).') ';
	}
}


?>
