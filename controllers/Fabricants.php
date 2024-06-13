<?php

class Fabricants extends Controller
{
    /**
     * Cette méthode affiche la liste des fabricants
     *
     *
     * @return void
     */
    public function index()
    {
        // On instancie le modèle "fabricant"
        $this->loadModel('Fabricant');

        // On stocke les fabricants dans $fabricants
        $fabricant = $this->Fabricant->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('fabricant'));
    }

    /**
     * Méthode permettant d'afficher un fabricant à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function modif(int $id)
    {
        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On stocke le fabricant dans $fabricant
        $this->Fabricant->id = array(
            'ID_FABRICANT' => $id
        );
        $fabricant = $this->Fabricant->getOne();

        // On envoie les données à la vue modif
        $this->render('modif', compact('fabricant'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la MODIFICATION
     * d'un fabricant
     *
     * @param  int $id
     * @return void
     */
    public function modif_sauve(int $id)
    {

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On effectue la mise à jour
        $this->Fabricant->update($id, $nom);

        $message = "Fabricant bien modifié";
        $type_message = "success";

        // On redirige vers la liste
        // On stocke les couleurs dans $couleur
        $fabricant = $this->Fabricant->getAll();


        // On envoie les données à la vue index
        $this->render('index', compact('fabricant', 'message', 'type_message'));
    }


    /**
     * Méthode permettant d'afficher un fabricant à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id)
    {
        // On instancie le modèle "fabricant"
        $this->loadModel('Fabricant');

        // On stocke le fabricant dans $fabricant
        $this->Fabricant->id = array(
            'ID_FABRICANT' => $id
        );
        $fabricant = $this->Fabricant->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('fabricant'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'un fabricant
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id)
    {

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "fabricant"
        $this->loadModel('Fabricant');

        // On effectue la mise à jour
        $this->Fabricant->delete($id);

        // On redirige vers la liste
        // On stocke les fabricants dans $fabricants
        $fabricant = $this->Fabricant->getAll();

        $message = "Fabricant bien supprimé";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('fabricant', 'message', 'type_message'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'un nouveau fabricant
     *
     * @param  void
     * @return void
     */
    public function ajout()
    {
        // On affiche le formulaire
        $this->render('ajout', array());
    }

    /**
     * Méthode permettant d'enregistrer la saisie d'un nouveau fabricant
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve()
    {

        // On recupère les données envoyées par le formulaire
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Fabricant"
        $this->loadModel('Fabricant');

        // On effectue la mise à jour
        $this->Fabricant->insert($nom);

        // On redirige vers la liste
        // On stocke les fabricants dans $fabricants
        $fabricant = $this->Fabricant->getAll();

        $message = "Fabricant bien Ajouté";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('fabricant', 'message', 'type_message'));
    }
}
