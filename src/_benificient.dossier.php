<?php 

?>


<div class="div1"> 
    <div class="form-group">    
        <label for="">نوع بطاقة التعريف</label>
        <input type="text" class="form-control" id="id_type_identite" name="id_type_identite" required>
    </div>
</div>
<div class="div2"> 
    <div class="form-group">    
        <label for="">رقم البطاقة</label>
        <input type="text" class="form-control" name="no_carte_identite" required>
    </div>
</div>
<div class="div3"> 
    <div class="form-group">    
        <label for="">تحميل البطاقة</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
    </div>
</div>
<div class="div4"> 
    <div class="form-group">    
        <label for="">الإسم الشخصي</label>
        <input type="text" class="form-control" name="prenom_ar" required >
    </div>
</div>
<div class="div5"> 
    <div class="form-group">    
        <label for="">الإسم العائلي</label>
        <input type="text" class="form-control" name="nom_ar" required>
    </div>
</div>
<div class="div6"> 
    <div class="form-group fr">    
        <label for="">Prénom</label>
        <input type="text" class="form-control" name="prenom_fr" required value="<?php echo $Personne-> prenom_fr ?>">
    </div>
</div>
<div class="div7"> 
    <div class="form-group fr">    
        <label for="">Nom</label>
        <input type="text" class="form-control" name="nom_fr" required value="<?php echo $Personne-> nom_fr ?>">
    </div>
</div>
<div class="div8"> 
    <div class="form-group">    
        <label for="">تاريخ الإزدياد</label>
        <input type="date" class="form-control" id="ddn" name="ddn" required>
    </div>
</div>
<div class="div9"> 
    <div class="form-group ">    
        <label for="">الجنسية</label>
        <select class="form-control dropdown">
        <?php foreach ($payData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_nationalite"><?php echo $var['nationalite_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>
<div class="div10"> 
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" value="أنثى" id="customRadioInline1" name="sexe" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline1">أنثى</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" value="ذكر" id="customRadioInline2" name="sexe" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline2">ذكر</label>
    </div>
</div>
<div class="div11"> 
    <div class="form-group">    
            <label for="">الهاتف</label>
            <input type="text" class="form-control" name="tel" required >
    </div>
</div>
<div class="div12">
    <div class="form-group">    
            <label for="">البريد الإلكتروني</label>
            <input type="text" class="form-control" name="mail" required value="<?php echo $Personne-> mail; ?>" >
    </div>
</div>
<div class="div13">
<div class="form-group">    
            <label for="">المستوى الدراسي</label>
            <select class="form-control dropdown">
            <?php foreach ($NSData as $var) { ?>
                <option value="<?php echo $var['id'] ?>" name="id_niveau_scolaire"><?php echo  $var['libelle_ar'] ?></option>
            <?php  } ?>
        </select>
    </div>
</div>
<div class="div14">
<div class="form-group">    
            <label for="">المهنة</label>
            <input type="text" class="form-control" name="profession" required >
    </div>
</div>
<div class="div15">
    <div class="form-group">    
            <label for="">اللغة الأجنبية الأولى</label>
            <select class="form-control dropdown">
                <?php foreach ($langage as $var) { ?>
                    <option value="<?php echo $var['id'] ?>" name="id_pr_lang"><?php echo $var['libelle_ar'] ?></option>
                <?php  } ?>
             </select>
    </div> 
</div>
<div class="div16"> 
    <div class="form-group">    
            <label for="">اللغة الأجنبية الثانية</label>
            <select class="form-control dropdown">
                <?php foreach ($langage as $var) { ?>
                    <option value="<?php echo $var['id'] ?>" name="id_dx_lang"><?php echo $var['libelle_ar'] ?></option>
                <?php  } ?>
             </select>
    </div>
</div>
<div class="div17">
    <div class="form-group">    
            <label for="">رقم جواز السفر</label>
            <input type="text" class="form-control" name="no_passeport" required >
    </div>    
</div>
<div class="div18">
    <div class="form-group">    
            <label for="">تاريخ الصلاحية</label>
            <input type="date" class="form-control" name="date_validate" required >
    </div> 
</div>
<div class="div19">
    <div class="form-group">    
        <label for="">تحميل جواز السفر</label>
        <input type="file" class="form-control-file" name="visa" required>
    </div>
</div>
<div class="div20"> 
    <div class="form-group">    
            <label for="">نوع التأشيرة</label>
            <input type="text" class="form-control" name="ref_visa" required >
    </div>  
</div>
<div class="div21"> 
    <div class="form-group">    
            <label for="">تاريخ الصلاحية</label>
            <input type="date" class="form-control" name="visa_validite" required >
    </div> 
</div>
<div class="div22"> 
   
</div>
<div class="div23">
    <div class="form-group">    
        <label for="">آخر رحلة  شاركت فيها منظمة من طرف الوزارة</label>
        <input type="text" class="form-control" name="dern_voyage" required>
    </div>
 </div>
<div class="div24">
    <div class="form-group">    
        <label for="">سنة المشاركة</label>
        <input type="text" class="form-control" name="dern_voyage_date" required>
    </div>
</div>
<div class="div25"> 
<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline3" name="adult" class="custom-control-input" value="راشد">
    <label class="custom-control-label" for="customRadioInline3">راشد</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline4" name="adult" class="custom-control-input" value="قاصر" >
    <label class="custom-control-label" for="customRadioInline4">قاصر</label>
    </div>
</div>
<div class="div26"> 
    <div class="form-group">    
        <label for="">العنوان</label>
        <input type="text" id="adresse" class="form-control" name="adresse"  disabled>
    </div>
</div>
<div class="div27"> 
    <div class="form-group">    
        <label for="">البلد</label>
        <select class="form-control dropdown">
        <?php foreach ($payData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_pays"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>
<div class="div28">
    <div class="form-group">    
        <label for="">الإقليم</label>
        <select class="form-control dropdown">
        <?php foreach ($provinceData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_province"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>    
</div>
<div class="div29"> 
<div class="form-group">    
        <label for="">الجماعة</label>
        <select class="form-control dropdown">
        <?php foreach ($communeData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_commune" id="id_commune"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>