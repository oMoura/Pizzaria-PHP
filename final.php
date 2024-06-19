<?php
include "cabecalho.php";
include "navbar.php";
include "conexao.php";
?>

    <div class="container">
        <h1 class="mt-5 mb-4">Pagamento</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detalhes do Pedido</h5>

                        <?php
                        session_start();
                        $valorTotal = 0;
                        if (isset($_SESSION['carrinho'])) {
                            $pizzas = $_SESSION['carrinho'];
                            $dao = new Dao();

                            foreach ($pizzas as $id_pizza => $pizza) {
                                foreach ($dao->mostrarPizzaColun($id_pizza) as $linha) {
                                    $valorTotal += $linha['valor'];
                        ?>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $linha['sabor'] ?>
                                <span class="badge bg-primary rounded-pill">R$ <?php echo $linha['valor'] ?></span>
                            </li>
                        </ul>

                        <?php
                                }
                            }
                        }
                        ?>
                        <h5>Total: R$ <?php echo $valorTotal ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detalhes do Pagamento</h5>
                        <form action="limparCarrinho.php" method="post">
                            <div class="mb-3">
                                <label for="cardNumber" class="form-label">Número do Cartão</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                            </div>
                            <div class="mb-3">
                                <label for="expiryDate" class="form-label">Data de Validade</label>
                                <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                            </div>
                            <div class="mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cvv" placeholder="XXX" required>
                            </div>

                            <h5 class="card-title">Endereço</h5>
                            <div class="mb-3">  
                                <label for="rua" class="form-label">Rua</label>
                                <input name="rua" type="text" class="form-control" id="rua" placeholder="Sua rua e número" required>
                            </div>
                            <div class="mb-3">  
                                <label for="rua" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="bairro" placeholder="Seu bairro" required>
                            </div>
                            <div class="mb-3">  
                                <label for="rua" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento" placeholder="Complemento" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "rodape.php";