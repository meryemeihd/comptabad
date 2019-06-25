<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Exercice
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 22.06.2019 15h
* File name : Exercice.php
* Table : comptabad.Exercice 
* -----------------------------------------------------------------------------------
*/

class Exercice extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Exercice; // PRI
    const primary_key = 'ID_Exercice'; // PRI
    protected $ID_Entite;
    protected $DateDebut;
    protected $DateFin;
    protected $Flag;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    
    protected $Parent_Entite;

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    public $Ecriture_Exercice;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    private $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Exercice' => array('ID_Exercice', 'int', '2', '0', ''),
        'ID_Entite' => array('ID_Entite', 'int', '1', '0', ''),
        'DateDebut' => array('DateDebut', 'date', '1', '0', ''),
        'DateFin' => array('DateFin', 'date', '1', '0', ''),
        'Flag' => array('Flag', 'varchar-50', '1', '0', ''),
        'Parent_Entite' => array('Parent_Entite', 'ParentObject', '1', '0', ''),
        'Ecriture_Exercice' => array('Ecriture_Exercice', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Exercice` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Exercice = $this->formater($this->structure['ID_Exercice'],$row->ID_Exercice);
                    $this->structure['ID_Exercice'][4] = $this->ID_Exercice;
                    $this->ID_Entite = $this->formater($this->structure['ID_Entite'],$row->ID_Entite);
                    $this->structure['ID_Entite'][4] = $this->ID_Entite;
                    $this->DateDebut = $this->formater($this->structure['DateDebut'],$row->DateDebut);
                    $this->structure['DateDebut'][4] = $this->DateDebut;
                    $this->DateFin = $this->formater($this->structure['DateFin'],$row->DateFin);
                    $this->structure['DateFin'][4] = $this->DateFin;
                    $this->Flag = $this->formater($this->structure['Flag'],$row->Flag);
                    $this->structure['Flag'][4] = $this->Flag;
                    
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
	
    public function get_ID_Exercice()
    {
        return stripslashes($this->ID_Exercice);
    }

    public function get_ID_Entite()
    {
        return stripslashes($this->ID_Entite);
    }

    public function set_ID_Entite($valeur = null)
    {
        if ( ( $this->ID_Entite != parent::quote($this->structure['ID_Entite'][1],$valeur) ) && ( $this->ID_Entite != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Entite = NULL;
            }
            else
            {
                $this->ID_Entite = parent::quote($this->structure['ID_Entite'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Entite']["3"]=1;
            $this->structure['ID_Entite']["4"] = $this->ID_Entite;

            $test = explode("-",$this->structure['ID_Entite'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Entite']["4"] = substr($this->structure['ID_Entite']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_DateDebut()
    {
        return stripslashes($this->DateDebut);
    }

    public function set_DateDebut($valeur = null)
    {
        if ( ( $this->DateDebut != parent::quote($this->structure['DateDebut'][1],$valeur) ) && ( $this->DateDebut != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->DateDebut = NULL;
            }
            else
            {
                $this->DateDebut = parent::quote($this->structure['DateDebut'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['DateDebut']["3"]=1;
            $this->structure['DateDebut']["4"] = $this->DateDebut;

            $test = explode("-",$this->structure['DateDebut'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['DateDebut']["4"] = substr($this->structure['DateDebut']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_DateFin()
    {
        return stripslashes($this->DateFin);
    }

    public function set_DateFin($valeur = null)
    {
        if ( ( $this->DateFin != parent::quote($this->structure['DateFin'][1],$valeur) ) && ( $this->DateFin != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->DateFin = NULL;
            }
            else
            {
                $this->DateFin = parent::quote($this->structure['DateFin'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['DateFin']["3"]=1;
            $this->structure['DateFin']["4"] = $this->DateFin;

            $test = explode("-",$this->structure['DateFin'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['DateFin']["4"] = substr($this->structure['DateFin']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Flag()
    {
        return stripslashes($this->Flag);
    }

    public function set_Flag($valeur = null)
    {
        if ( ( $this->Flag != parent::quote($this->structure['Flag'][1],$valeur) ) && ( $this->Flag != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Flag = NULL;
            }
            else
            {
                $this->Flag = parent::quote($this->structure['Flag'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Flag']["3"]=1;
            $this->structure['Flag']["4"] = $this->Flag;

            $test = explode("-",$this->structure['Flag'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Flag']["4"] = substr($this->structure['Flag']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    // **********************
    // Specific get & set method for parents objects
    // **********************

    public function get_Parent_Entite($forced = 0)
    {

            $this->Parent_Entite = new entite($this->ID_Entite);

            return $this->Parent_Entite;
    }

    public function set_Parent_Entite($entite)
    {
            $this->ID_Entite=$entite->ID_Entite;
            $this->structure["ID_Entite"][3]=1;
            $this->structure["ID_Entite"][4]=$entite->ID_Entite;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Entite=$entite;
            return ($entite);
    }

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    public function get_Ecriture_Exercice()
    {
        global $Connexion;

        if ((is_null($this->Ecriture_Exercice))&&(!is_null($this->ID_Exercice)))
        {
            $query="SELECT * FROM `ecriture` WHERE ID_Exercice = ".$this->ID_Exercice." ORDER BY ID_Ecriture";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\ecriture'))
            {
                $this->add_Ecriture_Exercice($row);
            }
        }
        return ($this->Ecriture_Exercice);
    }

    public function set_Ecriture_Exercice($ecritures)
    {
        if (!isset($this->Ecriture_Exercice) || (isset($this->Ecriture_Exercice) && count($this->Ecriture_Exercice)==0))
            foreach ($ecritures as $var)
                add_Ecriture_Exercice($var);
        else
            throw new DALException( "Can set Ecriture_Exercice cause actual Ecriture_Exercice is not empty");
        return ($ecritures);
    }

    public function add_Ecriture_Exercice(ecriture $ecriture)
    {
        if ($ecriture->ID_Exercice!=$this->ID_Exercice)
            $ecriture->set_ID_Exercice($this->ID_Exercice);
        if (isset($this->Ecriture_Exercice) && is_array($this->Ecriture_Exercice)) {
            $count=count($this->Ecriture_Exercice);
        }
        else {
            $count=0;
        }
        while (isset($this->Ecriture_Exercice[$count]))
            $count++;
        $this->Ecriture_Exercice[$count]=$ecriture;
    }

    public function remove_Ecriture_Exercice(ecriture $removeecriture)
    {
        foreach ($this->Ecriture_Exercice as $var)
        {
            if ($removeecriture == $var)
            {
                $var->delete();
                $this->ecriture = null;
            }
        }
    }

    protected function save_Ecriture_Exercice($transaction = null)
    {
        foreach ($this->Ecriture_Exercice as $ecriture)
        {
            if ($ecriture->ID_Exercice!=$this->ID_Exercice)
                $ecriture->set_ID_Exercice($this->ID_Exercice);
            $ecriture->save($transaction);
        }
    }

    public function delete_Ecriture_Exercice($transaction = null)
    {
        global $Connexion;
        if (isset($this->Ecriture_Exercice))
            foreach ($this->Ecriture_Exercice as $ecriture)
            {
                $ecriture->delete($transaction);
            }

        $query = "DELETE FROM `ecriture` WHERE ID_Exercice = ".$this->ID_Exercice;
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

        $this->Ecriture_Exercice= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Exercice))&&($this->ID_Exercice!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Ecriture_Exercice() && (count($this->get_Ecriture_Exercice())!=0) && (MyORMCASCADE) )
                $this->delete_Ecriture_Exercice($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Exercice', $this->structure);
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

        if ((is_null($this->ID_Exercice))||($this->ID_Exercice==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if (!is_null($this->Parent_Entite))
                $this->ID_Entite = $this->set_ID_Entite($this->Parent_Entite->save($transaction));	 
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Exercice))&&($this->ID_Exercice!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Exercice', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Exercice', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Exercice=$Connexion->sql_insert_id();
                $this->structure['ID_Exercice']["4"] = $this->ID_Exercice;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Ecriture_Exercice))
                $this->save_Ecriture_Exercice($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Exercice;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Exercice` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Exercice = null;
        $this->structure['ID_Exercice'][4] = "";
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
        if (!is_null($this->Ecriture_Exercice))
            $this->get_Ecriture_Exercice();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Ecriture_Exercice();
    }
		
    //endofclass
}
	