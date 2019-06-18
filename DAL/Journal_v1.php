<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Journal
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 17.06.2019 08h
* File name : Journal.php
* Table : comptabad.Journal 
* -----------------------------------------------------------------------------------
*/

class Journal extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Journal; // PRI
    const primary_key = 'ID_Journal'; // PRI
    protected $Libelle;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    protected $Ecriture_Journal;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Journal' => array('ID_Journal', 'int', '2', '0', ''),
        'Libelle' => array('Libelle', 'mediumtext', '1', '0', ''),
        'Ecriture_Journal' => array('Ecriture_Journal', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Journal` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Journal = $this->formater($this->structure['ID_Journal'],$row->ID_Journal);
                    $this->structure['ID_Journal'][4] = $this->ID_Journal;
                    $this->Libelle = $this->formater($this->structure['Libelle'],$row->Libelle);
                    $this->structure['Libelle'][4] = $this->Libelle;
                    
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
	
    public function get_ID_Journal()
    {
        return stripslashes($this->ID_Journal);
    }

    public function get_Libelle()
    {
        return stripslashes($this->Libelle);
    }

    public function set_Libelle($valeur = null)
    {
        if ( ( $this->Libelle != parent::quote($this->structure['Libelle'][1],$valeur) ) && ( $this->Libelle != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Libelle = NULL;
            }
            else
            {
                $this->Libelle = parent::quote($this->structure['Libelle'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Libelle']["3"]=1;
            $this->structure['Libelle']["4"] = $this->Libelle;

            $test = explode("-",$this->structure['Libelle'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Libelle']["4"] = substr($this->structure['Libelle']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    // **********************
    // Specific get & set method for parents objects
    // **********************

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    public function get_Ecriture_Journal()
    {
        global $Connexion;

        if ((is_null($this->Ecriture_Journal))&&(!is_null($this->ID_Journal)))
        {
            $query="SELECT * FROM `ecriture` WHERE ID_Journal = ".$this->ID_Journal." ORDER BY ID_Ecriture";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\ecriture'))
            {
                $this->add_Ecriture_Journal($row);
            }
        }
        return ($this->Ecriture_Journal);
    }

    public function set_Ecriture_Journal($ecritures)
    {
        if (!isset($this->Ecriture_Journal) || (isset($this->Ecriture_Journal) && count($this->Ecriture_Journal)==0))
            foreach ($ecritures as $var)
                add_Ecriture_Journal($var);
        else
            throw new DALException( "Can set Ecriture_Journal cause actual Ecriture_Journal is not empty");
        return ($ecritures);
    }

    public function add_Ecriture_Journal(ecriture $ecriture)
    {
        if ($ecriture->ID_Journal!=$this->ID_Journal)
            $ecriture->set_ID_Journal($this->ID_Journal);
        if (isset($this->Ecriture_Journal) && is_array($this->Ecriture_Journal)) {
            $count=count($this->Ecriture_Journal);
        }
        else {
            $count=0;
        }
        while (isset($this->Ecriture_Journal[$count]))
            $count++;
        $this->Ecriture_Journal[$count]=$ecriture;
    }

    public function remove_Ecriture_Journal(ecriture $removeecriture)
    {
        foreach ($this->Ecriture_Journal as $var)
        {
            if ($removeecriture == $var)
            {
                $var->delete();
                $this->ecriture = null;
            }
        }
    }

    protected function save_Ecriture_Journal($transaction = null)
    {
        foreach ($this->Ecriture_Journal as $ecriture)
        {
            if ($ecriture->ID_Journal!=$this->ID_Journal)
                $ecriture->set_ID_Journal($this->ID_Journal);
            $ecriture->save($transaction);
        }
    }

    public function delete_Ecriture_Journal($transaction = null)
    {
        global $Connexion;
        if (isset($this->Ecriture_Journal))
            foreach ($this->Ecriture_Journal as $ecriture)
            {
                $ecriture->delete($transaction);
            }

        $query = "DELETE FROM `ecriture` WHERE ID_Journal = ".$this->ID_Journal;
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

        $this->Ecriture_Journal= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Journal))&&($this->ID_Journal!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Ecriture_Journal() && (count($this->get_Ecriture_Journal())!=0) && (MyORMCASCADE) )
                $this->delete_Ecriture_Journal($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Journal', $this->structure);
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

        if ((is_null($this->ID_Journal))||($this->ID_Journal==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Journal))&&($this->ID_Journal!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Journal', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Journal', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Journal=$Connexion->sql_insert_id();
                $this->structure['ID_Journal']["4"] = $this->ID_Journal;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Ecriture_Journal))
                $this->save_Ecriture_Journal($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Journal;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Journal` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Journal = null;
        $this->structure['ID_Journal'][4] = "";
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
        if (!is_null($this->Ecriture_Journal))
            $this->get_Ecriture_Journal();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Ecriture_Journal();
    }
		
    //endofclass
}
	