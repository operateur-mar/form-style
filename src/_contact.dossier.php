<div class="div1">
    <div class="form-group">    
        <label for=""> الإسم الشخصي</label>
        <input type="text" class="form-control" name="contact_prenom" required>
    </div>  
</div>
<div class="div2"> 
    <div class="form-group">    
        <label for=""> الإسم العائلي</label>
        <input type="text" class="form-control" name="contact_nom" required>
    </div>      
</div>
<div class="div3"> 
    <div class="form-group">    
        <label for="">نوعية بطاقة التعريف</label>
        <input type="text" class="form-control" name="contact_type_cin" required>
    </div>      
</div>
<div class="div4">
    <div class="form-group">    
        <label for="">رقم البطاقة</label>
        <input type="text" class="form-control" name="contact_no_cin" required>
    </div> 
</div>
<div class="div5">
    <div class="form-group">    
        <label for="">القرابة العائلية</label>
        <input type="text" class="form-control" name="contact_desc" required>
    </div> 
</div>
<div class="div6">
    <div class="form-group">    
        <label for="">الهاتف</label>
        <input type="text" class="form-control" name="contact_tel" required>
    </div> 
</div>
<div class="div7">
    <div class="form-group">    
        <label for="">البريد الإلكتروني</label>
        <input type="text" class="form-control" name="contact_mail" required>
    </div> 
</div>
<div class="div8">
    <div class="form-group">    
        <label for="">العنوان</label>
        <input type="text" class="form-control" name="contact_adress" required>
    </div> 
</div>
<div class="div9"> 
    <div class="form-group">    
        <label for="">البلد</label>
        <select class="form-control dropdown">
        <?php foreach ($payData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_pay"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>
<div class="div10">
    <div class="form-group">    
        <label for="">الإقليم</label>
        <select class="form-control dropdown">
        <?php foreach ($provinceData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_province"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>    
</div>
<div class="div11"> 
<div class="form-group">    
        <label for="">الجماعة</label>
        <select class="form-control dropdown">
        <?php foreach ($communeData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_commune"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>