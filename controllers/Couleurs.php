<?php

class Couleurs extends Controller
{
    /**
     * Cette méthode affiche la liste des Couleurs
     *
     *
     * @return void
     */
    public function index()
    {
        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On stocke les couleurs dans $couleurs
        $couleur = $this->Couleur->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('couleur'));
    }

    /**
     * Méthode permettant d'afficher une couleur à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function modif(int $id)
    {
        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On stocke la couleur dans $couleur
        $this->Couleur->id = array(
            'ID_COULEUR' => $id
        );
        $couleur = $this->Couleur->getOne();

        // On envoie les données à la vue modif
        $this->render('modif', compact('couleur'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la MODIFICATION
     * d'une couleur
     *
     * @param  int $id
     * @return void
     */
    public function modif_sauve(int $id)
    {

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On effectue la mise à jour
        $this->Couleur->update($id, $nom);

        $message = "Couleur bien modifiée";
        $type_message = "success";

        // On redirige vers la liste
        // On stocke les couleurs dans $couleur
        $couleur = $this->Couleur->getAll();


        // On envoie les données à la vue index
        $this->render('index', compact('couleur', 'message', 'type_message'));
    }


    /**
     * Méthode permettant d'afficher une couleur à partir de son ID
     *
     * @param  int $id
     * @return void
     */
    public function suppr(int $id)
    {
        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On stocke la couleur dans $couleur
        $this->Couleur->id = array(
            'ID_COULEUR' => $id
        );
        $couleur = $this->Couleur->getOne();

        // On envoie les données à la vue modif
        $this->render('suppr', compact('couleur'));
    }

    /**
     * Méthode permettant de traiter l'enregistrement de la SUPPRESSION
     * d'une couleur
     *
     * @param  int $id
     * @return void
     */
    public function suppr_sauve(int $id)
    {

        // On recupère les données envoyées par le formulaire
        $id = $_REQUEST['Id'];

        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On effectue la mise à jour
        $this->Couleur->delete($id);

        // On redirige vers la liste
        // On stocke les couleurs dans $couleurs
        $couleur = $this->Couleur->getAll();

        $message = "Couleur bien supprimée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('couleur', 'message', 'type_message'));
    }

    /**
     * Méthode permettant d'afficher le formulaire d'ajout d'une nouvelle Couleur
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
     * Méthode permettant d'enregistrer la saisie d'une nouvelle Couleur
     *
     * @param  void
     * @return void
     */
    public function ajout_sauve()
    {

        // On recupère les données envoyées par le formulaire
        $nom = $_REQUEST['Nom'];

        // On instancie le modèle "Couleur"
        $this->loadModel('Couleur');

        // On effectue la mise à jour
        $this->Couleur->insert($nom);

        // On redirige vers la liste
        // On stocke les couleurs dans $couleurs
        $couleur = $this->Couleur->getAll();

        $message = "Couleur bien Ajoutée";
        $type_message = "success";
        // On envoie les données à la vue index
        $this->render('index', compact('couleur', 'message', 'type_message'));
    }
}
