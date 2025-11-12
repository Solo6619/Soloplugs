# 🌿 SOLOPLUGS — LA VOIX DE LA SOLITUDE

## ✅ FICHIERS CORRIGÉS — VERSION UTF-8

Tous les fichiers ont été corrigés pour respecter l'encodage UTF-8 propre. 
Tous les caractères spéciaux français s'affichent maintenant correctement.

---

## 📂 STRUCTURE DU SITE

```
soloplugs_corriges/
│
├── index.html              # Page d'accueil principale
├── selection.html          # Page de sélection pays/langue
├── magazine.html           # Magazine avec articles
│
├── solo.html               # Page Solo (en construction)
├── soli.html               # Page Soli (en construction)
├── ressources.html         # Page Ressources (en construction)
├── apropos.html            # Page À propos
├── magazine_photos.html    # Magazine photos (en construction)
│
├── css/
│   ├── style.css           # Styles principaux
│   └── themes-overlay.css  # Overlays pour les pages thématiques
│
├── includes/
│   ├── header.html         # Header commun à toutes les pages
│   ├── footer.html         # Footer commun à toutes les pages
│   ├── include.js          # Script d'inclusion header/footer
│   └── main.js             # Gestion langue et pays
│
├── 7_themes/
│   ├── vivre-solo.html
│   ├── ado-solo.html
│   ├── parent-solo.html
│   ├── separation-divorce-deces.html
│   ├── vieillir-solo.html
│   ├── voyages-solo.html
│   └── sorties-loisirs-rencontres.html
│
└── images/
    └── backgrounds/        # Dossier pour les images de fond (à ajouter)
```

---

## 🚀 INSTALLATION ET UTILISATION

### Option 1 : Test en local (recommandé)

1. **Télécharge tous les fichiers** et place-les dans un dossier nommé `soloplugs`

2. **Lance un serveur local** (obligatoire pour le système d'inclusion header/footer)

   **Avec Python 3 :**
   ```bash
   cd soloplugs
   python3 -m http.server 8000
   ```
   
   Puis ouvre : `http://localhost:8000/index.html`

   **Avec Node.js :**
   ```bash
   npx http-server soloplugs -p 8000
   ```

   **Avec PHP :**
   ```bash
   cd soloplugs
   php -S localhost:8000
   ```

3. **Ouvre ton navigateur** et teste toutes les pages !

### Option 2 : Hébergement web

Si tu veux mettre le site en ligne :

1. **Uploads les fichiers** sur ton hébergeur (ex: Hostinger, OVH, GitHub Pages, Netlify)

2. **Modifie les chemins** dans `header.html` et `footer.html` :
   - Remplace/soloplugs/ `` par `/` si le site est à la racine
   - Ou adapte selon ton nom de dossier

---

## 🛠️ CORRECTIONS EFFECTUÉES

### ✅ Encodage UTF-8
- Tous les caractères spéciaux français sont maintenant corrects
- `À propos` au lieu de `Ã€ propos`
- `é è ê ô ç` au lieu de `Ã© Ã¨ Ãª Ã´ Ã§`
- Guillemets typographiques `" "` au lieu de `â€œ â€`
- Tirets cadratins `—` au lieu de `â€"`
- Emojis corrects : `🌐 ✉️ ▶️` 

### ✅ Structure complète
- Header et footer créés et fonctionnels
- Toutes les pages thématiques corrigées
- CSS propre et organisé
- JavaScript fonctionnel

### ✅ Pages créées (même si en construction)
- solo.html
- soli.html
- ressources.html
- apropos.html
- magazine_photos.html

---

## 🎨 PERSONNALISATION

### Modifier les couleurs
Édite `css/style.css` et cherche :
- `#1A2332` (bleu foncé principal)
- `#D4A574` (doré/beige)
- `#E63946` (rouge accent)
- `#FBF9F6` (fond clair)

### Ajouter des images de fond
Place tes images dans `images/backgrounds/` avec ces noms :
- `bg_ado.jpg`
- `bg_voyages.jpg`
- `bg_parent.jpg`
- `bg_vivre.jpg`
- `bg_separation.jpg`
- `bg_vieillir.jpg`
- `bg_sorties.jpg`

### Modifier les textes
Tous les textes sont directement dans les fichiers HTML. 
Utilise un éditeur de texte en UTF-8 (VS Code, Sublime Text, Notepad++).

---

## 📋 PAGES À DÉVELOPPER

Les pages suivantes ont une structure de base mais attendent du contenu :

1. **solo.html** — La voix de Solo
2. **soli.html** — Le journal intime
3. **ressources.html** — Liens et ressources utiles
4. **magazine_photos.html** — Galerie photo
5. **Les 7 thèmes** — Enrichir avec plus de contenu

---

## 🐛 DÉPANNAGE

### Le header/footer ne s'affiche pas
→ Tu dois utiliser un **serveur local** (voir section Installation)
→ Les inclusions HTML ne fonctionnent pas en ouvrant directement les fichiers

### Les accents sont mal affichés
→ Vérifie que ton éditeur de texte est bien configuré en **UTF-8**
→ Ne pas utiliser Notepad Windows (préférer Notepad++ ou VS Code)

### Les liens ne fonctionnent pas
→ Vérifie les chemins dans header.html et footer.html
→ Adapte `/soloplugs/` selon ton installation

---

## 💡 CONSEILS

1. **Toujours éditer en UTF-8** pour éviter les problèmes d'encodage
2. **Tester en local** avant de mettre en ligne
3. **Sauvegarder régulièrement** tes modifications
4. **Commencer par ajouter du contenu** aux pages en construction
5. **Ajouter des images** pour enrichir l'expérience visuelle

---

## 📧 CONTACT

Pour toute question sur l'utilisation de ces fichiers, n'hésite pas !

**© 2025 Soloplugs — La voix de la solitude**

---

## 🎉 BRAVO !

Ton site est maintenant prêt à être développé. Tous les fichiers sont corrigés et fonctionnels.
Il ne reste plus qu'à ajouter ton contenu et tes images !

Bonne continuation avec ce beau projet ! 🌿
