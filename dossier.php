<?php include 'src/header.php' ?>
   <?php 
    if(isset($_GET['id'])){
        $Personne = new Personne(); 
        $Pay = new Pays();
        $niveauScolaire = new NScolaire();
        $langue = new Langues(); 
        $province = new Province();
        $commune = new Commune();

        $Personne->getData($_GET['id']);
        $payData = $Pay -> loadPay();
        $NSData = $niveauScolaire -> loadNS();
        $langage = $langue->loadLangues();
        $communeData = $commune->loadCommune();
        $provinceData = $province->loadProvince();
    }
    else{
        // redirect
    }
   ?>

    <section class="inscription-form conainer">
        <h3>ملف طلب الترشيح لأسفار الشباب إلى الخارج</h3>
        <form action="" method="POST">
            <div class="top-section container">
                <?php include 'src/_topsection.dossier.php' ?>
            </div>
            <div class="first-page container">
                <p class="fs-section">تعريف المستفيد</p>
                <div class="benificient container">
                    <?php include 'src/_benificient.dossier.php' ?>
                </div>
            </div>
            <div class="second-page container">
               <div class="parent-section">
                <p class="nd-section">تعريف ولي الأمر</p>
                    <div class="parent container">
                        <?php include 'src/_parent.dossier.php' ?>
                    </div>
               </div>
                <p class="nd-section">عند الضرورة الإتصال بـ</p>
                <div class="contact container">
                    <?php include 'src/_contact.dossier.php' ?>
                </div>
            </div>
            <div class="buttons-section next">
              <button type="" id="next" class="btn btn-primary">التالي</button>
            </div>
            <div class="buttons-section send">
              <button type="submit" id="" class="btn btn-success" name="submit">إرسال الترشيح</button>
              <button type="" id="previous" class="btn btn-primary">السابق</button>
            </div>
        </form>
        
    </section>


    <?php 
    if(isset($_POST['submit'])){ 
        /*==== Manage form =====*/ 
        // Manage Personne : 
        $Personne->id_type_identite = $_POST["id_type_identite"]; 
        $Personne->no_carte_identite = $_POST["no_carte_identite"]; 
        $Personne->nom_ar = $_POST["nom_ar"];
        $Personne->nom_fr = $_POST["nom_fr"]; 
        $Personne->prenom_ar = $_POST["prenom_ar"]; 
        $Personne->prenom_fr = $_POST["prenom_fr"];
        $Personne->ddn = $_POST["ddn"];
        $Personne->id_nationalite = $_POST["id_nationalite"];
        $Personne->sexe = $_POST["sexe"];
        $Personne->tel = $_POST["tel"];
        $Personne->mail = $_POST["mail"]; 
        $Personne->id_niveau_scolaire = $_POST["id_niveau_scolaire"];
        $Personne->profession = $_POST["profession"]; 
        $Personne->no_passeport = $_POST["no_passeport"]; 
        $Personne->date_validite = $_POST["date_validate"]; 
        $Personne->ref_visa = $_POST["ref_visa"]; 
        $Personne->visa_validite = $_POST["visa_validite"];
        $Personne->adress = $_POST["adresse"];
        $Personne->id_pays = $_POST["id_pays"];
        $Personne->id_province = $_POST["id_province"];
        $Personne->id_commune = $_POST["id_commune"];
       /* if($_POST["adult"]=="قاصر"){
           // Manage Parent : 

        }
        /*
        - telechargement cin
        - langue etrngr 1 et 2 
        - telecharg passport
        - dernier voyage 
        - date dernier voyage 
        - cas de besoin parent
        - 
        */ 

    }
    
     ?>

<?php include 'src/footer.php' ?>
