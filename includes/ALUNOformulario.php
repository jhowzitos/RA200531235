<main>

<section>
    <a href="index.php">
        <button class="btn btn-success">VOLTAR</button>
    </a> 
</section>

<h2 class="jumbotron bg-primary text-center mt-3">CADASTRAR ALUNO</h2>

<form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nome Completo">
           
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email@Exemplo.com">
        </div>

        <div class="form-group">
        <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="tel" class="form-control" name="phone" placeholder="XX XXXXX-XXXX">
        </div>

        <div class="form-group">
            <label>Course</label>
            <input type="text" class="form-control" name="course" placeholder="Digite Curso Escolhido">
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
</form>
    
</main>
