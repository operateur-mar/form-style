<?php include 'src/header.php' ?>
   <section class="inscription">
       <h3>طلب الترشيح لأسفار الشباب إلى الخارج</h3>
       <h4>PARTICIPATION AUX VOYAGES A L'ETRANGER</h4>
       <h6>للترشح لأحدى الوجهات الرجاء التسجيل أولا ثم ستتوصلون برابط عبر بريدكم الإلكتروني للترشح</h6>

       <form method="POST" action="src/mailing.php">
        <div class="form-group">
            <label for="exampleInputNom">الإسم العائلي</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
            <label for="exampleInputNom">Nom</label>
        </div>

        <div class="form-group">
            <label for="exampleInputPrenom">الإسم الشخصي</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
            <label for="exampleInputNom">Prenom</label>
        </div>

        <div class="form-group">
            <label for="exampleInputMail">البريد الإلكتروني</label>
            <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" required>
            <label for="exampleInputNom">Mail</label>
        </div>
        <small id="emailHelp" class="form-text text-muted">الرجاء التأكد من بريدكم الإلكتروني سيبقى الوسيلة الوحيدة للتواصل معكم</small>

       <div class="send">
         <button type="submit" class="btn btn-primary" name="submit">أرسل </button>
       </div>
        </form>

<?php
    if(isset($_GET['sent']) && $_GET['sent']==true){
        ?>
         <div class="alert alert-success confirmed" role="alert">
   تم إرسال رابط الإشتراك في البريد الإلكتروني، المرجو التحقق
    </div>
    <?php } ?>

</section>
<?php include 'src/footer.php' ?>
