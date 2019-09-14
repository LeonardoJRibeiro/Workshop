
<div class="row">
    <div class="col">
        <form method="post" action="../App/ExcluirPatrocinador.php" id="formExcluir">
            <div class="form-group">
                <input type="hidden" id="idPatrocinador" name="id" value="">
                <button class="form-control btn-danger" type="button" id="apagar">Apagar patrocinador</button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#apagar").click(function (){
            $("#idPatrocinador").val($(".title").text());
            if(confirm("Tem certeza que deseja excluir esse patrocinador?")){
                $("#formExcluir").submit();
            }
        });
    }); 
    admin = true;
</script>