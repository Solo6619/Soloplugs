# VIVRE SOLO V2 — SYSTÈME D'ORIENTATION SOL_001 / SOL_002

## 📋 RÉSUMÉ DE LA REFONTE

### Philosophie centrale
La distinction entre **solitude choisie (SOL_001)** et **isolement subi (SOL_002)** devient le **point d'entrée immédiat** du thème Vivre solo, permettant à chaque visiteur de s'orienter dès son arrivée.

---

## 🏗️ NOUVELLE STRUCTURE DE LA PAGE

### 1. HERO SIMPLIFIÉ
- Titre : "Vivre solo"
- Sous-titre : "La solitude a mille visages"
- Message universel et accueillant
- Pas de prise de position, juste une invitation

### 2. SECTION D'ORIENTATION (Position critique #1)
**"Où en es-tu avec la solitude ?"**

Deux cartes visuelles côte à côte :

#### 🌟 SOLITUDE CHOISIE (SOL_001)
- Image : femme sereine lisant dans son salon lumineux
- Message : "Je vis seul·e par choix et j'assume cette situation"
- Promesse : enrichir et approfondir l'expérience de solitude
- Thèmes : créativité, philosophie, art de vivre, plénitude
- Couleur : Or chaleureux (#D4A574)

#### 💭 ISOLEMENT SUBI (SOL_002)
- Image : petite figurine seule sous une lampe
- Message : "Je me sens seul·e et j'en souffre à différents niveaux"
- Promesse : aide, soutien et outils pour soulager/surmonter
- Thèmes : accompagnement, ressources, reconnexion, compassion
- Couleur : Bleu doux (#7BA7BC)

**Note importante** : L'utilisateur peut naviguer entre les deux parcours à tout moment.

### 3. CONTENU DYNAMIQUE PAR PARCOURS

Le contenu affiché change selon le bouton cliqué :

#### PARCOURS SOL_001 (Solitude choisie)
1. **Citation inspirante** — Schopenhauer sur la liberté dans la solitude
2. **L'art de cultiver sa solitude** — Philosophie (liberté intérieure, connaissance de soi, créativité)
3. **Pratiques concrètes** — Journal/Soli, rituels contemplatifs, créativité libre, slow living
4. **CTA Soli** — "Dialogue avec ton univers intérieur"

#### PARCOURS SOL_002 (Isolement subi)
1. **Message de soutien** — "Tu n'es pas seul·e dans cette épreuve" (compassion, zéro jugement)
2. **Comprendre ton expérience** — Types d'isolement (circonstanciel, social, émotionnel)
3. **Ressources et soutien** — Aide immédiate, accompagnement, petits pas quotidiens
4. **Stratégies de reconnexion** — 4 étapes progressives
5. **CTA Solo** — "Parle avec Solo, ton compagnon bienveillant" + lien ressources d'urgence

### 4. SECTIONS COMMUNES (pour tous)
- **Statistiques mondiales** — L'épidémie silencieuse en chiffres (contexte universel)
- **Articles du magazine** — Sélection d'articles pertinents
- **Footer standard**

---

## 🎨 DESIGN & UX

### Palette de couleurs
- **SOL_001** : Or chaleureux (#D4A574), terres, crème
- **SOL_002** : Bleu doux (#7BA7BC), teintes apaisantes
- **Commun** : Base crème (#FBF9F6), texte charbon (#2C3338)

### Interaction utilisateur
1. Visiteur arrive → Hero accueillant
2. Immédiatement après → Section d'orientation (choix conscient)
3. Clic sur un parcours → Scroll automatique vers le contenu adapté
4. Navigation fluide → Peut changer de parcours à tout moment
5. LocalStorage → Mémorise le dernier choix (optionnel, actuellement désactivé)

### Animations
- Apparition progressive au scroll
- Hover effects sur les cartes
- Transitions douces entre les sections
- Délais échelonnés pour les éléments de grille

---

## 💻 IMPLÉMENTATION TECHNIQUE

### Fichiers créés
1. **vivre-solo-v2.php** — Nouvelle structure HTML/PHP
2. **vivre-solo-enhanced-v2.css** — Styles complets avec système d'orientation

### JavaScript intégré
```javascript
function selectPath(pathType) {
  // Masque tous les contenus
  // Affiche le contenu du parcours choisi
  // Scroll smooth vers le contenu
  // Sauvegarde le choix dans localStorage
}
```

### Système de bascule
- Par défaut : aucun contenu affiché (l'utilisateur DOIT choisir)
- Clic sur "Explorer ce parcours" → Affiche le contenu correspondant
- L'utilisateur peut revenir en haut et choisir l'autre parcours

---

## 🚀 PROCHAINES ÉTAPES SUGGÉRÉES

### 1. Intégration
- [ ] Remplacer l'actuel `vivre-solo.php` par `vivre-solo-v2.php`
- [ ] Remplacer `vivre-solo-enhanced.css` par `vivre-solo-enhanced-v2.css`
- [ ] Tester sur différents appareils (mobile, tablette, desktop)
- [ ] Vérifier les liens vers Solo, Soli, urgences, ressources, magazine

### 2. Contenu à développer
- [ ] Créer les pages cibles :
  - `urgences.html` — Ressources d'urgence par pays
  - `ressources.html` — Annuaire d'aide et de soutien
  - `activites.html` — Suggestions d'activités pour créer du lien
- [ ] Enrichir les articles du magazine avec tags SOL_001/SOL_002
- [ ] Développer plus de pratiques concrètes pour chaque parcours

### 3. Expérience utilisateur
- [ ] Ajouter un indicateur visuel du parcours actif (breadcrumb?)
- [ ] Créer un système de "retour à l'orientation" (bouton flottant?)
- [ ] Tester avec de vrais utilisateurs (feedback A/B testing?)
- [ ] Analytics : tracker quel parcours est le plus choisi

### 4. Cohérence SOLOPLUGS
- [ ] Appliquer la même logique d'orientation aux autres thèmes si pertinent :
  - Ado-solo (choisi vs subi)
  - Parent-solo (monoparentalité choisie vs subie)
  - Vieillir-solo (choix de vie vs isolement des aînés)
- [ ] Créer une navigation transversale entre les thèmes

---

## 🎯 POINTS FORTS DE CETTE APPROCHE

### ✅ Orientation immédiate
L'utilisateur n'a pas à deviner si le contenu s'adresse à lui — il choisit consciemment son parcours.

### ✅ Respect de la diversité
Célèbre la solitude choisie SANS minimiser la souffrance de l'isolement subi.

### ✅ Parcours personnalisés
Chaque visiteur reçoit du contenu adapté à son expérience réelle.

### ✅ Ton approprié
- SOL_001 : Inspiration, créativité, philosophie, liberté
- SOL_002 : Compassion, soutien, outils pratiques, zéro jugement

### ✅ Flexibilité
L'utilisateur peut explorer l'autre parcours à tout moment (la solitude évolue).

### ✅ Cohérence avec la vision SOLOPLUGS
Respecte totalement la distinction fondamentale SOL_001/SOL_002 qui est au cœur de ta plateforme.

---

## 📊 MÉTRIQUES À SUIVRE (futures)

Si tu veux mesurer l'impact :
- % de visiteurs qui choisissent SOL_001 vs SOL_002
- Temps passé dans chaque parcours
- Taux de clic vers Solo vs Soli selon le parcours
- Taux de rebond avant/après l'orientation
- Feedback utilisateur (sondage rapide?)

---

## 🔧 PERSONNALISATIONS FUTURES POSSIBLES

### Niveau 1 : Orientation renforcée
- Quiz court pour aider l'utilisateur à choisir son parcours
- Témoignages vidéo dans chaque parcours
- Ressources téléchargeables (PDF, guides)

### Niveau 2 : Interactivité
- Chatbot Solo intégré directement dans le parcours SOL_002
- Exercices interactifs dans le parcours SOL_001
- Système de favoris/sauvegarde de ressources

### Niveau 3 : Communauté
- Forum ou espace d'échange par parcours
- Groupes de soutien virtuels (SOL_002)
- Ateliers créatifs en ligne (SOL_001)

---

## 💬 NOTES FINALES

Cette refonte place l'**expérience utilisateur** au centre. Plutôt que de présenter un contenu générique, on offre un **parcours sur mesure** dès la première interaction.

C'est cohérent avec la philosophie SOLOPLUGS : **reconnaître et honorer les deux réalités de la solitude**, sans les confondre ni les hiérarchiser.

Le système est **évolutif** — on peut ajouter du contenu, des fonctionnalités, des sous-parcours, tout en gardant cette structure d'orientation claire et bienveillante.

---

**Créé pour SOLOPLUGS** — La solitude est la voix silencieuse universelle
Version 2.0 — Décembre 2024
