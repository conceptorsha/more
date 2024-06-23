
<section class="container">

      <div class="box form-box">
      <h2 class="section-title">login</h2>
          
            <form action="" method="post">
            <input type="hidden" name="action" value="signin">
              <div class="field input">
               <!--<span class="icon"><ion-icon name="mail"></ion-icon></span>-->
               <label for="email">email</label>
                <input type="text"  name="email" id = "email" required>
               
              </div>
              <div class="field input">
               <!-- /*<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>*/>-->
               
               <label for="password">password</label>
                <input type="password"  name="password" id = "password" required>
               
              </div>
              <div clss="field">
              <input type="submit" class="btn" name="submit" value="login" required>
              </div>
              <div class="links">
                <p>don't have account?<a href="?action=signup">signup</a></p>
              </div>
               </form>
            </div>
</section> 
</main>