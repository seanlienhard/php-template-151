<h1>YT</h1>
<div id="kategorieDiv">
<?php
foreach ($categories as $category){
?>

    <a href="/Index/Index?categoryId=<?= $category["categoryId"]?>" class="kategoriePunkte">
      <?= $category["name"]?>
    </a>

<?php
}
?>
<form method="post" action="/Index/AddCategory">
	<center><input class="inputTextbox" style="width: 200px;" placeholder="new Category" type="text" name="name" /></center>
	<center><input type="submit" value="Kategory Hinzufügen" class="formSubmit" /></center>
</form>

</div>
<div id="mainDiv">
	<div id="toolsDiv">
    <span id="addVideoPlusButton">
        <i class="fa fa-plus fa-2x" aria-hidden="true" style="margin-top: 20px; margin-left: 10px;" title="Add Video"></i>
    </span>
</div>

<div id="displayPlayersDiv">
<?php
	foreach ($videos as $video){
		?>
			<div class="playerDiv">
	            <iframe src="<?= $video["link"]?>" width="400" height="250" frameborder="0" allowfullscreen></iframe>
	        </div>
		<?php
	}
	if($categoryId !== 0){
?>
<form method="post" action="/Index/AddVideo">
	<input id="videoLinkTextBox" name="link" type="text" class="inputTextbox" placeholder="www.youtube.com/example" />
            <input type="hidden" name="categoryId" value="<?= $categoryId?>">
        <input type="submit" class="formSubmit" id="addVideo" value="Add Video"/>
</form>
<?php
	}
?>

</div>
</div>
<script>


</script>
