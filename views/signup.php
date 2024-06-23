<section class="container">
      <div class="box form-box">
        
          <header>sign up</header>
            <form action="." method="post">
            <input type="hidden" name="action" value="register">

              <div class="field input">
               <!--<span class="icon"><ion-icon name="mail"></ion-icon></span>-->
               <label for="username">username</label>
                <input type="text"  name="name" id ="username" required>
               
              </div>
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
              <input type="submit" class="btn" name="submit" value="sign up">
              </div>
              <div class="links">
                <p>already has account?<a href="?action=login">login</a></p>
              </div>
              </form>
            </div>
    </section> 
    