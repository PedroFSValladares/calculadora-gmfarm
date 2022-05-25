<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Calculadora</title>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6 col-lx-5 my-auto mx-auto">
                <form class="form needs-validation" method="post" novalidate>
                    <div class="card p-4">  
                        <div class="card mb-2 bg-success">
                            <h2 class="d-flex justify-content-center my-4"><b>CALCULADORA - GM FARM</b></h2>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row mx-1 mb-4">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-3 p-0 text-center">
                                                    <label for="valor1" class="form-label">Valor 1</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control input active" id="valor1" name="value1" required>
                                                    <div class="invalid-feedback">Preencha este campo</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control input active" id="valor3" name="value3" required>
                                                    <div class="invalid-feedback">Preencha este campo</div>
                                                </div>
                                                <div class="col-3 p-0 text-center">
                                                    <label for="valor3" class="form-label">Valor 3</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-1 mb-4">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-3 p-0 text-center">
                                                    <label for="valor2" class="form-label">Valor 2</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control input active" id="valor2" name="value2" required>
                                                    <div class="invalid-feedback">Preencha este campo</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control input" id="variavel" placeholder="x" readonly>
                                                </div>
                                                <div class="col-3 p-0 text-center">
                                                    <label for="variavel" class="form-label">Variavel</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center pe-5">
                                        <div class="col-6 mb-3">
                                            <div class="row">
                                                <div class="col-3 p-0 text-center">
                                                    <label for="valor-" class="form-label">Resultado</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control input-result" id="" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                            <img 
                                class="position-absolute top-0 end-0"
                                src="assets/images/logo UNICEPLAC.png" 
                                alt="" 
                                height="100%"
                            />                               
                        </div>
                        <div class="d-flex justify-content-end"> 
                            <input type="submit" class="btn btn-primary me-2" value="Calcular">
                            <button class="btn btn-danger me-2">Limpar</button> 
                        </div>
                    </div>  
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>