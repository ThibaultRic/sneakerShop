<div class="section container white">
  <div class="row">
    <h2 class="header center teal-text">Vous avez une question?</h2>
    <p class="grey-text center">Posez-nous toutes vos questions et inscrivez vous à notre newsletter afin d'être le premier au courant des dernières sorties.</p>
  </div>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate" required/>
          <label for="first_name">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate" required>
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select id="reasons" name="reasons" required/>
            <option value="" disabled selected>Choisissez la raison</option>
            <option value="1">Je cherche un modèle en particulier</option>
            <option value="2">Informations sur une commande</option>
            <option value="3">Disponibilité des produits</option>
            <option value="4">Autre raison</option>
          </select>
          <label>Raisons de la prise de contact</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="textarea1" class="materialize-textarea" length="500" required></textarea>
          <label for="textarea1">Votre message</label>
        </div>
      </div>
      <p>
        <input type="checkbox" id="optinNewsletter" name="optinNewsletter" />
        <label for="optinNewsletter">S'inscrire à la newsletter</label>
      </p>
      <div class="row center">
        <button class="btn-large teal waves-effect waves-light" type="submit" id="submit" name="action" >Envoyer
          <i class="material-icons right">send</i>
        </button>
        <p class="flow-text center teal-text" id="successMsg"></p>
      </div>
    </form>
  </div>
</div>