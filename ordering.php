<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/logo.png" type="image/png">
      <title>Watch Gadget - Интернет-магазин наручных часов</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2 class="post_ttl">ОФОРМЛЕНИЕ ЗАКАЗА</h2>
                  <div id="str_basket">
                     <?php
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                            echo header('Location:index.php');
                        } 
                        else {
                            $sum = 0;
                            echo '<table><tr><th>Артикул</th><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма к оплате</th></tr>';
                            for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
                                $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
                                echo '
                                                <tr><td>', $_SESSION['item' . $i], '</td><td>', $_SESSION['item_name' . $i], '</td><td>', $_SESSION['price' . $i], '</td><td>', $_SESSION['quantity' . $i], ' шт. </td>
                                                <td> ', $_SESSION['price' . $i] * $_SESSION['quantity' . $i], ' руб.</td>
                                                <br>
                                                ';
                            }
                           echo ' 
                              <tr>
                                 <td style="background:#e6e6fa;"><b>Итого к оплате: </td>
                                 <td style="background:#e6e6fa;" colspan="4"><b>', $sum, ' руб.</b></td>
                              </table>
                              <form action="confirmordering.php">
                                 <p>Ф.И.О.:</p>
                                 <input type="text" size="30" name="fullname" required>
                                 <p>Тел. номер:</p>
                                 <input type="text" size="30" name="phonenumber" required>
                                 <p>E-mail:</p>
                                 <input type="text" size="30" name="email" required>
                                 <p>Адрес доставки (оставьте поле пустым, если желаете забрать товар самостоятельно):</p>
                                 <input type="text" size="70" name="address">
                                 <p>Желаемая дата доставки (самовывоза) товара:</p>
                                 <input type="text" size="20" name="date" required>
                                 </td>
                                 </tr>
                                 <tr>
                                    <td align="right" colspan="3">
                                       <br>
                                       <input type="submit" value="Подтвердить заказ" style="margin-top:20px;">
                                       <br>
                                       <br>
                              </form>
                              </td>
                              </tr>
                              ';
                        }
                        ?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>
