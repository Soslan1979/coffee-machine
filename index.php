<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Кофе-машина</title>
  </head>
  <body>
    <div class="container">
      <div class="row"> 
        <div class="col-6 coffee-list"><!--Левая сторона (Выбор кофе)-->
          <div class="row flex-column justify-content around"><!--картинки по вертикали-->
           <div class="coffee-item">
            <img src="img/americano.png" alt="Американо">
            <span>Американо - 50 руб.</span>
           </div>
           <div class="coffee-item">
            <img src="img/cappuccino.png" alt="Капучино">
            <span>Капучино - 92 руб.</span>
           </div>
           <div class="coffee-item">
            <img src="img/espresso.png" alt="Эспрессо">
            <span>Эспрессо - 66 руб.</span>
           </div>
           <div class="coffee-item">
            <img src="img/latte.jpg" alt="Латте">
            <span>Латте - 128 руб.</span>
           </div>
          </div>
        </div>
        <div class="col-6 coffee-oper"><!--Правая сторона (Операционная)-->
         <div class="row">
           <div class="col-6"><!--Дисплей и кружка-->
             <div class="display">
              <span class="display-text">ВЫБЕРИТЕ КОФЕ</span>
               <div class="progress mt-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
               </div>
             </div>
              <div class="cup">
               <img src="img/americano.png" alt="Кружка"> 
             </div>
           </div>
           <div class="col-6"><!--Баланс, АТМ(приемник купюр), Сдача-->
             <div class="input-group mb-3"><!--нач. Вставили готовый input из Bootstrap -->
              <input type="text" class="form-control balance" placeholder="БАЛАНС">
              <div class="input-group-append"><!--кон.-->
                <span class="input-group-text">&#8381;</span><!--&#8381; спец. символ Рубля-->
              </div>
            </div>
              <div class="atm"><!--Добавили купюроприемник-->
                  <img src="img/bill_acc.png" alt="Банкомат">
              </div>
              <botton class="btn btn-primary btn-block mt-3 change-btn">СДАЧА</botton>
              <div class="change-box mt-3"></div>
           </div>
         </div>
        </div>
      </div>
    
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>




















