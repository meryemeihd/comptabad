<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Compte
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 18.06.2019 12h
* File name : Compte.php
* Table : comptabad.Compte 
* -----------------------------------------------------------------------------------
*/

class Compte extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Compte; // PRI
    const primary_key = 'ID_Compte'; // PRI
    protected $NumeroCompte;
    protected $LibelleCompteResultat;
    protected $LibelleGenerique;
    protected $LibelleCompteReel;
    protected $Type;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    protected $Ecriture_Compte;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Compte' => array('ID_Compte', 'int', '2', '0', ''),
        'NumeroCompte' => array('NumeroCompte', 'int', '0', '0', ''),
        'LibelleCompteResultat' => array('LibelleCompteResultat', 'mediumtext', '1', '0', ''),
        'LibelleGenerique' => array('LibelleGenerique', 'varchar-500', '0', '0', ''),
        'LibelleCompteReel' => array('LibelleCompteReel', 'varchar-500', '0', '0', ''),
        'Type' => array('Type', 'varchar-50', '0', '0', ''),
        'Ecriture_Compte' => array('Ecriture_Compte', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Compte` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Compte = $this->formater($this->structure['ID_Compte'],$row->ID_Compte);
                    $this->structure['ID_Compte'][4] = $this->ID_Compte;
                    $this->NumeroCompte = $this->formater($this->structure['NumeroCompte'],$row->NumeroCompte);
                    $this->structure['NumeroCompte'][4] = $this->NumeroCompte;
                    $this->LibelleCompteResultat = $this->formater($this->structure['LibelleCompteResultat'],$row->LibelleCompteResultat);
                    $this->structure['LibelleCompteResultat'][4] = $this->LibelleCompteResultat;
                    $this->LibelleGenerique = $this->formater($this->structure['LibelleGenerique'],$row->LibelleGenerique);
                    $this->structure['LibelleGenerique'][4] = $this->LibelleGenerique;
                    $this->LibelleCompteReel = $this->formater($this->structure['LibelleCompteReel'],$row->LibelleCompteReel);
                    $this->structure['LibelleCompteReel'][4] = $this->LibelleCompteReel;
                    $this->Type = $this->formater($this->structure['Type'],$row->Type);
                    $this->structure['Type'][4] = $this->Type;
                    
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
	
    public function get_ID_Compte()
    {
        return stripslashes($this->ID_Compte);
    }

    public function get_NumeroCompte()
    {
        return stripslashes($this->NumeroCompte);
    }

    public function set_NumeroCompte($valeur = null)
    {
        if ( ( $this->NumeroCompte != parent::quote($this->structure['NumeroCompte'][1],$valeur) ) && ( $this->NumeroCompte != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->NumeroCompte = NULL;
            }
            else
            {
                $this->NumeroCompte = parent::quote($this->structure['NumeroCompte'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['NumeroCompte']["3"]=1;
            $this->structure['NumeroCompte']["4"] = $this->NumeroCompte;

            $test = explode("-",$this->structure['NumeroCompte'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['NumeroCompte']["4"] = substr($this->structure['NumeroCompte']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_LibelleCompteResultat()
    {
        return stripslashes($this->LibelleCompteResultat);
    }

    public function set_LibelleCompteResultat($valeur = null)
    {
        if ( ( $this->LibelleCompteResultat != parent::quote($this->structure['LibelleCompteResultat'][1],$valeur) ) && ( $this->LibelleCompteResultat != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->LibelleCompteResultat = NULL;
            }
            else
            {
                $this->LibelleCompteResultat = parent::quote($this->structure['LibelleCompteResultat'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['LibelleCompteResultat']["3"]=1;
            $this->structure['LibelleCompteResultat']["4"] = $this->LibelleCompteResultat;

            $test = explode("-",$this->structure['LibelleCompteResultat'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['LibelleCompteResultat']["4"] = substr($this->structure['LibelleCompteResultat']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_LibelleGenerique()
    {
        return stripslashes($this->LibelleGenerique);
    }

    public function set_LibelleGenerique($valeur = null)
    {
        if ( ( $this->LibelleGenerique != parent::quote($this->structure['LibelleGenerique'][1],$valeur) ) && ( $this->LibelleGenerique != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->LibelleGenerique = NULL;
            }
            else
            {
                $this->LibelleGenerique = parent::quote($this->structure['LibelleGenerique'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['LibelleGenerique']["3"]=1;
            $this->structure['LibelleGenerique']["4"] = $this->LibelleGenerique;

            $test = explode("-",$this->structure['LibelleGenerique'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['LibelleGenerique']["4"] = substr($this->structure['LibelleGenerique']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_LibelleCompteReel()
    {
        return stripslashes($this->LibelleCompteReel);
    }

    public function set_LibelleCompteReel($valeur = null)
    {
        if ( ( $this->LibelleCompteReel != parent::quote($this->structure['LibelleCompteReel'][1],$valeur) ) && ( $this->LibelleCompteReel != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->LibelleCompteReel = NULL;
            }
            else
            {
                $this->LibelleCompteReel = parent::quote($this->structure['LibelleCompteReel'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['LibelleCompteReel']["3"]=1;
            $this->structure['LibelleCompteReel']["4"] = $this->LibelleCompteReel;

            $test = explode("-",$this->structure['LibelleCompteReel'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['LibelleCompteReel']["4"] = substr($this->structure['LibelleCompteReel']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Type()
    {
        return stripslashes($this->Type);
    }

    public function set_Type($valeur = null)
    {
        if ( ( $this->Type != parent::quote($this->structure['Type'][1],$valeur) ) && ( $this->Type != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Type = NULL;
            }
            else
            {
                $this->Type = parent::quote($this->structure['Type'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Type']["3"]=1;
            $this->structure['Type']["4"] = $this->Type;

            $test = explode("-",$this->structure['Type'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Type']["4"] = substr($this->structure['Type']["4"],0,$test["1"]);
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
    
    public function get_Ecriture_Compte()
    {
        global $Connexion;

        if ((is_null($this->Ecriture_Compte))&&(!is_null($this->ID_Compte)))
        {
            $query="SELECT * FROM `ecriture` WHERE ID_Compte = ".$this->ID_Compte." ORDER BY ID_Ecriture";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\ecriture'))
            {
                $this->add_Ecriture_Compte($row);
            }
        }
        return ($this->Ecriture_Compte);
    }

    public function set_Ecriture_Compte($ecritures)
    {
        if (!isset($this->Ecriture_Compte) || (isset($this->Ecriture_Compte) && count($this->Ecriture_Compte)==0))
            foreach ($ecritures as $var)
                add_Ecriture_Compte($var);
        else
            throw new DALException( "Can set Ecriture_Compte cause actual Ecriture_Compte is not empty");
        return ($ecritures);
    }

    public function add_Ecriture_Compte(ecriture $ecriture)
    {
        if ($ecriture->ID_Compte!=$this->ID_Compte)
            $ecriture->set_ID_Compte($this->ID_Compte);
        if (isset($this->Ecriture_Compte) && is_array($this->Ecriture_Compte)) {
            $count=count($this->Ecriture_Compte);
        }
        else {
            $count=0;
        }
        while (isset($this->Ecriture_Compte[$count]))
            $count++;
        $this->Ecriture_Compte[$count]=$ecriture;
    }

    public function remove_Ecriture_Compte(ecriture $removeecriture)
    {
        foreach ($this->Ecriture_Compte as $var)
        {
            if ($removeecriture == $var)
            {
                $var->delete();
                $this->ecriture = null;
            }
        }
    }

    protected function save_Ecriture_Compte($transaction = null)
    {
        foreach ($this->Ecriture_Compte as $ecriture)
        {
            if ($ecriture->ID_Compte!=$this->ID_Compte)
                $ecriture->set_ID_Compte($this->ID_Compte);
            $ecriture->save($transaction);
        }
    }

    public function delete_Ecriture_Compte($transaction = null)
    {
        global $Connexion;
        if (isset($this->Ecriture_Compte))
            foreach ($this->Ecriture_Compte as $ecriture)
            {
                $ecriture->delete($transaction);
            }

        $query = "DELETE FROM `ecriture` WHERE ID_Compte = ".$this->ID_Compte;
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

        $this->Ecriture_Compte= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Compte))&&($this->ID_Compte!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Ecriture_Compte() && (count($this->get_Ecriture_Compte())!=0) && (MyORMCASCADE) )
                $this->delete_Ecriture_Compte($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Compte', $this->structure);
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

        if ((is_null($this->ID_Compte))||($this->ID_Compte==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Compte))&&($this->ID_Compte!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Compte', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Compte', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Compte=$Connexion->sql_insert_id();
                $this->structure['ID_Compte']["4"] = $this->ID_Compte;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Ecriture_Compte))
                $this->save_Ecriture_Compte($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Compte;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Compte` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Compte = null;
        $this->structure['ID_Compte'][4] = "";
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
        if (!is_null($this->Ecriture_Compte))
            $this->get_Ecriture_Compte();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Ecriture_Compte();
    }
		
    //endofclass
}
	