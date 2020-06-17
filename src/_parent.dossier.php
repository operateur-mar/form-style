<div class="div1"> 
    <div class="form-group">    
        <label for="">الإسم الشخصي</label>
        <input type="text" class="form-control" name="prenom_parent" required>
    </div>    
</div>
<div class="div2">
    <div class="form-group">    
        <label for="">الإسم العائلي</label>
        <input type="text" class="form-control" name="nom_parent" required>
    </div>     
</div>
<div class="div3"> 
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">ذكر</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">أنثى</label>
    </div> 
</div>
<div class="div4">
    <div class="form-group">    
        <label for="">الصفة</label>
        <input type="text" class="form-control" name="parent_desc" required>
    </div>        
</div>
<div class="div5"> 
    <div class="form-group">    
        <label for="">المهنة</label>
        <input type="text" class="form-control" name="parent_profession" required>
    </div>  
</div>
<div class="div6"> 
    <div class="form-group">    
        <label for="">نوعية بطاقة التعريف</label>
        <input type="text" class="form-control" name="parent_type_cin" required>
    </div>  
</div>
<div class="div7"> 
    <div class="form-group">    
        <label for="">رقم البطاقة</label>
        <input type="text" class="form-control" name="parent_no_cin" required>
    </div> 
</div>
<div class="div8"> 
    <div class="form-group">    
        <label for="">تحميل البطاقة</label>
        <input type="file" class="form-control-file" name="parent_cin" required>
    </div> 
</div>
<div class="div9">
    <div class="form-group">    
        <label for="">الهاتف</label>
        <input type="text" class="form-control" name="parent_tel" required>
    </div> 
</div>
<div class="div10">
    <div class="form-group">    
        <label for="">البريد الإلكتروني</label>
        <input type="text" class="form-control" name="parent_mail" required>
    </div>     
</div>
<div class="div11">
    <div class="form-group">    
        <label for="">العنوان</label>
        <input type="text" class="form-control" name="adress" required>
    </div>     
</div>
<div class="div12"> 
    <div class="form-group">    
        <label for="">البلد</label>
        <select class="form-control dropdown">
        <?php foreach ($payData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_pay"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>
<div class="div13">
    <div class="form-group">    
        <label for="">الإقليم</label>
        <select class="form-control dropdown">
        <?php foreach ($provinceData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_province"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>    
</div>
<div class="div14"> 
<div class="form-group">    
        <label for="">الجماعة</label>
        <select class="form-control dropdown">
        <?php foreach ($communeData as $var) { ?>
            <option value="<?php echo $var['id'] ?>" name="id_commune"><?php echo $var['libelle_ar'] ?></option>
        <?php  } ?>
        </select>
    </div>
</div>