<?php
include "cabecalho.php";
include "navbar.php";
?>

    <div class="container">
        <h1 class="mt-5 mb-4">Pagamento</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detalhes do Pedido</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pizza de Pepperoni
                                <span class="badge bg-primary rounded-pill">$12.99</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pizza de Queijo
                                <span class="badge bg-primary rounded-pill">$10.99</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total
                                <span class="badge bg-success rounded-pill">$23.98</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detalhes do Pagamento</h5>
                        <form>
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
                            <button type="submit" class="btn btn-primary">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "rodape.php";