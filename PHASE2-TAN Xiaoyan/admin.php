<?php
require __DIR__.'/lib/db.inc.php';
$res = ierg4210_cat_fetchall();
$options = '';

foreach ($res as $value){
    $options .= '<option value="'.$value["catid"].'"> '.$value["name"].' </option>';
}

$r = ierg4210_prod_fetchAll();
$pro = '';
foreach ($r as $value){
    $pro .= '<option value="'.$value["pid"].'"> '.$value["name"].' </option>';
}

?>

<html>
    <fieldset>
        <legend> New Category</legend>
        <form id="cat_insert" method="POST" action="admin-process.php?action=cat_insert"
        enctype="multipart/form-data">
            <label for="cat_name"> Name *</label>
            <div> <input id="cat_name" type="text" name="name" required="required" pattern="^[\w\-\ ]+$"/></div>
            <input type="submit" value="Submit"/>
    </form>
    </fieldset>
    <fieldset>
        <legend> New Product</legend>
        <form id="prod_insert" method="POST" action="admin-process.php?action=prod_insert"
        enctype="multipart/form-data">
            <label for="prod_catid"> Category *</label>
            <div> <select id="prod_catid" name="catid"><?php echo $options; ?></select></div>
            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="name" required="required" pattern="^[\w\-\ ]+$"/></div>
            <label for="prod_price"> Price *</label>
            <div> <input id="prod_price" type="text" name="price" required="required" pattern="^\d+\.?\d*$"/></div>
            <label for="prod_desc"> Description *</label>
            <div> <input id="prod_desc" type="text" name="description"/> </div>
            <label for="prod_image"> Image * </label>
            <div> <input type="file" name="file" required="true" accept="image/jpeg"/> </div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Edit Category</legend>
        <form id="cat_edit" method="POST" action="admin-process.php?action=cat_edit"
        enctype="multipart/form-data">
            <label for="prod_catid"> Category *</label>
            <div> <select id="prod_catid" name="catid"><?php echo $options; ?></select></div>
            <label for="cat_name"> Name *</label>
            <div> <input id="cat_name" type="text" name="name" required="required" pattern="^[\w\-]+$"/></div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Edit Product</legend>
        <form id="prod_edit" method="POST" action="admin-process.php?action=prod_edit"
        enctype="multipart/form-data">
            <label for="prod_pid"> Product *</label>
            <div> <select id="prod_pid" name="pid"><?php echo $pro; ?></select></div>
            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="name" required="required" pattern="^[\w\-\ ]+$"/></div>
            <label for="prod_price"> Price *</label>
            <div> <input id="prod_price" type="text" name="price" required="required" pattern="^\d+\.?\d*$"/></div>
            <label for="prod_desc"> Description *</label>
            <div> <input id="prod_desc" type="text" name="description"/> </div>
            <label for="prod_image"> Image * </label>
            <div> <input type="file" name="file" required="true" accept="image/jpeg"/> </div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Delete Category</legend>
        <form id="cat_delete" method="POST" action="admin-process.php?action=cat_delete"
        enctype="multipart/form-data">
            <label for="prod_catid"> Category *</label>
            <div> <select id="prod_catid" name="catid"><?php echo $options; ?></select></div>
            <input type="submit" value="Delete"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Delete Product</legend>
        <form id="prod_delete" method="POST" action="admin-process.php?action=prod_delete"
        enctype="multipart/form-data">
            <label for="prod_name"> Name *</label>
            <div> <select id="prod_pid" name="pid"><?php echo $pro; ?></select></div>
            <input type="submit" value="Delete"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Search All Categories</legend>
        <form id="cat_fetchall" method="POST" action="admin-process.php?action=cat_fetchall"
        enctype="multipart/form-data">
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Search All Products</legend>
        <form id="prod_fetchAll" method="POST" action="admin-process.php?action=prod_fetchAll"
        enctype="multipart/form-data">
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
    <fieldset>
        <legend> Search One Product</legend>
        <form id="prod_fetchOne" method="POST" action="admin-process.php?action=prod_fetchOne"
        enctype="multipart/form-data">
            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="name" required="required" pattern="^[\w\-\ ]+$"/></div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
