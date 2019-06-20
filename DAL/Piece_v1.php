<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Piece
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 19.06.2019 12h
* File name : Piece.php
* Table : comptabad.Piece 
* -----------------------------------------------------------------------------------
*/

class Piece extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    protected $ID_Piece; // PRI
    const primary_key = 'ID_Piece'; // PRI
    protected $ID_PieceType;
    protected $ID_Facture;
    protected $ID_Entite;
    protected $ID_Payement;
    protected $NumeroPiece;
    protected $DescriptionPiece;
    protected $DateRapprochement;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    
    protected $Parent_PieceType;
    protected $Parent_Facture;
    protected $Parent_Entite;
    protected $Parent_Payement;

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    protected $Ecriture_Piece;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Piece' => array('ID_Piece', 'int', '2', '0', ''),
        'ID_PieceType' => array('ID_PieceType', 'int', '1', '0', ''),
        'ID_Facture' => array('ID_Facture', 'int', '1', '0', ''),
        'ID_Entite' => array('ID_Entite', 'int', '1', '0', ''),
        'ID_Payement' => array('ID_Payement', 'int', '1', '0', ''),
        'NumeroPiece' => array('NumeroPiece', 'varchar-15', '0', '0', ''),
        'DescriptionPiece' => array('DescriptionPiece', 'mediumtext', '1', '0', ''),
        'DateRapprochement' => array('DateRapprochement', 'date', '1', '0', ''),
        'Parent_PieceType' => array('Parent_PieceType', 'ParentObject', '1', '0', ''),
        'Parent_Facture' => array('Parent_Facture', 'ParentObject', '1', '0', ''),
        'Parent_Entite' => array('Parent_Entite', 'ParentObject', '1', '0', ''),
        'Parent_Payement' => array('Parent_Payement', 'ParentObject', '1', '0', ''),
        'Ecriture_Piece' => array('Ecriture_Piece', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Piece` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Piece = $this->formater($this->structure['ID_Piece'],$row->ID_Piece);
                    $this->structure['ID_Piece'][4] = $this->ID_Piece;
                    $this->ID_PieceType = $this->formater($this->structure['ID_PieceType'],$row->ID_PieceType);
                    $this->structure['ID_PieceType'][4] = $this->ID_PieceType;
                    $this->ID_Facture = $this->formater($this->structure['ID_Facture'],$row->ID_Facture);
                    $this->structure['ID_Facture'][4] = $this->ID_Facture;
                    $this->ID_Entite = $this->formater($this->structure['ID_Entite'],$row->ID_Entite);
                    $this->structure['ID_Entite'][4] = $this->ID_Entite;
                    $this->ID_Payement = $this->formater($this->structure['ID_Payement'],$row->ID_Payement);
                    $this->structure['ID_Payement'][4] = $this->ID_Payement;
                    $this->NumeroPiece = $this->formater($this->structure['NumeroPiece'],$row->NumeroPiece);
                    $this->structure['NumeroPiece'][4] = $this->NumeroPiece;
                    $this->DescriptionPiece = $this->formater($this->structure['DescriptionPiece'],$row->DescriptionPiece);
                    $this->structure['DescriptionPiece'][4] = $this->DescriptionPiece;
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
	
    public function get_ID_Piece()
    {
        return stripslashes($this->ID_Piece);
    }

    public function get_ID_PieceType()
    {
        return stripslashes($this->ID_PieceType);
    }

    public function set_ID_PieceType($valeur = null)
    {
        if ( ( $this->ID_PieceType != parent::quote($this->structure['ID_PieceType'][1],$valeur) ) && ( $this->ID_PieceType != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_PieceType = NULL;
            }
            else
            {
                $this->ID_PieceType = parent::quote($this->structure['ID_PieceType'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_PieceType']["3"]=1;
            $this->structure['ID_PieceType']["4"] = $this->ID_PieceType;

            $test = explode("-",$this->structure['ID_PieceType'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_PieceType']["4"] = substr($this->structure['ID_PieceType']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_Facture()
    {
        return stripslashes($this->ID_Facture);
    }

    public function set_ID_Facture($valeur = null)
    {
        if ( ( $this->ID_Facture != parent::quote($this->structure['ID_Facture'][1],$valeur) ) && ( $this->ID_Facture != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Facture = NULL;
            }
            else
            {
                $this->ID_Facture = parent::quote($this->structure['ID_Facture'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Facture']["3"]=1;
            $this->structure['ID_Facture']["4"] = $this->ID_Facture;

            $test = explode("-",$this->structure['ID_Facture'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Facture']["4"] = substr($this->structure['ID_Facture']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
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

    public function get_ID_Payement()
    {
        return stripslashes($this->ID_Payement);
    }

    public function set_ID_Payement($valeur = null)
    {
        if ( ( $this->ID_Payement != parent::quote($this->structure['ID_Payement'][1],$valeur) ) && ( $this->ID_Payement != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Payement = NULL;
            }
            else
            {
                $this->ID_Payement = parent::quote($this->structure['ID_Payement'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Payement']["3"]=1;
            $this->structure['ID_Payement']["4"] = $this->ID_Payement;

            $test = explode("-",$this->structure['ID_Payement'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Payement']["4"] = substr($this->structure['ID_Payement']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_NumeroPiece()
    {
        return stripslashes($this->NumeroPiece);
    }

    public function set_NumeroPiece($valeur = null)
    {
        if ( ( $this->NumeroPiece != parent::quote($this->structure['NumeroPiece'][1],$valeur) ) && ( $this->NumeroPiece != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->NumeroPiece = NULL;
            }
            else
            {
                $this->NumeroPiece = parent::quote($this->structure['NumeroPiece'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['NumeroPiece']["3"]=1;
            $this->structure['NumeroPiece']["4"] = $this->NumeroPiece;

            $test = explode("-",$this->structure['NumeroPiece'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['NumeroPiece']["4"] = substr($this->structure['NumeroPiece']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_DescriptionPiece()
    {
        return stripslashes($this->DescriptionPiece);
    }

    public function set_DescriptionPiece($valeur = null)
    {
        if ( ( $this->DescriptionPiece != parent::quote($this->structure['DescriptionPiece'][1],$valeur) ) && ( $this->DescriptionPiece != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->DescriptionPiece = NULL;
            }
            else
            {
                $this->DescriptionPiece = parent::quote($this->structure['DescriptionPiece'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['DescriptionPiece']["3"]=1;
            $this->structure['DescriptionPiece']["4"] = $this->DescriptionPiece;

            $test = explode("-",$this->structure['DescriptionPiece'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['DescriptionPiece']["4"] = substr($this->structure['DescriptionPiece']["4"],0,$test["1"]);
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

    public function get_Parent_PieceType($forced = 0)
    {

            $this->Parent_PieceType = new piecetype($this->ID_PieceType);

            return $this->Parent_PieceType;
    }

    public function set_Parent_PieceType($piecetype)
    {
            $this->ID_PieceType=$piecetype->ID_PieceType;
            $this->structure["ID_PieceType"][3]=1;
            $this->structure["ID_PieceType"][4]=$piecetype->ID_PieceType;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_PieceType=$piecetype;
            return ($piecetype);
    }

    public function get_Parent_Facture($forced = 0)
    {

            $this->Parent_Facture = new facture($this->ID_Facture);

            return $this->Parent_Facture;
    }

    public function set_Parent_Facture($facture)
    {
            $this->ID_Facture=$facture->ID_Facture;
            $this->structure["ID_Facture"][3]=1;
            $this->structure["ID_Facture"][4]=$facture->ID_Facture;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Facture=$facture;
            return ($facture);
    }

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

    public function get_Parent_Payement($forced = 0)
    {

            $this->Parent_Payement = new payement($this->ID_Payement);

            return $this->Parent_Payement;
    }

    public function set_Parent_Payement($payement)
    {
            $this->ID_Payement=$payement->ID_Payement;
            $this->structure["ID_Payement"][3]=1;
            $this->structure["ID_Payement"][4]=$payement->ID_Payement;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_Payement=$payement;
            return ($payement);
    }

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    public function get_Ecriture_Piece()
    {
        global $Connexion;

        if ((is_null($this->Ecriture_Piece))&&(!is_null($this->ID_Piece)))
        {
            $query="SELECT * FROM `ecriture` WHERE ID_Piece = ".$this->ID_Piece." ORDER BY ID_Ecriture";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\ecriture'))
            {
                $this->add_Ecriture_Piece($row);
            }
        }
        return ($this->Ecriture_Piece);
    }

    public function set_Ecriture_Piece($ecritures)
    {
        if (!isset($this->Ecriture_Piece) || (isset($this->Ecriture_Piece) && count($this->Ecriture_Piece)==0))
            foreach ($ecritures as $var)
                add_Ecriture_Piece($var);
        else
            throw new DALException( "Can set Ecriture_Piece cause actual Ecriture_Piece is not empty");
        return ($ecritures);
    }

    public function add_Ecriture_Piece(ecriture $ecriture)
    {
        if ($ecriture->ID_Piece!=$this->ID_Piece)
            $ecriture->set_ID_Piece($this->ID_Piece);
        if (isset($this->Ecriture_Piece) && is_array($this->Ecriture_Piece)) {
            $count=count($this->Ecriture_Piece);
        }
        else {
            $count=0;
        }
        while (isset($this->Ecriture_Piece[$count]))
            $count++;
        $this->Ecriture_Piece[$count]=$ecriture;
    }

    public function remove_Ecriture_Piece(ecriture $removeecriture)
    {
        foreach ($this->Ecriture_Piece as $var)
        {
            if ($removeecriture == $var)
            {
                $var->delete();
                $this->ecriture = null;
            }
        }
    }

    protected function save_Ecriture_Piece($transaction = null)
    {
        foreach ($this->Ecriture_Piece as $ecriture)
        {
            if ($ecriture->ID_Piece!=$this->ID_Piece)
                $ecriture->set_ID_Piece($this->ID_Piece);
            $ecriture->save($transaction);
        }
    }

    public function delete_Ecriture_Piece($transaction = null)
    {
        global $Connexion;
        if (isset($this->Ecriture_Piece))
            foreach ($this->Ecriture_Piece as $ecriture)
            {
                $ecriture->delete($transaction);
            }

        $query = "DELETE FROM `ecriture` WHERE ID_Piece = ".$this->ID_Piece;
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

        $this->Ecriture_Piece= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Piece))&&($this->ID_Piece!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Ecriture_Piece() && (count($this->get_Ecriture_Piece())!=0) && (MyORMCASCADE) )
                $this->delete_Ecriture_Piece($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Piece', $this->structure);
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

        if ((is_null($this->ID_Piece))||($this->ID_Piece==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if (!is_null($this->Parent_PieceType))
                $this->ID_PieceType = $this->set_ID_PieceType($this->Parent_PieceType->save($transaction));	 
        
        if (!is_null($this->Parent_Facture))
                $this->ID_Facture = $this->set_ID_Facture($this->Parent_Facture->save($transaction));	 
        
        if (!is_null($this->Parent_Entite))
                $this->ID_Entite = $this->set_ID_Entite($this->Parent_Entite->save($transaction));	 
        
        if (!is_null($this->Parent_Payement))
                $this->ID_Payement = $this->set_ID_Payement($this->Parent_Payement->save($transaction));	 
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Piece))&&($this->ID_Piece!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Piece', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Piece', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Piece=$Connexion->sql_insert_id();
                $this->structure['ID_Piece']["4"] = $this->ID_Piece;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Ecriture_Piece))
                $this->save_Ecriture_Piece($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Piece;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Piece` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Piece = null;
        $this->structure['ID_Piece'][4] = "";
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
        if (!is_null($this->Ecriture_Piece))
            $this->get_Ecriture_Piece();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Ecriture_Piece();
    }
		
    //endofclass
}
	