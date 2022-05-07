<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>CALCULADORA</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="GET" class="form-inline">
                        <div class="form-group">
                        <label for="">Numero 1</label>
                        <input class="input-control " type="number" name="numero1">
                        </div>
                        <div class="form-group">
                            <label for="">Numero 2</label>
                            <input class="input-control " type="number" name="numero2">
                        </div>
                        <div class="form-group">
                            <select name="operador" id="operador">
                                <option value="multiplicar">*</option>
                                <option value="dividir">/</option>
                                <option value="sumar">+</option>
                                <option value="restar">-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info"type="submit">Calcular</button>
                        </div>
                        
                        


                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php
            $numero1 = @$_GET['numero1'] ? @$_GET['numero1'] : 0;
            $numero2 = @$_GET['numero2'] ? @$_GET['numero2'] : 0;
            $operador = @$_GET['operador'] ? @$_GET['operador'] : 0; 
            $resultado = 0;
            
            

            if ($operador=="multiplicar"){
                $resultado = $numero1 * $numero2;
            }else if ($operador=="dividir"){
                $resultado = $numero1 / $numero2;
            }else if($operador=="sumar"){
                $resultado = $numero1 + $numero2;
            }else if($operador=="restar"){
                $resultado = $numero1 - $numero2;
            }
            print("El resultado es igual a:".$resultado);
            ?>
        </div>
    </div>
</body>
</html>