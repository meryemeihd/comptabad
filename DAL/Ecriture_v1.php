<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Ecriture
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 14.06.2019 14h
* File name : Ecriture.php
* Table : comptabad.Ecriture 
* -----------------------------------------------------------------------------------
*/

class Ecriture extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Ecriture; // PRI
    const primary_key = 'ID_Ecriture'; // PRI
    protected $ID_Journal;
    protected $ID_Piece;
    protected $ID_Compte;
    protected $ID_Exercice;
    protected $Montant;
    protected $Lettrage;
    protected $Date;
    protected $lmd;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    
    protected $Parent_Journal;
    protected $Parent_Piece;
    protected $Parent_Compte;
    protected $Parent_Exercice;

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Ecriture' => array('ID_Ecriture', 'int', '2', '0', ''),
        'ID_Journal' => array('ID_Journal', 'int', '1', '0', ''),
        'ID_Piece' => array('ID_Piece', 'int', '1', '0', ''),
        'ID_Compte' => array('ID_Compte', 'int', '1', '0', ''),
        'ID_Exercice' => array('ID_Exercice', 'int', '1', '0', ''),
        'Montant' => array('Montant', 'decimal', '0', '0', ''),
        'Lettrage' => array('Lettrage', 'varchar-10', '1', '0', ''),
        'Date' => array('Date', 'date', '1', '0', ''),
        'lmd' => array('lmd', 'timestamp', '0', '0', ''),
        'Parent_Journal' => array('Parent_Journal', 'ParentObject', '1', '0', ''),
        'Parent_Piece' => array('Parent_Piece', 'ParentObject', '1', '0', ''),
        'Parent_Compte' => array('Parent_Compte', 'ParentObject', '1', '0', ''),
        'Parent_Exercice' => array('Parent_Exercice', 'ParentObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Ecriture` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Ecriture = $this->formater($this->structure['ID_Ecriture'],$row->ID_Ecriture);
                    $this->structure['ID_Ecriture'][4] = $this->ID_Ecriture;
                    $this->ID_Journal = $this->formater($this->structure['ID_Journal'],$row->ID_Journal);
                    $this->structure['ID_Journal'][4] = $this->ID_Journal;
                    $this->ID_Piece = $this->formater($this->structure['ID_Piece'],$row->ID_Piece);
                    $this->structure['ID_Piece'][4] = $this->ID_Piece;
                    $this->ID_Compte = $this->formater($this->structure['ID_Compte'],$row->ID_Compte);
                    $this->structure['ID_Compte'][4] = $this->ID_Compte;
                    $this->ID_Exercice = $this->formater($this->structure['ID_Exercice'],$row->ID_Exercice);
                    $this->structure['ID_Exercice'][4] = $this->ID_Exercice;
                    $this->Montant = $this->formater($this->structure['Montant'],$row->Montant);
                    $this->structure['Montant'][4] = $this->Montant;
                    $this->Lettrage = $this->formater($this->structure['Lettrage'],$row->Lettrage);
                    $this->structure['Lettrage'][4] = $this->Lettrage;
                    $this->Date = $this->formater($this->structure['Date'],$row->Date);
                    $this->structure['Date'][4] = $this->Date;
                    $this->lmd = $this->formater($this->structure['lmd'],$row->lmd);
                    $this->structure['lmd'][4] = $this->lmd;
                    
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
	
    public function get_ID_Ecriture()
    {
        return stripslashes($this->ID_Ecriture);
    }

    public function get_ID_Journal()
    {
        return stripslashes($this->ID_Journal);
    }

    public function set_ID_Journal($valeur = null)
    {
        if ( ( $this->ID_Journal != parent::quote($this->structure['ID_Journal'][1],$valeur) ) && ( $this->ID_Journal != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Journal = NULL;
            }
            else
            {
                $this->ID_Journal = parent::quote($this->structure['ID_Journal'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Journal']["3"]=1;
            $this->structure['ID_Journal']["4"] = $this->ID_Journal;

            $test = explode("-",$this->structure['ID_Journal'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Journal']["4"] = substr($this->structure['ID_Journal']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_Piece()
    {
        return stripslashes($this->ID_Piece);
    }

    public function set_ID_Piece($valeur = null)
    {
        if ( ( $this->ID_Piece != parent::quote($this->structure['ID_Piece'][1],$valeur) ) && ( $this->ID_Piece != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Piece = NULL;
            }
            else
            {
                $this->ID_Piece = parent::quote($this->structure['ID_Piece'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Piece']["3"]=1;
            $this->structure['ID_Piece']["4"] = $this->ID_Piece;

            $test = explode("-",$this->structure['ID_Piece'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Piece']["4"] = substr($this->structure['ID_Piece']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_Compte()
    {
        return stripslashes($this->ID_Compte);
    }

    public function set_ID_Compte($valeur = null)
    {
        if ( ( $this->ID_Compte != parent::quote($this->structure['ID_Compte'][1],$valeur) ) && ( $this->ID_Compte != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Compte = NULL;
            }
            else
            {
                $this->ID_Compte = parent::quote($this->structure['ID_Compte'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Compte']["3"]=1;
            $this->structure['ID_Compte']["4"] = $this->ID_Compte;

            $test = explode("-",$this->structure['ID_Compte'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Compte']["4"] = substr($this->structure['ID_Compte']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_Exercice()
    {
        return stripslashes($this->ID_Exercice);
    }

    public function set_ID_Exercice($valeur = null)
    {
        if ( ( $this->ID_Exercice != parent::quote($this->structure['ID_Exercice'][1],$valeur) ) && ( $this->ID_Exercice != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Exercice = NULL;
            }
            else
            {
                $this->ID_Exercice = parent::quote($this->structure['ID_Exercice'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Exercice']["3"]=1;
            $this->structure['ID_Exercice']["4"] = $this->ID_Exercice;

            $test = explode("-",$this->structure['ID_Exercice'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Exercice']["4"] = substr($this->structure['ID_Exercice']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Montant()
    {
        return stripslashes($this->Montant);
    }

    public function set_Montant($valeur = null)
    {
        if ( ( $this->Montant != parent::quote($this->structure['Montant'][1],$valeur) ) && ( $this->Montant != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Montant = NULL;
            }
            else
            {
                $this->Montant = parent::quote($this->structure['Montant'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Montant']["3"]=1;
            $this->structure['Montant']["4"] = $this->Montant;

            $test = explode("-",$this->structure['Montant'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Montant']["4"] = substr($this->structure['Montant']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Lettrage()
    {
        return stripslashes($this->Lettrage);
    }

    public function set_Lettrage($valeur = null)
    {
        if ( ( $this->Lettrage != parent::quote($this->structure['Lettrage'][1],$valeur) ) && ( $this->Lettrage != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Lettrage = NULL;
            }
            else
            {
                $this->Lettrage = parent::quote($this->structure['Lettrage'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Lettrage']["3"]=1;
            $this->structure['Lettrage']["4"] = $this->Lettrage;

            $test = explode("-",$this->structure['Lettrage'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Lettrage']["4"] = substr($this->structure['Lettrage']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Date()
    {
        return stripslashes($this->Date);
    }

    public function set_Date($valeur = null)
    {
        if ( ( $this->Date != parent::quote($this->structure['Date'][1],$valeur) ) && ( $this->Date != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Date = NULL;
            }
            else
            {
                $this->Date = parent::quote($this->structure['Date'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Date']["3"]=1;
            $this->structure['Date']["4"] = $this->Date;

            $test = explode("-",$this->structure['Date'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Date']["4"] = substr($this->structure['Date']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_lmd()
    {
        return stripslashes($this->lmd);
    }

    public function set_lmd($valeur = null)
    {
        if ( ( $this->lmd != parent::quote($this->structure['lmd'][1],$valeur) ) && ( $this->lmd != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->lmd = NULL;
            }
            else
            {
                $this->lmd = parent::quote($this->structure['lmd'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['lmd']["3"]=1;
            $this->structure['lmd']["4"] = $this->lmd;

            $test = explode("-",$this->structure['lmd'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['lmd']["4"] = substr($this->structure['lmd']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    // **********************
    // Specific get & set method for parents objects
    // **********************

    public function get_Parent_Journal($forced = 0)
    {

            $this->Parent_Journal = new journal($this->ID_Journal);

            return $this->Parent_Journal;
    }

    public function set_Parent_Journal($journal)
    {
            $this->ID_Journal=$journal->ID_Journal;
            $this->structure["ID_Journal"][3]=1;
            $this->structure["ID_Journal"][4]=$journal->ID_Journal;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Journal=$journal;
            return ($journal);
    }

    public function get_Parent_Piece($forced = 0)
    {

            $this->Parent_Piece = new piece($this->ID_Piece);

            return $this->Parent_Piece;
    }

    public function set_Parent_Piece($piece)
    {
            $this->ID_Piece=$piece->ID_Piece;
            $this->structure["ID_Piece"][3]=1;
            $this->structure["ID_Piece"][4]=$piece->ID_Piece;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Piece=$piece;
            return ($piece);
    }

    public function get_Parent_Compte($forced = 0)
    {

            $this->Parent_Compte = new compte($this->ID_Compte);

            return $this->Parent_Compte;
    }

    public function set_Parent_Compte($compte)
    {
            $this->ID_Compte=$compte->ID_Compte;
            $this->structure["ID_Compte"][3]=1;
            $this->structure["ID_Compte"][4]=$compte->ID_Compte;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Compte=$compte;
            return ($compte);
    }

    public function get_Parent_Exercice($forced = 0)
    {

            $this->Parent_Exercice = new exercice($this->ID_Exercice);

            return $this->Parent_Exercice;
    }

    public function set_Parent_Exercice($exercice)
    {
            $this->ID_Exercice=$exercice->ID_Exercice;
            $this->structure["ID_Exercice"][3]=1;
            $this->structure["ID_Exercice"][4]=$exercice->ID_Exercice;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Exercice=$exercice;
            return ($exercice);
    }

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Ecriture))&&($this->ID_Ecriture!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Ecriture', $this->structure);
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

        if ((is_null($this->ID_Ecriture))||($this->ID_Ecriture==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if (!is_null($this->Parent_Journal))
                $this->ID_Journal = $this->set_ID_Journal($this->Parent_Journal->save($transaction));	 
        
        if (!is_null($this->Parent_Piece))
                $this->ID_Piece = $this->set_ID_Piece($this->Parent_Piece->save($transaction));	 
        
        if (!is_null($this->Parent_Compte))
                $this->ID_Compte = $this->set_ID_Compte($this->Parent_Compte->save($transaction));	 
        
        if (!is_null($this->Parent_Exercice))
                $this->ID_Exercice = $this->set_ID_Exercice($this->Parent_Exercice->save($transaction));	 
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Ecriture))&&($this->ID_Ecriture!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Ecriture', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Ecriture', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Ecriture=$Connexion->sql_insert_id();
                $this->structure['ID_Ecriture']["4"] = $this->ID_Ecriture;
                $this->isNew=0;
            }
        }
	
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Ecriture;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Ecriture` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Ecriture = null;
        $this->structure['ID_Ecriture'][4] = "";
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
        
    }
	
    public function LoadAllChilds()
    {
    }
		
    //endofclass
}
	