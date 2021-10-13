<main>

<section>
    <a href="index.php">
        <button class="btn btn-success">VOLTAR</button>
    </a> 
</section>

<h2 class="jumbotron bg-primary text-center mt-3">CADASTRAR CURSO</h2>

<form method="post">
        <div class="col-md-12">
            <label>Name Curso</label>
            <input type="text" class="form-control" name="nameCOURSE" placeholder="Curso Desejado">
           
        </div>  
        
        <div class="col-md-12 form-inline">
            <label for="exampleFormControlInput1">Descrição</label>
            <textarea class="form-control" name="DESCRPTION" rows="5" placeholder="Descreva"></textarea>
        </div>
  
       
        <div class="col-md-2 form-inline">
        <label class="form-group">Data de Inicio<h11>*</h11></label>  
        <input name="dateSTART" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
        </div>

        <div class="col-md-2 form-inline">
        <label class="form-group">Data Final<h11>*</h11></label>  
        <input name="dateFINISH" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
        </div>

        <div class="form-group">
            <label>Status</label>
            
            <div>
                <div class="form-check form-check-inline btn btn-light">
                    <label calss="form-control">
                        <input type="radio"  name="ativo" value="s" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline btn btn-light">
                    <label calss="form-control">
                        <input type="radio" name="ativo" value="n" > Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success mt-3" >SALVAR</button>
        </div>
        <p>






        
        </p>
</form>
    

</main>
