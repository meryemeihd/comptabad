<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Payement
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 19.06.2019 14h
* File name : Payement.php
* Table : comptabad.Payement 
* -----------------------------------------------------------------------------------
*/

class Payement extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Payement; // PRI
    const primary_key = 'ID_Payement'; // PRI
    protected $ID_Cheque;
    protected $ID_ModePayement;
    protected $ID_Compte;
    protected $Numero;
    protected $JustificatifPayement;
    protected $Commentaire;
    protected $Date;
    protected $Montant;
    protected $DateRapprochement;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    
    protected $Parent_Cheque;
    protected $Parent_ModePayement;
    protected $Parent_Compte;

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    protected $Piece_Payement;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Payement' => array('ID_Payement', 'int', '2', '0', ''),
        'ID_Cheque' => array('ID_Cheque', 'int', '1', '0', ''),
        'ID_ModePayement' => array('ID_ModePayement', 'int', '1', '0', ''),
        'ID_Compte' => array('ID_Compte', 'int', '1', '0', ''),
        'Numero' => array('Numero', 'varchar-50', '0', '0', ''),
        'JustificatifPayement' => array('JustificatifPayement', 'varchar-500', '1', '0', ''),
        'Commentaire' => array('Commentaire', 'varchar-500', '0', '0', ''),
        'Date' => array('Date', 'date', '1', '0', ''),
        'Montant' => array('Montant', 'decimal', '0', '0', ''),
        'DateRapprochement' => array('DateRapprochement', 'date', '1', '0', ''),
        'Parent_Cheque' => array('Parent_Cheque', 'ParentObject', '1', '0', ''),
        'Parent_ModePayement' => array('Parent_ModePayement', 'ParentObject', '1', '0', ''),
        'Parent_Compte' => array('Parent_Compte', 'ParentObject', '1', '0', ''),
        'Piece_Payement' => array('Piece_Payement', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Payement` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Payement = $this->formater($this->structure['ID_Payement'],$row->ID_Payement);
                    $this->structure['ID_Payement'][4] = $this->ID_Payement;
                    $this->ID_Cheque = $this->formater($this->structure['ID_Cheque'],$row->ID_Cheque);
                    $this->structure['ID_Cheque'][4] = $this->ID_Cheque;
                    $this->ID_ModePayement = $this->formater($this->structure['ID_ModePayement'],$row->ID_ModePayement);
                    $this->structure['ID_ModePayement'][4] = $this->ID_ModePayement;
                    $this->ID_Compte = $this->formater($this->structure['ID_Compte'],$row->ID_Compte);
                    $this->structure['ID_Compte'][4] = $this->ID_Compte;
                    $this->Numero = $this->formater($this->structure['Numero'],$row->Numero);
                    $this->structure['Numero'][4] = $this->Numero;
                    $this->JustificatifPayement = $this->formater($this->structure['JustificatifPayement'],$row->JustificatifPayement);
                    $this->structure['JustificatifPayement'][4] = $this->JustificatifPayement;
                    $this->Commentaire = $this->formater($this->structure['Commentaire'],$row->Commentaire);
                    $this->structure['Commentaire'][4] = $this->Commentaire;
                    $this->Date = $this->formater($this->structure['Date'],$row->Date);
                    $this->structure['Date'][4] = $this->Date;
                    $this->Montant = $this->formater($this->structure['Montant'],$row->Montant);
                    $this->structure['Montant'][4] = $this->Montant;
                    $this->DateRapprochement = $this->formater($this->structure['DateRapprochement'],$row->DateRapprochement);
                    $this->structure['DateRapprochement'][4] = $this->DateRapprochement;
                    
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
	
    public function get_ID_Payement()
    {
        return stripslashes($this->ID_Payement);
    }

    public function get_ID_Cheque()
    {
        return stripslashes($this->ID_Cheque);
    }

    public function set_ID_Cheque($valeur = null)
    {
        if ( ( $this->ID_Cheque != parent::quote($this->structure['ID_Cheque'][1],$valeur) ) && ( $this->ID_Cheque != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Cheque = NULL;
            }
            else
            {
                $this->ID_Cheque = parent::quote($this->structure['ID_Cheque'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Cheque']["3"]=1;
            $this->structure['ID_Cheque']["4"] = $this->ID_Cheque;

            $test = explode("-",$this->structure['ID_Cheque'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Cheque']["4"] = substr($this->structure['ID_Cheque']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_ModePayement()
    {
        return stripslashes($this->ID_ModePayement);
    }

    public function set_ID_ModePayement($valeur = null)
    {
        if ( ( $this->ID_ModePayement != parent::quote($this->structure['ID_ModePayement'][1],$valeur) ) && ( $this->ID_ModePayement != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_ModePayement = NULL;
            }
            else
            {
                $this->ID_ModePayement = parent::quote($this->structure['ID_ModePayement'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_ModePayement']["3"]=1;
            $this->structure['ID_ModePayement']["4"] = $this->ID_ModePayement;

            $test = explode("-",$this->structure['ID_ModePayement'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_ModePayement']["4"] = substr($this->structure['ID_ModePayement']["4"],0,$test["1"]);
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

    public function get_JustificatifPayement()
    {
        return stripslashes($this->JustificatifPayement);
    }

    public function set_JustificatifPayement($valeur = null)
    {
        if ( ( $this->JustificatifPayement != parent::quote($this->structure['JustificatifPayement'][1],$valeur) ) && ( $this->JustificatifPayement != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->JustificatifPayement = NULL;
            }
            else
            {
                $this->JustificatifPayement = parent::quote($this->structure['JustificatifPayement'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['JustificatifPayement']["3"]=1;
            $this->structure['JustificatifPayement']["4"] = $this->JustificatifPayement;

            $test = explode("-",$this->structure['JustificatifPayement'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['JustificatifPayement']["4"] = substr($this->structure['JustificatifPayement']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Commentaire()
    {
        return stripslashes($this->Commentaire);
    }

    public function set_Commentaire($valeur = null)
    {
        if ( ( $this->Commentaire != parent::quote($this->structure['Commentaire'][1],$valeur) ) && ( $this->Commentaire != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Commentaire = NULL;
            }
            else
            {
                $this->Commentaire = parent::quote($this->structure['Commentaire'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Commentaire']["3"]=1;
            $this->structure['Commentaire']["4"] = $this->Commentaire;

            $test = explode("-",$this->structure['Commentaire'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Commentaire']["4"] = substr($this->structure['Commentaire']["4"],0,$test["1"]);
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

    public function get_DateRapprochement()
    {
        return stripslashes($this->DateRapprochement);
    }

    public function set_DateRapprochement($valeur = null)
    {
        if ( ( $this->DateRapprochement != parent::quote($this->structure['DateRapprochement'][1],$valeur) ) && ( $this->DateRapprochement != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->DateRapprochement = NULL;
            }
            else
            {
                $this->DateRapprochement = parent::quote($this->structure['DateRapprochement'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['DateRapprochement']["3"]=1;
            $this->structure['DateRapprochement']["4"] = $this->DateRapprochement;

            $test = explode("-",$this->structure['DateRapprochement'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['DateRapprochement']["4"] = substr($this->structure['DateRapprochement']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    // **********************
    // Specific get & set method for parents objects
    // **********************

    public function get_Parent_Cheque($forced = 0)
    {

            $this->Parent_Cheque = new cheque($this->ID_Cheque);

            return $this->Parent_Cheque;
    }

    public function set_Parent_Cheque($cheque)
    {
            $this->ID_Cheque=$cheque->ID_Cheque;
            $this->structure["ID_Cheque"][3]=1;
            $this->structure["ID_Cheque"][4]=$cheque->ID_Cheque;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Cheque=$cheque;
            return ($cheque);
    }

    public function get_Parent_ModePayement($forced = 0)
    {

            $this->Parent_ModePayement = new modepayement($this->ID_ModePayement);

            return $this->Parent_ModePayement;
    }

    public function set_Parent_ModePayement($modepayement)
    {
            $this->ID_ModePayement=$modepayement->ID_ModePayement;
            $this->structure["ID_ModePayement"][3]=1;
            $this->structure["ID_ModePayement"][4]=$modepayement->ID_ModePayement;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_ModePayement=$modepayement;
            return ($modepayement);
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

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    public function get_Piece_Payement()
    {
        global $Connexion;

        if ((is_null($this->Piece_Payement))&&(!is_null($this->ID_Payement)))
        {
            $query="SELECT * FROM `piece` WHERE ID_Payement = ".$this->ID_Payement." ORDER BY ID_Piece";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\piece'))
            {
                $this->add_Piece_Payement($row);
            }
        }
        return ($this->Piece_Payement);
    }

    public function set_Piece_Payement($pieces)
    {
        if (!isset($this->Piece_Payement) || (isset($this->Piece_Payement) && count($this->Piece_Payement)==0))
            foreach ($pieces as $var)
                add_Piece_Payement($var);
        else
            throw new DALException( "Can set Piece_Payement cause actual Piece_Payement is not empty");
        return ($pieces);
    }

    public function add_Piece_Payement(piece $piece)
    {
        if ($piece->ID_Payement!=$this->ID_Payement)
            $piece->set_ID_Payement($this->ID_Payement);
        if (isset($this->Piece_Payement) && is_array($this->Piece_Payement)) {
            $count=count($this->Piece_Payement);
        }
        else {
            $count=0;
        }
        while (isset($this->Piece_Payement[$count]))
            $count++;
        $this->Piece_Payement[$count]=$piece;
    }

    public function remove_Piece_Payement(piece $removepiece)
    {
        foreach ($this->Piece_Payement as $var)
        {
            if ($removepiece == $var)
            {
                $var->delete();
                $this->piece = null;
            }
        }
    }

    protected function save_Piece_Payement($transaction = null)
    {
        foreach ($this->Piece_Payement as $piece)
        {
            if ($piece->ID_Payement!=$this->ID_Payement)
                $piece->set_ID_Payement($this->ID_Payement);
            $piece->save($transaction);
        }
    }

    public function delete_Piece_Payement($transaction = null)
    {
        global $Connexion;
        if (isset($this->Piece_Payement))
            foreach ($this->Piece_Payement as $piece)
            {
                $piece->delete($transaction);
            }

        $query = "DELETE FROM `piece` WHERE ID_Payement = ".$this->ID_Payement;
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

        $this->Piece_Payement= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Payement))&&($this->ID_Payement!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Piece_Payement() && (count($this->get_Piece_Payement())!=0) && (MyORMCASCADE) )
                $this->delete_Piece_Payement($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Payement', $this->structure);
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

        if ((is_null($this->ID_Payement))||($this->ID_Payement==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if (!is_null($this->Parent_Cheque))
                $this->ID_Cheque = $this->set_ID_Cheque($this->Parent_Cheque->save($transaction));	 
        
        if (!is_null($this->Parent_ModePayement))
                $this->ID_ModePayement = $this->set_ID_ModePayement($this->Parent_ModePayement->save($transaction));	 
        
        if (!is_null($this->Parent_Compte))
                $this->ID_Compte = $this->set_ID_Compte($this->Parent_Compte->save($transaction));	 
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Payement))&&($this->ID_Payement!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Payement', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Payement', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Payement=$Connexion->sql_insert_id();
                $this->structure['ID_Payement']["4"] = $this->ID_Payement;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Piece_Payement))
                $this->save_Piece_Payement($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Payement;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Payement` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Payement = null;
        $this->structure['ID_Payement'][4] = "";
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
        if (!is_null($this->Piece_Payement))
            $this->get_Piece_Payement();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Piece_Payement();
    }
		
    //endofclass
}
	