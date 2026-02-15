<!-- COMPOSANT : BOITE PROPOSER UNE RESSOURCE -->

<style>
.proposer-ressource {
  max-width: 700px;
  margin: 3rem auto;
  background: #FFFDF9;
  border: 2px solid rgba(212, 165, 116, 0.5);
  border-radius: 16px;
  overflow: hidden;
  transition: all 0.4s ease;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
}

.proposer-ressource.expanded {
  border-color: rgba(212, 165, 116, 0.7);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
}

.proposer-res-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1.25rem 1.5rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.proposer-res-header:hover {
  background: rgba(212, 165, 116, 0.08);
}

.proposer-res-header-content {
  display: flex;
  align-items: center;
  gap: 12px;
}

.proposer-res-icon {
  font-size: 1.4rem;
}

.proposer-res-titre {
  font-family: 'Lora', 'Cormorant Garamond', Georgia, serif;
  font-size: 1.1rem;
  color: #2C3338;
  margin: 0;
}

.proposer-res-toggle {
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(212, 165, 116, 0.15);
  border-radius: 50%;
  transition: all 0.3s ease;
}

.proposer-res-toggle svg {
  width: 18px;
  height: 18px;
  stroke: #D4A574;
  stroke-width: 2;
  fill: none;
  transition: transform 0.3s ease;
}

.proposer-ressource.expanded .proposer-res-toggle svg {
  transform: rotate(180deg);
}

.proposer-res-contenu {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease;
}

.proposer-ressource.expanded .proposer-res-contenu {
  max-height: 2000px !important;
}

.proposer-res-inner {
  padding: 0 1.5rem 1.5rem;
}

.proposer-res-intro {
  font-family: 'Inter', sans-serif;
  font-size: 0.95rem;
  color: #5C554E;
  line-height: 1.7;
  margin-bottom: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid rgba(212, 165, 116, 0.2);
}

.proposer-res-form {
  display: flex;
  flex-direction: column;
  gap: 1.1rem;
}

.proposer-res-form .form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}

.proposer-res-form .form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.proposer-res-form .form-group.full-width {
  grid-column: 1 / -1;
}

.proposer-res-form .form-group label {
  font-family: 'Inter', sans-serif;
  font-size: 0.8rem;
  font-weight: 600;
  color: #5C554E;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.proposer-res-form .form-group input,
.proposer-res-form .form-group select,
.proposer-res-form .form-group textarea {
  padding: 0.8rem 1rem;
  background: #FFFFFF;
  border: 1px solid rgba(212, 165, 116, 0.3);
  border-radius: 10px;
  color: #2C3338;
  font-family: 'Inter', sans-serif;
  font-size: 0.95rem;
  transition: all 0.25s ease;
}

.proposer-res-form .form-group input:focus,
.proposer-res-form .form-group select:focus,
.proposer-res-form .form-group textarea:focus {
  outline: none;
  border-color: #D4A574;
  box-shadow: 0 0 0 3px rgba(212, 165, 116, 0.15);
}

.proposer-res-form .form-group input::placeholder,
.proposer-res-form .form-group textarea::placeholder {
  color: #A9A29B;
}

.proposer-res-form .form-group select {
  cursor: pointer;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%235C554E' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 12px center;
  padding-right: 2.5rem;
}

.proposer-res-form .form-group textarea {
  min-height: 90px;
  resize: vertical;
}

.proposer-res-form .form-separator {
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(212, 165, 116, 0.25), transparent);
  margin: 0.5rem 0;
}

.proposer-res-form .form-section-title {
  font-family: 'Lora', 'Cormorant Garamond', Georgia, serif;
  font-size: 1.05rem;
  font-weight: 500;
  color: #2C3338;
  margin: 0.5rem 0 0;
}

.btn-proposer-res {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 1rem 1.75rem;
  margin-top: 0.5rem;
  background: linear-gradient(135deg, #D4A574 0%, #C4956A 100%);
  border: none;
  border-radius: 30px;
  color: #FFFFFF;
  font-family: 'Inter', sans-serif;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  align-self: flex-start;
}

.btn-proposer-res:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 25px rgba(212, 165, 116, 0.4);
}

.btn-proposer-res:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}

.btn-proposer-res svg {
  width: 18px;
  height: 18px;
  stroke: currentColor;
  stroke-width: 2;
  fill: none;
}

.proposer-res-note {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  margin-top: 1.25rem;
  padding-top: 1.25rem;
  border-top: 1px solid rgba(212, 165, 116, 0.15);
}

.proposer-res-note-icon {
  font-size: 1rem;
  flex-shrink: 0;
}

.proposer-res-note p {
  font-family: 'Inter', sans-serif;
  font-size: 0.85rem;
  color: #7A726A;
  line-height: 1.6;
  margin: 0;
}

.proposer-res-confirmation {
  display: none;
  text-align: center;
  padding: 2rem 1rem;
}

.proposer-res-confirmation.visible {
  display: block;
  animation: fadeInRes 0.5s ease;
}

.proposer-res-confirmation-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.proposer-res-confirmation h3 {
  font-family: 'Lora', Georgia, serif;
  font-size: 1.5rem;
  font-weight: 400;
  color: #2C3338;
  margin-bottom: 0.75rem;
}

.proposer-res-confirmation p {
  font-family: 'Inter', sans-serif;
  font-size: 0.95rem;
  color: #5C554E;
  line-height: 1.6;
  margin: 0;
}

@keyframes fadeInRes {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

@media (max-width: 768px) {
  .proposer-ressource {
    margin: 2rem 1rem;
  }
  .proposer-res-header {
    padding: 1rem 1.25rem;
  }
  .proposer-res-inner {
    padding: 0 1.25rem 1.25rem;
  }
  .proposer-res-form .form-row {
    grid-template-columns: 1fr;
  }
  .proposer-res-form .form-group.full-width {
    grid-column: 1;
  }
}

.spin-icon-res {
  animation: spinRes 1s linear infinite;
}
@keyframes spinRes {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
</style>

<section style="padding: 0 1.5rem 3rem;">
  <div class="proposer-ressource" id="proposer-ressource">
    
    <div class="proposer-res-header" onclick="toggleProposerRessource()">
      <div class="proposer-res-header-content">
        <span class="proposer-res-icon">&#128161;</span>
        <p class="proposer-res-titre">Tu connais une ressource dans ta région ? Partage-la. </p>
      </div>
      <div class="proposer-res-toggle">
        <svg viewBox="0 0 24 24"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
    </div>

    <div class="proposer-res-contenu">
      <div class="proposer-res-inner">
        
        <div id="proposer-res-formulaire">
          <p class="proposer-res-intro">
            Organisme, ligne d'ecoute, groupe d'entraide... Fais-la nous connaitre pour aider d'autres personnes seules.
          </p>

          <form class="proposer-res-form" id="form-ressource" onsubmit="envoyerRessource(event)">
            
            <p class="form-section-title">&#128205; Ou se trouve cette ressource ?</p>
            
            <div class="form-row">
              <div class="form-group">
                <label for="res-pays">Pays *</label>
                <select id="res-pays" name="pays" required>
                  <option value="">Selectionner...</option>
                  <option value="quebec">Quebec (Canada)</option>
                  <option value="france">France</option>
                  <option value="belgique">Belgique</option>
                  <option value="suisse">Suisse</option>
                  <option value="autre">Autre pays francophone</option>
                </select>
              </div>
              <div class="form-group">
                <label for="res-region">Region / Ville *</label>
                <input type="text" id="res-region" name="region" placeholder="Ex: Montreal, Lyon, Geneve..." required>
              </div>
            </div>

            <div class="form-separator"></div>
            <p class="form-section-title">&#128203; A propos de la ressource</p>

            <div class="form-group full-width">
              <label for="res-nom">Nom de l'organisme ou ressource *</label>
              <input type="text" id="res-nom" name="nom" placeholder="Ex: Centre d'ecoute de Montreal" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="res-type">Type de ressource *</label>
                <select id="res-type" name="type" required>
                  <option value="">Selectionner...</option>
                  <option value="ligne-ecoute">Ligne d'ecoute</option>
                  <option value="organisme">Organisme communautaire</option>
                  <option value="groupe-entraide">Groupe d'entraide</option>
                  <option value="service-public">Service public / CLSC</option>
                  <option value="association">Association / OBNL</option>
                  <option value="en-ligne">Ressource en ligne</option>
                  <option value="autre">Autre</option>
                </select>
              </div>
              <div class="form-group">
                <label for="res-public">Public vise</label>
                <select id="res-public" name="public">
                  <option value="">Tous publics</option>
                  <option value="aines">Personnes ainees</option>
                  <option value="jeunes">Jeunes / ados</option>
                  <option value="parents">Parents seuls</option>
                  <option value="deuil">Personnes en deuil</option>
                  <option value="separation">Separation / divorce</option>
                  <option value="autre">Autre</option>
                </select>
              </div>
            </div>

            <div class="form-group full-width">
              <label for="res-description">Description *</label>
              <textarea id="res-description" name="description" placeholder="Decris brievement cette ressource : ce qu'elle offre, a qui elle s'adresse..." required></textarea>
            </div>

            <div class="form-separator"></div>
            <p class="form-section-title">&#128222; Comment la contacter ?</p>

            <div class="form-row">
              <div class="form-group">
                <label for="res-telephone">Telephone</label>
                <input type="tel" id="res-telephone" name="telephone" placeholder="Ex: 514-555-1234">
              </div>
              <div class="form-group">
                <label for="res-site">Site web</label>
                <input type="url" id="res-site" name="site" placeholder="https://...">
              </div>
            </div>

            <div class="form-separator"></div>
            <p class="form-section-title">&#128100; Tes coordonnees (facultatif)</p>

            <div class="form-row">
              <div class="form-group">
                <label for="res-ton-nom">Ton nom / pseudo</label>
                <input type="text" id="res-ton-nom" name="ton_nom" placeholder="Pour te remercier">
              </div>
              <div class="form-group">
                <label for="res-ton-courriel">Ton courriel</label>
                <input type="email" id="res-ton-courriel" name="ton_courriel" placeholder="Si tu veux qu'on te contacte">
              </div>
            </div>

            <button type="submit" class="btn-proposer-res" id="btn-envoyer-res">
              <svg viewBox="0 0 24 24"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" stroke-linecap="round" stroke-linejoin="round"/></svg>
              Envoyer la suggestion
            </button>
          </form>

          <div class="proposer-res-note">
            <span class="proposer-res-note-icon">&#10024;</span>
            <p>Chaque ressource est verifiee par notre equipe avant d'etre ajoutee. Merci de contribuer !</p>
          </div>
        </div>

        <div class="proposer-res-confirmation" id="proposer-res-confirmation">
          <div class="proposer-res-confirmation-icon">&#128155;</div>
          <h3>Merci pour ta contribution !</h3>
          <p>Ta suggestion a bien ete recue.<br>Nous la verifierons et l'ajouterons au repertoire.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
function toggleProposerRessource() {
  document.getElementById('proposer-ressource').classList.toggle('expanded');
}

function envoyerRessource(event) {
  event.preventDefault();
  var btn = document.getElementById('btn-envoyer-res');
  var form = document.getElementById('form-ressource');
  btn.disabled = true;
  btn.innerHTML = '<svg viewBox="0 0 24 24" class="spin-icon-res"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="30 70"/></svg> Envoi en cours...';
  
  var formData = new FormData(form);
  var data = { type_formulaire: 'ressource' };
  formData.forEach(function(value, key) { data[key] = value; });
  
  fetch('send-suggestion.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
  })
  .then(function(response) { return response.json(); })
  .then(function(result) {
    document.getElementById('proposer-res-formulaire').style.display = 'none';
    document.getElementById('proposer-res-confirmation').classList.add('visible');
  })
  .catch(function(error) {
    console.error('Erreur:', error);
    btn.disabled = false;
    btn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" stroke-linecap="round" stroke-linejoin="round"/></svg> Envoyer la suggestion';
    alert('Erreur lors de l\'envoi. Veuillez reessayer.');
  });
}
</script>
