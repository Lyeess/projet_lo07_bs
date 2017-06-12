<?php

class Cursus
{
    private $num_cursus;
    private $num_etu;
    private $num_sem;
    private $nom_sem;
    private $nom_ue;
    private $cat_ue;
    private $affect;
    private $sem_utt;
    private $profil;
    private $result_ue;
    private $credit_ue;

    /**
     * @return mixed
     */
    public function getNumCursus()
    {
        return $this->num_cursus;
    }

    /**
     * @param mixed $num_cursus
     */
    public function setNumCursus($num_cursus)
    {
        $this->num_cursus = $num_cursus;
    }

    /**
     * @return mixed
     */
    public function getNumEtu()
    {
        return $this->num_etu;
    }

    /**
     * @param mixed $num_etu
     * @return Cursus
     */
    public function setNumEtu($num_etu)
    {
        $this->num_etu = $num_etu;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumSem()
    {
        return $this->num_sem;
    }

    /**
     * @param mixed $num_sem
     * @return Cursus
     */
    public function setNumSem($num_sem)
    {
        $this->num_sem = $num_sem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomSem()
    {
        return $this->nom_sem;
    }

    /**
     * @param mixed $nom_sem
     * @return Cursus
     */
    public function setNomSem($nom_sem)
    {
        $this->nom_sem = $nom_sem;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomUe()
    {
        return $this->nom_ue;
    }

    /**
     * @param mixed $nom_ue
     * @return Cursus
     */
    public function setNomUe($nom_ue)
    {
        $this->nom_ue = $nom_ue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCatUe()
    {
        return $this->cat_ue;
    }

    /**
     * @param mixed $cat_ue
     * @return Cursus
     */
    public function setCatUe($cat_ue)
    {
        $this->cat_ue = $cat_ue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAffect()
    {
        return $this->affect;
    }

    /**
     * @param mixed $affect
     * @return Cursus
     */
    public function setAffect($affect)
    {
        $this->affect = $affect;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSemUtt()
    {
        return $this->sem_utt;
    }

    /**
     * @param mixed $sem_utt
     * @return Cursus
     */
    public function setSemUtt($sem_utt)
    {
        $this->sem_utt = $sem_utt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     * @return Cursus
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResultUE()
    {
        return $this->result_ue;
    }

    /**
     * @param mixed $result_ue
     * @return Cursus
     */
    public function setResultUE($result_ue)
    {
        $this->result_ue = $result_ue;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditUe()
    {
        return $this->credit_ue;
    }

    /**
     * @param mixed $credit_ue
     * @return Cursus
     */
    public function setCreditUe($credit_ue)
    {
        $this->credit_ue = $credit_ue;
        return $this;
    }

    public static function getCursusPourEtudiant(Etudiant $etudiant)
    {
        $PDOInstance = MyPDO::getInstance();
        $req = $PDOInstance->prepare("SELECT * FROM cursus WHERE num_etu = :num_etu ");
        $req->execute(
            [
                "num_etu" => $etudiant->getNumEtu()
            ]
        );
        return $req->fetchAll(PDO::FETCH_CLASS, "Cursus");
    }

    public static function ajouterCursus(Cursus $cursus)
    {
        $PDOInstance = MyPDO::getInstance();
        $req = $PDOInstance->prepare("
            INSERT INTO cursus(num_etu, num_sem, nom_ue, nom_sem, cat_ue, affect, sem_utt, profil, result_ue, credit_ue) 
            VALUES(:num_etu, :num_sem, :nom_ue, :nom_sem, :cat_ue, :affect, :sem_utt, :profil, :result_ue, :credit_ue)
        ");
        return $req->execute(
            [
                "num_etu" => $cursus->getNumEtu(),
                "num_sem" => $cursus->getNumSem(),
                "nom_ue" => $cursus->getNomUe(),
                "nom_sem" => $cursus->getNomSem(),
                "cat_ue" => $cursus->getCatUe(),
                "affect" => $cursus->getAffect(),
                "sem_utt" => $cursus->getSemUtt(),
                "profil" => $cursus->getProfil(),
                "result_ue" => $cursus->getResultue(),
                "credit_ue" => $cursus->getCreditUe(),
            ]
        );
    }

    public static  function supprimerCursus(Cursus $cursus){
        var_dump($cursus);
        $PDOInstance = MyPDO::getInstance();
        $req = $PDOInstance->prepare("
            DELETE FROM cursus WHERE num_cursus = :num_cursus
        ");
        return $req->execute(
            [
                "num_cursus" => $cursus->getNumCursus(),
            ]
        );
    }

    public static function getCursusDepuisNumCursus($numCursus)
    {
        $PDOInstance = MyPDO::getInstance();
        $req = $PDOInstance->prepare("SELECT * FROM cursus WHERE num_cursus = :num_cursus");
        $req->setFetchMode(PDO::FETCH_CLASS, "Cursus");
        $req->execute(
            [
                "num_cursus" => $numCursus,
            ]
        );
        return $req->fetch();
    }
}
