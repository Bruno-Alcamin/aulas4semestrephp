Editar
<form method="POST" action="/teste/update">
<input type="number" name="id" value="<?= $_GET["id"]?>" readonly>
<input type="text" name="nome"/>
<input type="submit" value="Enviar"/>
</form>
<?= $data ?>