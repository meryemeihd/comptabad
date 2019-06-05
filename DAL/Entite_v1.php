<?php
namespace MyORM;

use MyException\MyException;
		
/*
*
* -----------------------------------------------------------------------------------
* ORM version : 1
* Class Name : Entite
* Generator : ORMGEN by PLATEL Renaud generated on LAPTOP-32QDF5BA
* Date Generated : 05.06.2019 15h
* File name : Entite.php
* Table : meryeme_comptabad.Entite 
* -----------------------------------------------------------------------------------
*/

class Entite extends Common
{
	
    // **********************
    // Variables
    // **********************
    
    private $ID_Entite; // PRI
    const primary_key = 'ID_Entite'; // PRI
    private $ID_TypeEntite;
    private $ID_Utilisateur;
    private $Nom;
    private $CodePostal;
    private $Addresse;
    private $Ville;
    private $Mail;
    private $Tel;
    private $Raison;
    private $Siret;
    private $Prenom;
    private $CodeTiers;
    private $Capital;
    private $NumeroTva;

    // **********************
    // Parents object for this class (Keys)
    // **********************
    
    public $Parent_TypeEntite;

    // **********************
    // Childs array of object for this class (Foreign Keys)
    // **********************
    
    public $Exercice_Exercice;
    public $Exercice_Entite;
    public $Piece_Entite;

    // **********************
    // Interface to control the variable of this class and the update flag
    // **********************

    private $Database; // Database for this object
    public $isNew = 0; // Memory for insert
    private $isToSaveOrToUpdate = 0; // Memory for update
    //Memory array of fields for update
    private $structure = array(
        'ID_Entite' => array('ID_Entite', 'int', '2', '0', ''),
        'ID_TypeEntite' => array('ID_TypeEntite', 'int', '1', '0', ''),
        'ID_Utilisateur' => array('ID_Utilisateur', 'int', '0', '0', ''),
        'Nom' => array('Nom', 'varchar-50', '1', '0', ''),
        'CodePostal' => array('CodePostal', 'varchar-50', '1', '0', ''),
        'Addresse' => array('Addresse', 'varchar-50', '1', '0', ''),
        'Ville' => array('Ville', 'varchar-50', '1', '0', ''),
        'Mail' => array('Mail', 'varchar-50', '1', '0', ''),
        'Tel' => array('Tel', 'varchar-50', '1', '0', ''),
        'Raison' => array('Raison', 'varchar-50', '1', '0', ''),
        'Siret' => array('Siret', 'int', '0', '0', ''),
        'Prenom' => array('Prenom', 'int', '1', '0', ''),
        'CodeTiers' => array('CodeTiers', 'int', '1', '0', ''),
        'Capital' => array('Capital', 'int', '1', '0', ''),
        'NumeroTva' => array('NumeroTva', 'int', '1', '0', ''),
        'Parent_TypeEntite' => array('Parent_TypeEntite', 'ParentObject', '1', '0', ''),
        'Exercice_Exercice' => array('Exercice_Exercice', 'ChildObject', '1', '0', ''),
        'Exercice_Entite' => array('Exercice_Entite', 'ChildObject', '1', '0', ''),
        'Piece_Entite' => array('Piece_Entite', 'ChildObject', '1', '0', '')
    );

    // **********************
    // Constructor
    // **********************
    function __construct ($val = null, $property = self::primary_key)
    {
        global $Connexion;
        if((isset($val))&&(trim($val)!=""))
        {
            $query = $Connexion->sql_query("SELECT * FROM `Entite` WHERE `$property` = ".parent::quote($this->structure[$property],$val) ." LIMIT 1");

            if($Connexion->sql_num_rows($query) != 0)
            {
                while($row = $Connexion->sql_fetch_object($query))
                {
                    $this->ID_Entite = $this->formater($this->structure['ID_Entite'],$row->ID_Entite);
                    $this->structure['ID_Entite'][4] = $this->ID_Entite;
                    $this->ID_TypeEntite = $this->formater($this->structure['ID_TypeEntite'],$row->ID_TypeEntite);
                    $this->structure['ID_TypeEntite'][4] = $this->ID_TypeEntite;
                    $this->ID_Utilisateur = $this->formater($this->structure['ID_Utilisateur'],$row->ID_Utilisateur);
                    $this->structure['ID_Utilisateur'][4] = $this->ID_Utilisateur;
                    $this->Nom = $this->formater($this->structure['Nom'],$row->Nom);
                    $this->structure['Nom'][4] = $this->Nom;
                    $this->CodePostal = $this->formater($this->structure['CodePostal'],$row->CodePostal);
                    $this->structure['CodePostal'][4] = $this->CodePostal;
                    $this->Addresse = $this->formater($this->structure['Addresse'],$row->Addresse);
                    $this->structure['Addresse'][4] = $this->Addresse;
                    $this->Ville = $this->formater($this->structure['Ville'],$row->Ville);
                    $this->structure['Ville'][4] = $this->Ville;
                    $this->Mail = $this->formater($this->structure['Mail'],$row->Mail);
                    $this->structure['Mail'][4] = $this->Mail;
                    $this->Tel = $this->formater($this->structure['Tel'],$row->Tel);
                    $this->structure['Tel'][4] = $this->Tel;
                    $this->Raison = $this->formater($this->structure['Raison'],$row->Raison);
                    $this->structure['Raison'][4] = $this->Raison;
                    $this->Siret = $this->formater($this->structure['Siret'],$row->Siret);
                    $this->structure['Siret'][4] = $this->Siret;
                    $this->Prenom = $this->formater($this->structure['Prenom'],$row->Prenom);
                    $this->structure['Prenom'][4] = $this->Prenom;
                    $this->CodeTiers = $this->formater($this->structure['CodeTiers'],$row->CodeTiers);
                    $this->structure['CodeTiers'][4] = $this->CodeTiers;
                    $this->Capital = $this->formater($this->structure['Capital'],$row->Capital);
                    $this->structure['Capital'][4] = $this->Capital;
                    $this->NumeroTva = $this->formater($this->structure['NumeroTva'],$row->NumeroTva);
                    $this->structure['NumeroTva'][4] = $this->NumeroTva;
                    
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
	
    public function get_ID_Entite()
    {
        return stripslashes($this->ID_Entite);
    }

    public function get_ID_TypeEntite()
    {
        return stripslashes($this->ID_TypeEntite);
    }

    public function set_ID_TypeEntite($valeur = null)
    {
        if ( ( $this->ID_TypeEntite != parent::quote($this->structure['ID_TypeEntite'][1],$valeur) ) && ( $this->ID_TypeEntite != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_TypeEntite = NULL;
            }
            else
            {
                $this->ID_TypeEntite = parent::quote($this->structure['ID_TypeEntite'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_TypeEntite']["3"]=1;
            $this->structure['ID_TypeEntite']["4"] = $this->ID_TypeEntite;

            $test = explode("-",$this->structure['ID_TypeEntite'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_TypeEntite']["4"] = substr($this->structure['ID_TypeEntite']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_ID_Utilisateur()
    {
        return stripslashes($this->ID_Utilisateur);
    }

    public function set_ID_Utilisateur($valeur = null)
    {
        if ( ( $this->ID_Utilisateur != parent::quote($this->structure['ID_Utilisateur'][1],$valeur) ) && ( $this->ID_Utilisateur != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->ID_Utilisateur = NULL;
            }
            else
            {
                $this->ID_Utilisateur = parent::quote($this->structure['ID_Utilisateur'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['ID_Utilisateur']["3"]=1;
            $this->structure['ID_Utilisateur']["4"] = $this->ID_Utilisateur;

            $test = explode("-",$this->structure['ID_Utilisateur'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['ID_Utilisateur']["4"] = substr($this->structure['ID_Utilisateur']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Nom()
    {
        return stripslashes($this->Nom);
    }

    public function set_Nom($valeur = null)
    {
        if ( ( $this->Nom != parent::quote($this->structure['Nom'][1],$valeur) ) && ( $this->Nom != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Nom = NULL;
            }
            else
            {
                $this->Nom = parent::quote($this->structure['Nom'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Nom']["3"]=1;
            $this->structure['Nom']["4"] = $this->Nom;

            $test = explode("-",$this->structure['Nom'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Nom']["4"] = substr($this->structure['Nom']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_CodePostal()
    {
        return stripslashes($this->CodePostal);
    }

    public function set_CodePostal($valeur = null)
    {
        if ( ( $this->CodePostal != parent::quote($this->structure['CodePostal'][1],$valeur) ) && ( $this->CodePostal != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->CodePostal = NULL;
            }
            else
            {
                $this->CodePostal = parent::quote($this->structure['CodePostal'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['CodePostal']["3"]=1;
            $this->structure['CodePostal']["4"] = $this->CodePostal;

            $test = explode("-",$this->structure['CodePostal'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['CodePostal']["4"] = substr($this->structure['CodePostal']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Addresse()
    {
        return stripslashes($this->Addresse);
    }

    public function set_Addresse($valeur = null)
    {
        if ( ( $this->Addresse != parent::quote($this->structure['Addresse'][1],$valeur) ) && ( $this->Addresse != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Addresse = NULL;
            }
            else
            {
                $this->Addresse = parent::quote($this->structure['Addresse'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Addresse']["3"]=1;
            $this->structure['Addresse']["4"] = $this->Addresse;

            $test = explode("-",$this->structure['Addresse'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Addresse']["4"] = substr($this->structure['Addresse']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Ville()
    {
        return stripslashes($this->Ville);
    }

    public function set_Ville($valeur = null)
    {
        if ( ( $this->Ville != parent::quote($this->structure['Ville'][1],$valeur) ) && ( $this->Ville != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Ville = NULL;
            }
            else
            {
                $this->Ville = parent::quote($this->structure['Ville'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Ville']["3"]=1;
            $this->structure['Ville']["4"] = $this->Ville;

            $test = explode("-",$this->structure['Ville'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Ville']["4"] = substr($this->structure['Ville']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Mail()
    {
        return stripslashes($this->Mail);
    }

    public function set_Mail($valeur = null)
    {
        if ( ( $this->Mail != parent::quote($this->structure['Mail'][1],$valeur) ) && ( $this->Mail != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Mail = NULL;
            }
            else
            {
                $this->Mail = parent::quote($this->structure['Mail'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Mail']["3"]=1;
            $this->structure['Mail']["4"] = $this->Mail;

            $test = explode("-",$this->structure['Mail'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Mail']["4"] = substr($this->structure['Mail']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Tel()
    {
        return stripslashes($this->Tel);
    }

    public function set_Tel($valeur = null)
    {
        if ( ( $this->Tel != parent::quote($this->structure['Tel'][1],$valeur) ) && ( $this->Tel != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Tel = NULL;
            }
            else
            {
                $this->Tel = parent::quote($this->structure['Tel'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Tel']["3"]=1;
            $this->structure['Tel']["4"] = $this->Tel;

            $test = explode("-",$this->structure['Tel'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Tel']["4"] = substr($this->structure['Tel']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Raison()
    {
        return stripslashes($this->Raison);
    }

    public function set_Raison($valeur = null)
    {
        if ( ( $this->Raison != parent::quote($this->structure['Raison'][1],$valeur) ) && ( $this->Raison != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Raison = NULL;
            }
            else
            {
                $this->Raison = parent::quote($this->structure['Raison'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Raison']["3"]=1;
            $this->structure['Raison']["4"] = $this->Raison;

            $test = explode("-",$this->structure['Raison'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Raison']["4"] = substr($this->structure['Raison']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Siret()
    {
        return stripslashes($this->Siret);
    }

    public function set_Siret($valeur = null)
    {
        if ( ( $this->Siret != parent::quote($this->structure['Siret'][1],$valeur) ) && ( $this->Siret != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Siret = NULL;
            }
            else
            {
                $this->Siret = parent::quote($this->structure['Siret'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Siret']["3"]=1;
            $this->structure['Siret']["4"] = $this->Siret;

            $test = explode("-",$this->structure['Siret'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Siret']["4"] = substr($this->structure['Siret']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Prenom()
    {
        return stripslashes($this->Prenom);
    }

    public function set_Prenom($valeur = null)
    {
        if ( ( $this->Prenom != parent::quote($this->structure['Prenom'][1],$valeur) ) && ( $this->Prenom != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Prenom = NULL;
            }
            else
            {
                $this->Prenom = parent::quote($this->structure['Prenom'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Prenom']["3"]=1;
            $this->structure['Prenom']["4"] = $this->Prenom;

            $test = explode("-",$this->structure['Prenom'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Prenom']["4"] = substr($this->structure['Prenom']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_CodeTiers()
    {
        return stripslashes($this->CodeTiers);
    }

    public function set_CodeTiers($valeur = null)
    {
        if ( ( $this->CodeTiers != parent::quote($this->structure['CodeTiers'][1],$valeur) ) && ( $this->CodeTiers != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->CodeTiers = NULL;
            }
            else
            {
                $this->CodeTiers = parent::quote($this->structure['CodeTiers'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['CodeTiers']["3"]=1;
            $this->structure['CodeTiers']["4"] = $this->CodeTiers;

            $test = explode("-",$this->structure['CodeTiers'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['CodeTiers']["4"] = substr($this->structure['CodeTiers']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_Capital()
    {
        return stripslashes($this->Capital);
    }

    public function set_Capital($valeur = null)
    {
        if ( ( $this->Capital != parent::quote($this->structure['Capital'][1],$valeur) ) && ( $this->Capital != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->Capital = NULL;
            }
            else
            {
                $this->Capital = parent::quote($this->structure['Capital'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['Capital']["3"]=1;
            $this->structure['Capital']["4"] = $this->Capital;

            $test = explode("-",$this->structure['Capital'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['Capital']["4"] = substr($this->structure['Capital']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    public function get_NumeroTva()
    {
        return stripslashes($this->NumeroTva);
    }

    public function set_NumeroTva($valeur = null)
    {
        if ( ( $this->NumeroTva != parent::quote($this->structure['NumeroTva'][1],$valeur) ) && ( $this->NumeroTva != $valeur ) )
        {	
            if(is_null($valeur))
            {
                $this->NumeroTva = NULL;
            }
            else
            {
                $this->NumeroTva = parent::quote($this->structure['NumeroTva'][1],$valeur);
            }
            $this->isToSaveOrToUpdate=1;
            $this->structure['NumeroTva']["3"]=1;
            $this->structure['NumeroTva']["4"] = $this->NumeroTva;

            $test = explode("-",$this->structure['NumeroTva'][1]);
            if ( ( $test["0"] == "varchar" ) && ( isset( $test["1"] ) ) )
            {
                $this->structure['NumeroTva']["4"] = substr($this->structure['NumeroTva']["4"],0,$test["1"]);
            }
            
        }
        return $valeur;
    }

    // **********************
    // Specific get & set method for parents objects
    // **********************

    public function get_Parent_TypeEntite($forced = 0)
    {

            $this->Parent_TypeEntite = new TypeEntite($this->ID_TypeEntite);

            return $this->Parent_TypeEntite;
    }

    public function set_Parent_TypeEntite($TypeEntite)
    {
            $this->ID_TypeEntite=$TypeEntite->ID_TypeEntite;
            $this->structure["ID_TypeEntite"][3]=1;
            $this->structure["ID_TypeEntite"][4]=$TypeEntite->ID_TypeEntite;
            $this->isToSaveOrToUpdate=1;
            $this->Parent_TypeEntite=$TypeEntite;
            return ($TypeEntite);
    }

    // **********************
    // Specific get & set method for childs objets
    // **********************
    
    public function get_Exercice_Exercice()
    {
        global $Connexion;

        if ((is_null($this->Exercice_Exercice))&&(!is_null($this->ID_Entite)))
        {
            $query="SELECT * FROM `Exercice` WHERE ID_Exercice = ".$this->ID_Entite." ORDER BY ID_Exercice";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\Exercice'))
            {
                $this->add_Exercice_Exercice($row);
            }
        }
        return ($this->Exercice_Exercice);
    }

    public function set_Exercice_Exercice($Exercices)
    {
        if (!isset($this->Exercice_Exercice) || (isset($this->Exercice_Exercice) && count($this->Exercice_Exercice)==0))
            foreach ($Exercices as $var)
                add_Exercice_Exercice($var);
        else
            throw new DALException( "Can set Exercice_Exercice cause actual Exercice_Exercice is not empty");
        return ($Exercices);
    }

    public function add_Exercice_Exercice(Exercice $Exercice)
    {
        if ($Exercice->ID_Exercice!=$this->ID_Entite)
            $Exercice->set_ID_Exercice($this->ID_Entite);
        if (isset($this->Exercice_Exercice) && is_array($this->Exercice_Exercice)) {
            $count=count($this->Exercice_Exercice);
        }
        else {
            $count=0;
        }
        while (isset($this->Exercice_Exercice[$count]))
            $count++;
        $this->Exercice_Exercice[$count]=$Exercice;
    }

    public function remove_Exercice_Exercice(Exercice $removeExercice)
    {
        foreach ($this->Exercice_Exercice as $var)
        {
            if ($removeExercice == $var)
            {
                $var->delete();
                $this->Exercice = null;
            }
        }
    }

    protected function save_Exercice_Exercice($transaction = null)
    {
        foreach ($this->Exercice_Exercice as $Exercice)
        {
            if ($Exercice->ID_Exercice!=$this->ID_Entite)
                $Exercice->set_ID_Exercice($this->ID_Entite);
            $Exercice->save($transaction);
        }
    }

    public function delete_Exercice_Exercice($transaction = null)
    {
        global $Connexion;
        if (isset($this->Exercice_Exercice))
            foreach ($this->Exercice_Exercice as $Exercice)
            {
                $Exercice->delete($transaction);
            }

        $query = "DELETE FROM `Exercice` WHERE ID_Exercice = ".$this->ID_Entite;
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

        $this->Exercice_Exercice= null;
    }
    
    public function get_Exercice_Entite()
    {
        global $Connexion;

        if ((is_null($this->Exercice_Entite))&&(!is_null($this->ID_Entite)))
        {
            $query="SELECT * FROM `Exercice` WHERE ID_Entite = ".$this->ID_Entite." ORDER BY ID_Exercice";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\Exercice'))
            {
                $this->add_Exercice_Entite($row);
            }
        }
        return ($this->Exercice_Entite);
    }

    public function set_Exercice_Entite($Exercices)
    {
        if (!isset($this->Exercice_Entite) || (isset($this->Exercice_Entite) && count($this->Exercice_Entite)==0))
            foreach ($Exercices as $var)
                add_Exercice_Entite($var);
        else
            throw new DALException( "Can set Exercice_Entite cause actual Exercice_Entite is not empty");
        return ($Exercices);
    }

    public function add_Exercice_Entite(Exercice $Exercice)
    {
        if ($Exercice->ID_Entite!=$this->ID_Entite)
            $Exercice->set_ID_Entite($this->ID_Entite);
        if (isset($this->Exercice_Entite) && is_array($this->Exercice_Entite)) {
            $count=count($this->Exercice_Entite);
        }
        else {
            $count=0;
        }
        while (isset($this->Exercice_Entite[$count]))
            $count++;
        $this->Exercice_Entite[$count]=$Exercice;
    }

    public function remove_Exercice_Entite(Exercice $removeExercice)
    {
        foreach ($this->Exercice_Entite as $var)
        {
            if ($removeExercice == $var)
            {
                $var->delete();
                $this->Exercice = null;
            }
        }
    }

    protected function save_Exercice_Entite($transaction = null)
    {
        foreach ($this->Exercice_Entite as $Exercice)
        {
            if ($Exercice->ID_Entite!=$this->ID_Entite)
                $Exercice->set_ID_Entite($this->ID_Entite);
            $Exercice->save($transaction);
        }
    }

    public function delete_Exercice_Entite($transaction = null)
    {
        global $Connexion;
        if (isset($this->Exercice_Entite))
            foreach ($this->Exercice_Entite as $Exercice)
            {
                $Exercice->delete($transaction);
            }

        $query = "DELETE FROM `Exercice` WHERE ID_Entite = ".$this->ID_Entite;
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

        $this->Exercice_Entite= null;
    }
    
    public function get_Piece_Entite()
    {
        global $Connexion;

        if ((is_null($this->Piece_Entite))&&(!is_null($this->ID_Entite)))
        {
            $query="SELECT * FROM `Piece` WHERE ID_Entite = ".$this->ID_Entite." ORDER BY ID_Piece";
            $result=$Connexion->sql_query($query);
            while($row = $Connexion->sql_fetch_object($result,'MyORM\Piece'))
            {
                $this->add_Piece_Entite($row);
            }
        }
        return ($this->Piece_Entite);
    }

    public function set_Piece_Entite($Pieces)
    {
        if (!isset($this->Piece_Entite) || (isset($this->Piece_Entite) && count($this->Piece_Entite)==0))
            foreach ($Pieces as $var)
                add_Piece_Entite($var);
        else
            throw new DALException( "Can set Piece_Entite cause actual Piece_Entite is not empty");
        return ($Pieces);
    }

    public function add_Piece_Entite(Piece $Piece)
    {
        if ($Piece->ID_Entite!=$this->ID_Entite)
            $Piece->set_ID_Entite($this->ID_Entite);
        if (isset($this->Piece_Entite) && is_array($this->Piece_Entite)) {
            $count=count($this->Piece_Entite);
        }
        else {
            $count=0;
        }
        while (isset($this->Piece_Entite[$count]))
            $count++;
        $this->Piece_Entite[$count]=$Piece;
    }

    public function remove_Piece_Entite(Piece $removePiece)
    {
        foreach ($this->Piece_Entite as $var)
        {
            if ($removePiece == $var)
            {
                $var->delete();
                $this->Piece = null;
            }
        }
    }

    protected function save_Piece_Entite($transaction = null)
    {
        foreach ($this->Piece_Entite as $Piece)
        {
            if ($Piece->ID_Entite!=$this->ID_Entite)
                $Piece->set_ID_Entite($this->ID_Entite);
            $Piece->save($transaction);
        }
    }

    public function delete_Piece_Entite($transaction = null)
    {
        global $Connexion;
        if (isset($this->Piece_Entite))
            foreach ($this->Piece_Entite as $Piece)
            {
                $Piece->delete($transaction);
            }

        $query = "DELETE FROM `Piece` WHERE ID_Entite = ".$this->ID_Entite;
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

        $this->Piece_Entite= null;
    }
    
    // **********************
    // DELETE
    // **********************

    public function delete($transaction = null)
    {
        global $Connexion;
        $thistransaction = "Off";
        $return = null;

        if ((isset($this->ID_Entite))&&($this->ID_Entite!=0))
        {
            if (is_null($transaction))
            {
                $thistransaction="On";
                $transaction = "On";
                if ($Connexion->TransactionMode == 1)
                    $Connexion->sql_starttransaction();
            }
	
            if ( null !== $this->get_Exercice_Exercice() && (count($this->get_Exercice_Exercice())!=0) && (MyORMCASCADE) )
                $this->delete_Exercice_Exercice($transaction);

            
            if ( null !== $this->get_Exercice_Entite() && (count($this->get_Exercice_Entite())!=0) && (MyORMCASCADE) )
                $this->delete_Exercice_Entite($transaction);

            
            if ( null !== $this->get_Piece_Entite() && (count($this->get_Piece_Entite())!=0) && (MyORMCASCADE) )
                $this->delete_Piece_Entite($transaction);

            if (($transaction=="On"))
            {
                $query = parent::makequery('DELETE', $Connexion->Database, 'Entite', $this->structure);
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

        if ((is_null($this->ID_Entite))||($this->ID_Entite==0))
        {
            $this->isToSaveOrToUpdate=1;
            $this->isNew=1;
        }
        
        if (!is_null($this->Parent_TypeEntite))
                $this->ID_TypeEntite = $this->set_ID_TypeEntite($this->Parent_TypeEntite->save($transaction));	 
        
        if ($this->isToSaveOrToUpdate==1)
        {

            if ((isset($this->ID_Entite))&&($this->ID_Entite!="0")&&($this->isNew!=1))
            {
                $query = parent::makequery('UPDATE', $Connexion->Database, 'Entite', $this->structure);
                $result=$Connexion->sql_query($query);
            }
            else
            {
                $query = parent::makequery('INSERT', $Connexion->Database, 'Entite', $this->structure);
                $Connexion->sql_query($query);
                $this->ID_Entite=$Connexion->sql_insert_id();
                $this->structure['ID_Entite']["4"] = $this->ID_Entite;
                $this->isNew=0;
            }
        }
	
        if (!is_null($this->Exercice_Exercice))
                $this->save_Exercice_Exercice($transaction);
        
        if (!is_null($this->Exercice_Entite))
                $this->save_Exercice_Entite($transaction);
        
        if (!is_null($this->Piece_Entite))
                $this->save_Piece_Entite($transaction);
        
        $this->isToSaveOrToUpdate=0;
        foreach ($this->structure as $field)
            if(isset($field[0]))
            {
                $this->structure[$field[0]][3]=0;
            }

        return $this->ID_Entite;
    }

    public function last_insert($property = self::primary_key)
    {
        global $Connexion;

        $query = $Connexion->sql_query("SELECT $property AS last FROM `Entite` ORDER BY ".self::primary_key." DESC LIMIT 1");
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
        $this->ID_Entite = null;
        $this->structure['ID_Entite'][4] = "";
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
        if (!is_null($this->Exercice_Exercice))
            $this->get_Exercice_Exercice();
if (!is_null($this->Exercice_Entite))
            $this->get_Exercice_Entite();
if (!is_null($this->Piece_Entite))
            $this->get_Piece_Entite();

    }
	
    public function LoadAllChilds()
    {
        $this->get_Exercice_Exercice();
        $this->get_Exercice_Entite();
        $this->get_Piece_Entite();
    }
		
    //endofclass
}
	