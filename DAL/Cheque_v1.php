<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Cheque
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 14.06.2019 13h
* File name : Cheque.php
* Table : comptabad.Cheque 
* -----------------------------------------------------------------------------------
*/

class Cheque extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Cheque; // PRI
    const primary_key = 'ID_Cheque'; // PRI
    protected $ID_Remise;
    protected $ID_ChequeEtat;
    protected $Numero;
    protected $Banque;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    
    protected $Parent_Remise;
    protected $Parent_ChequeEtat;

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    protected $Payement_Cheque;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Cheque' => array('ID_Cheque', 'int', '2', '0', ''),
        'ID_Remise' => array('ID_Remise', 'int', '1', '0', ''),
        'ID_ChequeEtat' => array('ID_ChequeEtat', 'int', '1', '0', ''),
        'Numero' => array('Numero', 'varchar-100', '1', '0', ''),
        'Banque' => array('Banque', 'varchar-50', '1', '0', ''),
        'Parent_Remise' => array('Parent_Remise', 'ParentObject', '1', '0', ''),
        'Parent_ChequeEtat' => array('Parent_ChequeEtat', 'ParentObject', '1', '0', ''),
        'Payement_Cheque' => array('Payement_Cheque', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Cheque` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Cheque = $this->formater($this->structure['ID_Cheque'],$row->ID_Cheque);
                    $this->structure['ID_Cheque'][4] = $this->ID_Cheque;
                    $this->ID_Remise = $this->formater($this->structure['ID_Remise'],$row->ID_Remise);
                    $this->structure['ID_Remise'][4] = $this->ID_Remise;
                    $this->ID_ChequeEtat = $this->formater($this->structure['ID_ChequeEtat'],$row->ID_ChequeEtat);
                    $this->structure['ID_ChequeEtat'][4] = $this->ID_ChequeEtat;
                    $this->Numero = $this->formater($this->structure['Numero'],$row->Numero);
                    $this->structure['Numero'][4] = $this->Numero;
                    $this->Banque = $this->formater($this->structure['Banque'],$row->Banque);
                    $this->structure['Banque'][4] = $this->Banque;
                    
                }
            }
            else
            {
                $this->isNew=1;
                $this->isToSaveOrToUpdate=1;
            }
        }

        if (is_null($this->{self::primary_key}))
        {
            $this->isNew=1;
            $this->isToSaveOrToUpdate=1;
        }
        else
        {
           $this->structure[self::primary_key][4] = $this->{self::primary_key};
        }
    }
    

    // **********************
    // Generic get & set method for this class
    // **********************

    public function __get( $property )
    {
        if ( is_callable( array($this,'get_'.(string)$property) ) )
        {
            return call_user_func( array($this,'get_'.(string)$property) );
        }
        else
        {
            throw new DALException("get for $property doesn't exists");
        }
    }

    public function __set( $property, $val )
    {
        if ( is_callable( array($this,'set_'.(string)$property) ) )
        {
            if ( $val != call_user_func( array($this,'get_'.(string)$property) ) )
            {
                call_user_func( array($this,'set_'.(string)$property), $val );
            }
        }
        else
        {
            throw new DALException( "set for $property doesn't exists");
        }
    }

    public function __isset($property = NULL)
    {
        if ( is_callable( array($this,'get_'.(string)$property) ) ) {
            $return = call_user_func( array($this,'get_'.(string)$property) );

            if(empty($return) || is_null($return))
            {
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }
        else {
            throw new DALException("get for $property doesn't exists");
        }
    }

    public function __unset($property)
    {
        if ( is_callable( array($this,'set_'.(string)$property) ) )
            return call_user_func( array($this,'set_'.(string)$property), NULL );
        else
            throw new DALException("set for $property doesn't exists");
    }
	
    // **********************
    // Specific get & set method for this class
    // **********************

    public function get_isNew()
    {
            return intval($this->isNew);
    }

    public function get_structure()
    {
            return $this->structure;		
    }
	
    public function get_ID_Cheque()
    {
        return stripslashes($this->ID_Cheque);
    }

    public function get_ID_Remise()
    {
        return stripslashes($this->ID_Remise);
    }

    public function set_ID_Remise($valeur = null)
    {
        if ( ( $this->ID_Remise != parent::quote($this->structure['ID_Remise'][1],$valeur) ) && ( $this->ID_Remise != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Remise = NULL;
            }
            else
            {
                $this->ID_Remise = parent::quote($this->structure['ID_Remise'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Remise']["3"]=1;
            $this->structure['ID_Remise']["4"] = $this->ID_Remise;

            $test = explode("-",$this->structure['ID_Remise'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Remise']["4"] = substr($this->structure['ID_Remise']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_ChequeEtat()
    {
        return stripslashes($this->ID_ChequeEtat);
    }

    public function set_ID_ChequeEtat($valeur = null)
    {
        if ( ( $this->ID_ChequeEtat != parent::quote($this->structure['ID_ChequeEtat'][1],$valeur) ) && ( $this->ID_ChequeEtat != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_ChequeEtat = NULL;
            }
            else
            {
                $this->ID_ChequeEtat = parent::quote($this->structure['ID_ChequeEtat'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_ChequeEtat']["3"]=1;
            $this->structure['ID_ChequeEtat']["4"] = $this->ID_ChequeEtat;

            $test = explode("-",$this->structure['ID_ChequeEtat'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_ChequeEtat']["4"] = substr($this->structure['ID_ChequeEtat']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Numero()
    {
        return stripslashes($this->Numero);
    }

    public function set_Numero($valeur = null)
    {
        if ( ( $this->Numero != parent::quote($this->structure['Numero'][1],$valeur) ) && ( $this->Numero != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Numero = NULL;
            }
            else
            {
                $this->Numero = parent::quote($this->structure['Numero'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Numero']["3"]=1;
            $this->structure['Numero']["4"] = $this->Numero;

            $test = explode("-",$this->structure['Numero'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Numero']["4"] = substr($this->structure['Numero']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Banque()
    {
        return stripslashes($this->Banque);
    }

    public function set_Banque($valeur = null)
    {
        if ( ( $this->Banque != parent::quote($this->structure['Banque'][1],$valeur) ) && ( $this->Banque != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Banque = NULL;
            }
            else
            {
                $this->Banque = parent::quote($this->structure['Banque'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Banque']["3"]=1;
            $this->structure['Banque']["4"] = $this->Banque;

            $test = explode("-",$this->structure['Banque'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Banque']["4"] = substr($this->structure['Banque']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    // **********************
    // Specific get & set method for parents objects
    // **********************

    public function get_Parent_Remise($forced = 0)
    {

            $this->Parent_Remise = new remise($this->ID_Remise);

            return $this->Parent_Remise;
    }

    public function set_Parent_Remise($remise)
    {
            $this->ID_Remise=$remise->ID_Remise;
            $this->structure["ID_Remise"][3]=1;
            $this->structure["ID_Remise"][4]=$remise->ID_Remise;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Remise=$remise;
            return ($remise);
    }

    public function get_Parent_ChequeEtat($forced = 0)
    {

            $this->Parent_ChequeEtat = new chequeetat($this->ID_ChequeEtat);

            return $this->Parent_ChequeEtat;
    }

    public function set_Parent_ChequeEtat($chequeetat)
    {
            $this->ID_ChequeEtat=$chequeetat->ID_ChequeEtat;
            $this->structure["ID_ChequeEtat"][3]=1;
            $this->structure["ID_ChequeEtat"][4]=$chequeetat->ID_ChequeEtat;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_ChequeEtat=$chequeetat;
            return ($chequeetat);
    }

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    public function get_Payement_Cheque()
    {
        global $Connexion;

        if ((is_null($this->Payement_Cheque))&&(!is_null($this->ID_Cheque)))
        {
            $query="SELECT * FROM `payement` WHERE ID_Cheque = ".$this->ID_Cheque." ORDER BY ID_Payement";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\payement'))
            {
                $this->add_Payement_Cheque($row);
            }
        }
        return ($this->Payement_Cheque);
    }

    public function set_Payement_Cheque($payements)
    {
        if (!isset($this->Payement_Cheque) || (isset($this->Payement_Cheque) && count($this->Payement_Cheque)==0))
            foreach ($payements as $var)
                add_Payement_Cheque($var);
        else
            throw new DALException( "Can set Payement_Cheque cause actual Payement_Cheque is not empty");
        return ($payements);
    }

    public function add_Payement_Cheque(payement $payement)
    {
        if ($payement->ID_Cheque!=$this->ID_Cheque)
            $payement->set_ID_Cheque($this->ID_Cheque);
        if (isset($this->Payement_Cheque) && is_array($this->Payement_Cheque)) {
            $count=count($this->Payement_Cheque);
        }
        else {
            $count=0;
        }
        while (isset($this->Payement_Cheque[$count]))
            $count++;
        $this->Payement_Cheque[$count]=$payement;
    }

    public function remove_Payement_Cheque(payement $removepayement)
    {
        foreach ($this->Payement_Cheque as $var)
        {
            if ($removepayement == $var)
            {
                $var->delete();
                $this->payement = null;
            }
        }
    }

    protected function save_Payement_Cheque($transaction = null)
    {
        foreach ($this->Payement_Cheque as $payement)
        {
            if ($payement->ID_Cheque!=$this->ID_Cheque)
                $payement->set_ID_Cheque($this->ID_Cheque);
            $payement->save($transaction);
        }
    }

    public function delete_Payement_Cheque($transaction = null)
    {
        global $Connexion;
        if (isset($this->Payement_Cheque))
            foreach ($this->Payement_Cheque as $payement)
            {
                $payement->delete($transaction);
            }

        $query = "DELETE FROM `payement` WHERE ID_Cheque = ".$this->ID_Cheque;
        $result = $Connexion->sql_query($query);
        if ($Connexion->sql_error($result))
        {
            $erreur=$Connexion->sql_error($result)."<br>".$query;
            if ($transaction=="On")
            {
                $Connexion->sql_rollbacktransaction();
            }
            throw new DALException($erreur);
        }
        else
            return $Connexion->sql_affected_rows($result);

        $this->Payement_Cheque= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Cheque))&&($this->ID_Cheque!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Payement_Cheque() && (count($this->get_Payement_Cheque())!=0) && (MyORMCASCADE) )
                $this->delete_Payement_Cheque($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Cheque', $this->structure);
                $Result = $Connexion->sql_query($query);
                if ($Connexion->sql_error($Result))
                {
                    $erreur=$Connexion->sql_error($Result)."<br>".$query;
                    if ($Connexion->TransactionMode == 1)
                    {
                        $Connexion->sql_rollbacktransaction();
                    }
                    throw new DALException($erreur);
                }
                else
                    $return = $Connexion->sql_affected_rows($Result);
            }

            if (($Connexion->TransactionMode == 1)&&($thistransaction=="On"))
            {
                $Connexion->sql_committransaction();
            }
            return $return;
        }
        foreach ($this->structure as $field)
            unset($this->$field[0]);	
    }

    // **********************
    // SAVE (INSERT or UPDATE)
    // **********************

    public function save($transaction = null)
    {		
        global $Connexion;
        $thistransaction = "Off";

        if ((is_null($this->ID_Cheque))||($this->ID_Cheque==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if (!is_null($this->Parent_Remise))
                $this->ID_Remise = $this->set_ID_Remise($this->Parent_Remise->save($transaction));	 
        
        if (!is_null($this->Parent_ChequeEtat))
                $this->ID_ChequeEtat = $this->set_ID_ChequeEtat($this->Parent_ChequeEtat->save($transaction));	 
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Cheque))&&($this->ID_Cheque!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Cheque', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Cheque', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Cheque=$Connexion->sql_insert_id();
                $this->structure['ID_Cheque']["4"] = $this->ID_Cheque;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Payement_Cheque))
                $this->save_Payement_Cheque($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Cheque;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Cheque` ORDER BY ".self::primary_key." DESC LIMIT 1");
        $last = $Connexion->sql_fetch_row($query);

        return $last["last"];
    }

    public function toString($var = 'first')
    {
        $this->LoadAllParents();
        $this->LoadAllChilds();
        $return = "Object ".__CLASS__." (<br>";
        foreach ($this->structure as $field)
        {
            if ( ($field[1] == 'ChildObject') && (!is_null($this->{$field[0]})) && ( ( $var == 'first' ) || ( $var == 'down' ) ) )
            {
                $return .= '"'.$field[0].'" =>';
                $return .= " Array ( <br>";
                $i=0;
                foreach ($this->{$field[0]} as &$childvar)
                {
                    $return .= $childvar->toString('down');
                    $return .= ",<br>";
                    $i++;
                }
                $return = substr($return, 0, -5);
                $return .= "<br> ) <br>";
            }
            else
            {
                if ( ($field[1] == 'ParentObject') && (!is_null($this->{$field[0]})) && ( $var == 'first' ) )
                {
                    $return .= '"'.$field[0].'" => ';
                    $return .= $this->{$field[0]}->toString('none');
                    $return .= "<br>";
                }
                else
                {					
                    if ($this->{$field[0]}=="")
                    {
                        if ($field[2]==1)
                        {
                            $return .= '"'.$field[0].'" => null<br>';
                        }
                        else
                        {
                            $return .= '"'.$field[0].'" => ""<br>';
                        }
                    }
                    else
                    {
                        if ( ($field[1] != 'ParentObject') && ($field[1] != 'ChildObject') )
                        {
                            $return .= '"'.$field[0].'" => '.$this->{$field[0]}.'<br>';
                        }
                    }
                }
            }
        }
        $return = substr($return,0,-1);
        $return .= ")";
        return $return;
    }

    public function get_toJson($var = 'first')
    {
        $this->LoadAllParents();
        $this->LoadAllChilds();
        $return = "{";
        foreach ($this->structure as $field)
        {
            if ( ($field[1] == 'ChildObject') && (!is_null($this->{$field[0]})) && ( ( $var == 'first' ) || ( $var == 'down' ) ) )
            {
                $return .= '"'.$field[0].'":';
                $return .= "[";
                $i=0;
                foreach ($this->{$field[0]} as &$childvar)
                {
                    $return .= $childvar->get_toJson('down');
                    $return .= ",";
                    $i++;
                }
                $return = substr($return, 0, -1);
                $return .= "],";
            }
            else
            {
                if ( ($field[1] == 'ParentObject') && (!is_null($this->{$field[0]})) && ( $var == 'first' ) )
                {
                    $return .= '"'.$field[0].'":';
                    $return .= $this->{$field[0]}->get_toJson('none');
                    $return .= ",";
                }
                else
                {					
                    if ($this->{$field[0]}=="")
                    {
                        if ($field[2]==1)
                        {
                            $return .= '"'.$field[0].'":null,';
                        }
                        else
                        {
                            $return .= '"'.$field[0].'":"",';
                        }
                    }
                    else
                    {
                        if ( ($field[1] != 'ParentObject') && ($field[1] != 'ChildObject') )
                        {	
                            if (($field[1]!='timestamp')&&($field[1]!='date')&&($field[1]!='datetime')&&($field[1]!='char')&&($field[1]!='varchar')&&($field[1]!='tinyblob')&&($field[1]!='tinytext')&&($field[1]!='blob')&&($field[1]!='text')&&($field[1]!='mediumblob')&&($field[1]!='mediumtext')&&($field[1]!='longblob')&&($field[1]!='longtext')&&($field[1]!='time')&&($field[1]!='enum'))
                            {
                                $return .= '"'.$field[0].'":'.$this->{$field[0]}.',';
                            }
                            else
                            {
                                $return .= '"'.$field[0].'":"'.$this->{$field[0]}.'",';
                            }
                        }
                    }
                }
            }
        }
        $return = substr($return,0,-1);
        $return .= "}";
        return $return;
    }

    public function __clone()
    {
        $this->LoadAllChilds();
        $this->ID_Cheque = null;
        $this->structure['ID_Cheque'][4] = "";
        $this->isNew = 1;
        $this->isToSaveOrToUpdate = 1;
        foreach ($this->structure as $field)
        {
            if (($field[1] == 'ChildObject')&&(!is_null($this->{$field[0]})))
            {
                foreach ($this->{$field[0]} as &$childvar)
                    $childvar = clone $childvar;
            }
            elseif ($field[1] != 'ParentObject')
            {
                $this->structure[$field[0]][3] = 1;
                $this->structure[$field[0]][4] = $this->{$field[0]};
            }
        }
    }

    public function LoadAllParents()
    {
        if (!is_null($this->Payement_Cheque))
            $this->get_Payement_Cheque();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Payement_Cheque();
    }
		
    //endofclass
}
	