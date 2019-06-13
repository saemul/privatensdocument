<div class="container" >
    <div class='row' style="padding-top:100px">
        <?php while($row = $query->fetch_object()) { ?>
            <a target='__blank' href="https://<?=$_SERVER['SERVER_NAME'];?>/modules/addons/privatensdocument/files/<?=$row->file;?>">
                <div class='col-md-2'>
                    <img src="https://<?=$_SERVER['SERVER_NAME'];?>/modules/addons/privatensdocument/files/<?=$row->file;?>" width="100%" height="150px">
                </div>
            </a>
        <?php } ;?>
    </div>
</div>