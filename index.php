<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Кофемашина</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6 coffee-list"><!--Левая сторона(выбор кофе)-->
          <div class="row flex-column justify-content-around">
            <div class="coffee-item" onclick="cookCoffee(50, 'Американо', this)">
              <img src="img/americano.png" alt="Американо">
              <span>Американо - 50 руб.</span>
            </div>  
            <div class="coffee-item" onclick="cookCoffee(92, 'Капучино', this)">
              <img src="img/cappuccino.png" alt="Капучино">
              <span>Капучино - 92 руб.</span>
            </div>  
            <div class="coffee-item" onclick="cookCoffee(40, 'Эспрессо', this)">
              <img src="img/espresso.png" alt="Эспрессо">
              <span>Эспрессо - 40 руб.</span>
            </div>  
            <div class="coffee-item" onclick="cookCoffee(128, 'Латте', this)">
              <img src="img/latte.jpg" alt="Латте">
              <span>Латте - 128 руб.</span>
            </div>  
          </div>
        </div>
        <div class="col-6 coffee-oper"><!--Правая сторона(операционная)-->
          <div class="row">
            <div class="col-6"><!--дисплей и кружка-->
              <div class="display">
                <span class="display-text">Выберите кофе</span>
                <div class="progress mt-2">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
              </div>
              <div class="cup">
                <img src="img/americano.png" alt="">
              </div>
            </div>
            <div class="col-6"><!--баланс,АТМ и сдача-->
              <div class="input-group mb-3">
                <input type="text" class="form-control balance" placeholder="Баланс" readonly>
                <div class="input-group-append">
                  <span class="input-group-text">&#8381;</span>
                </div>
              </div>
              <div class="atm">
                <div class="cash-catcher"></div>
                <img src="img/bill_acc.png" alt="">
              </div>
              <button class="btn btn-primary btn-block mt-3 change-btn">Сдача</button>
              <div class="change-box mt-3"></div>
            </div>
          </div>
        </div>
      </div>    
    </div>
    <div class="money">
      <img src="img/100rub.jpg" cost="100" alt="">
      <img src="img/500rub.jpg" cost="500" alt="">
      <img src="img/50rub.jpg" cost="50" alt="">
    </div>
    <!-- Optional JavaScript -->
    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>