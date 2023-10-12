
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Transparent Login Form HTML CSS</title>
      <link rel="stylesheet" href="CSS/payment.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>  
      <div class="bg-img">
         <div class="content">
            <header>payment Form</header>
            <form action="paymentinsertion.php" method="post">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name="bank_name" required placeholder="bank name" >
               </div>
               <div class="form-group">  
            <fieldset style="background-color:white;">
                <label for="bank" > Card Type</label>
                <div class="">
                  <input type="radio" class="radio" name="card_type" value="visa" id="visa" />
                  <label for="visa">Visa</label>
                  <input type="radio" class="radio" name="card_type" value="mastercard" id="mastercard" />
                  <label for="mastercard"> MasterCard</label>
                  <input type="radio" class="radio" name="card_type" value="amex" id="amex" />
                  <label for="amex"> American Express</label>
                </div>
              </fieldset>
            </div>
            <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" name="card_no" required placeholder="card number">
               </div>
               <div class="field space">
                  <span class="fa fa-user"></span>
                  <input type="number" class="pass-key" name="payment" required placeholder="Amount">
               </div>
              
               <div class="field space">
              <input type="submit" value="submit" name="submit">
               </div>
            </form>
            
      <script>
         const pass_field = document.querySelector('.pass-key');
         const showBtn = document.querySelector('.show');
         showBtn.addEventListener('click', function(){
          if(pass_field.type === "password"){
            pass_field.type = "text";
            showBtn.textContent = "HIDE";
            showBtn.style.color = "#3498db";
          }else{
            pass_field.type = "password";
            showBtn.textContent = "SHOW";
            showBtn.style.color = "#222";
          }
         });
      </script>
   </body>
</html>