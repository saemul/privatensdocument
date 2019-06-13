<?php 

include 'moid.php';

function privatensdocument_output($vars) {

    $m= new Moid;
    $m->display_admin($vars);

}
function privatensdocument_clientarea($vars) {
 
    $m= new Moid;
    return $m->display_client($vars);
 
}
//  This Function Outside Class
function privatensdocument_activate() {
    $idcard = new Moid;
    # Create Custom DB Table
    $create_box    = "CREATE table mod_box (id varchar(100), idwhmcs varchar(100), comid varchar(100),type varchar(20),file text, meta text)";
    $create_idcard = "CREATE table privatensdocument (domain varchar(200),syarat text,file_meta text)";
    $query = $idcard->query($create_box);
    $query = $idcard->query($create_idcard);
    # Return Result
    return array('status'=>'success','description'=>'Success Building module.. ');
}
function privatensdocument_deactive() {
    $idcard = new Moid;
    # Create Custom DB Table
    $create_box    = "DROP TABLE mod_box";
    $create_idcard = "DROP TABLE privatensdocument";
    $query = $idcard->query($create_box);
    $query = $idcard->query($create_idcard);
    # Return Result
    return array('status'=>'success','description'=>'All Your "privatensdocument" data has been remove ');
}
function privatensdocument_config() {
    $configarray = array(
    "name" => "PrivateNS Document",
    "description" => "This is new version of IDcard module",
    "version" => "3.0",
    "author" => "Privatens",
    "fields" => array( 
            "email_privatens" => array (
                "FriendlyName" => "Email",
                "Type"         => "text", # Text Box
                "Size"         => "255", # Defines the Field Width
                "Description"  => "Email Login privatens",
                "Default"      => "",
                "Placeholder"  => "namaemail@domain.com"
            ),
            "apiurl" => array (
                "FriendlyName" => "API Url",
                "Type"         => "text", # Text Box
                "Size"         => "255", # Defines the Field Width
                "Description"  => "API url",
                "Default"      => "",
                "Placeholder"  => "API url"
            ),
            "clientid" => array (
                "FriendlyName" => "Client Id",
                "Type"         => "text", # Text Box
                "Size"         => "255", # Defines the Field Width
                "Description"  => "Client Id API privatens",
                "Default"      => "",
                "Placeholder"  => "Client Id"
            ),
            "secretid" => array (
                "FriendlyName" => "Secret Id",
                "Type"         => "text", # Text Box
                "Size"         => "255", # Defines the Field Width
                "Description"  => "Secret Id API privatens",
                "Default"      => "",
                "Placeholder"  => "Secret Id"
            )
        ),
    );
    return $configarray;
}