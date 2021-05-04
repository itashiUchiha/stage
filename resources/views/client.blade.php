<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{url('../resources/css/client.css')}}" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">information</h3>
          <p class="text">
            bienvenu sur la page de demande statistique de la douane 
            veillez remplir les champs ci pres pour faire votre demande
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>pour les regimes mettre un point virgule apres chaque regime</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>pour les libelé mettre un point virgule apres chaque regime</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>pour le champs type preciser si cest import export ou transit</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
            @csrf
          <form  autocomplete="off">
            <h3 class="title">Demande</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">type</label>
              <span>type</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">libelé</label>
              <span>libelé</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">regime</label>
              <span>regime</span>
            </div>
            <div class="input-container">
                <input type="date" name="date_debut" class="input" /> 
                <label for="">date_debut</label>
                <span>date_debut</span>
              </div>
              <div class="input-container">
                <input type="date" name="date_fin" class="input" /> 
                <label for="">date_fin</label>
                <span>date_fin</span>
              </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="{{url('../resources/js/client.js')}}"></script>
  </body>
</html>