<footer class="footer">
        <p class="footer__title">More classifieds</p>
        <div class="footer__social">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
            <span class="icon"><ion-icon name="logo-facebook"></ion-icon></span>

        </div>

    </footer>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
    <script>
const getElement =(selector)=>{
  const element = document.querySelector(selector)
  if(element) return element
  throw Error(`Please double check your class names, there is no ${selector} class`)
}

const links = getElement(".nav-links")
const navBtnDOM = getElement(".nav-btn")

navBtnDOM.addEventListener('click',()=>{
  links.classList.toggle('show-links')
})

const date = getElement('#date')
 const currentYear = new Date().getFullYear()
date.textContent = currentYear
</script>

    </body>
    </html>
