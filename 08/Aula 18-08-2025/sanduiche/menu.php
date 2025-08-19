<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php if( $pagina_atual == 'home' ): ?>
          <a class="nav-link active" aria-current="page" href="inicio.php">Início</a>
          <?php else: ?>
            <a class="nav-link" href="inicio.php">Início</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if( $pagina_atual == 'pao' ): ?>
          <a class="nav-link active" aria-current="page" href="pao.php">Pão</a>
          <?php else: ?>
            <a class="nav-link" href="pao.php">Pão</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if( $pagina_atual == 'carne' ): ?>
          <a class="nav-link active" aria-current="page" href="carne.php">Carne</a>
          <?php else: ?>
            <a class="nav-link" href="carne.php">Carne</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if( $pagina_atual == 'queijo' ): ?>
          <a class="nav-link active" aria-current="page" href="queijo.php">Queijo</a>
          <?php else: ?>
            <a class="nav-link" href="queijo.php">Queijo</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if( $pagina_atual == 'cor' ): ?>
          <a class="nav-link active" aria-current="page" href="envia_cor.php">Cor</a>
          <?php else: ?>
            <a class="nav-link" href="envia_cor.php">Cor</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if( $pagina_atual == 'exibir' ): ?>
          <a class="nav-link active" aria-current="page" href="mostra_texto.php">Exibir</a>
          <?php else: ?>
            <a class="nav-link" href="mostra_texto.php">Exibir</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if( $pagina_atual == 'sair' ): ?>
          <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
          <?php else: ?>
            <a class="nav-link" href="sair.php">Sair</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>