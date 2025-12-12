# 🎮 SYSTÈME JEUX SOLOPLUGS - GUIDE COMPLET

## 📦 FICHIERS LIVRÉS

### 1. **jeux-soloplugs.css** 
→ CSS universel réutilisable pour TOUS les jeux
→ À placer dans : `C:\wamp64\www\Soloplugs\css\`

### 2. **solitaire-klondike-FINAL.php**
→ Version finale de votre article Solitaire
→ À placer dans : `C:\wamp64\www\Soloplugs\articles\`

### 3. **template-jeu.php**
→ Template vierge pour créer rapidement de nouveaux jeux
→ À copier pour chaque nouveau jeu

---

## 🚀 INSTALLATION

### Étape 1 : Placer le CSS universel
```
1. Prenez le fichier jeux-soloplugs.css
2. Placez-le dans : C:\wamp64\www\Soloplugs\css\
3. C'est tout ! Ce fichier servira pour TOUS vos jeux
```

### Étape 2 : Remplacer l'article Solitaire
```
1. Prenez le fichier solitaire-klondike-FINAL.php
2. Remplacez l'ancien fichier dans : C:\wamp64\www\Soloplugs\articles\
3. Testez : http://localhost/Soloplugs/articles/solitaire-klondike-FINAL.php
```

---

## ✨ AJOUTER UN NOUVEAU JEU (RAPIDE !)

### Méthode en 5 étapes

#### ÉTAPE 1 : Copier le template
```
1. Faites une copie de template-jeu.php
2. Renommez-le (ex: echecs-solo.php, sudoku-solo.php)
3. Placez-le dans C:\wamp64\www\Soloplugs\articles\
```

#### ÉTAPE 2 : Personnaliser le titre et intro
```php
<!-- Cherchez cette section -->
<h2 class="jeu-titre">Nom du Jeu</h2>

<!-- Remplacez par -->
<h2 class="jeu-titre">Échecs contre IA</h2>

<!-- Et l'intro -->
<p class="jeu-intro">
  Affrontez une intelligence artificielle au jeu des rois. 
  Chaque partie est un défi stratégique qui affûte votre esprit.
</p>
```

#### ÉTAPE 3 : Modifier les stats
```php
<div class="jeu-stats">
  <div class="jeu-stat">
    <span class="jeu-stat-icon">⏱️</span>
    <span>15-30 minutes</span> <!-- Durée de votre jeu -->
  </div>
  <div class="jeu-stat">
    <span class="jeu-stat-icon">✨</span>
    <span>Gratuit</span>
  </div>
  <div class="jeu-stat">
    <span class="jeu-stat-icon">🔓</span>
    <span>Sans inscription</span>
  </div>
</div>
```

#### ÉTAPE 4 : Ajouter l'URL du jeu
```php
<iframe 
  src="URL_DE_VOTRE_JEU_ICI" 
  width="100%" 
  height="600"
  frameborder="0"
  allowfullscreen
  title="Nom du Jeu">
</iframe>
```

#### ÉTAPE 5 : Personnaliser "Pourquoi ce jeu ?" et bénéfices
```php
<div class="jeu-pourquoi">
  <h3 class="jeu-pourquoi-titre">💭 Pourquoi ce jeu ?</h3>
  <p>
    Expliquez la dimension philosophique...
  </p>
</div>

<!-- Puis les 4-6 bénéfices -->
<div class="jeu-benefice">
  <span class="jeu-benefice-icon">🧠</span>
  <h4 class="jeu-benefice-titre">Votre bénéfice</h4>
  <p class="jeu-benefice-desc">Description...</p>
</div>
```

---

## 🎨 PERSONNALISATION AVANCÉE

### Changer la hauteur de l'iframe
```php
<!-- Par défaut : 600px -->
<iframe height="600">

<!-- Pour un jeu vertical : 800px -->
<iframe height="800">

<!-- Pour un jeu compact : 500px -->
<iframe height="500">
```

### Ajouter/Retirer des bénéfices
```
- Minimum recommandé : 4 bénéfices
- Maximum recommandé : 6 bénéfices
- Sur desktop : grille 2 colonnes
- Sur mobile : grille 1 colonne
```

### Modifier les boutons
```php
<!-- 2 boutons (recommandé) -->
<div class="jeu-boutons">
  <a href="URL" class="btn-jeu btn-jeu-primaire">Bouton 1</a>
  <a href="URL" class="btn-jeu btn-jeu-secondaire">Bouton 2</a>
</div>

<!-- 1 seul bouton -->
<div class="jeu-boutons">
  <a href="URL" class="btn-jeu btn-jeu-primaire">Bouton unique</a>
</div>

<!-- 3 boutons -->
<div class="jeu-boutons">
  <a href="URL" class="btn-jeu btn-jeu-primaire">Bouton 1</a>
  <a href="URL" class="btn-jeu btn-jeu-secondaire">Bouton 2</a>
  <a href="URL" class="btn-jeu btn-jeu-secondaire">Bouton 3</a>
</div>
```

---

## 🎯 EXEMPLES DE JEUX À AJOUTER

### Jeux de réflexion
- ♟️ **Échecs** - Stratégie pure
- 🧩 **Sudoku** - Logique et patience
- 🎲 **Mahjong** - Concentration et mémoire
- 🧠 **Puzzle** - Créativité visuelle

### Jeux de cartes
- 🎴 **Spider Solitaire** - Variante avancée
- 🃏 **FreeCell** - Stratégie calculée
- 🎰 **Pyramid Solitaire** - Calcul mental

### Jeux de mots
- 📝 **Mots croisés** - Culture et vocabulaire
- 🔤 **Scrabble solo** - Enrichissement linguistique

---

## 📐 STRUCTURE VISUELLE GARANTIE

Tous vos jeux auront automatiquement :

✅ **Palette SOLOPLUGS** (#D4A574, #FBF9F6, #2C3338)
✅ **Badge "🎮 Jeux en Solo"** doré
✅ **Ligne dorée** haut et bas
✅ **Fond crème** avec gradient
✅ **Carte blanche** pour l'iframe
✅ **Boutons or** avec effets hover
✅ **Grille responsive** des bénéfices
✅ **Design mobile-friendly**

---

## 🔧 MAINTENANCE

### Modifier le CSS pour TOUS les jeux
```
1. Éditez UNIQUEMENT le fichier jeux-soloplugs.css
2. Tous les jeux seront mis à jour automatiquement
3. Aucun besoin de toucher aux fichiers PHP individuels
```

### Ajouter un nouveau style
```css
/* Dans jeux-soloplugs.css */
.ma-nouvelle-classe {
  /* Vos styles */
}
```

### Debug si le CSS ne se charge pas
```
1. Vérifiez : http://localhost/Soloplugs/css/jeux-soloplugs.css
2. Doit afficher le code CSS
3. Si erreur 404 : fichier mal placé
4. Videz le cache : Ctrl + Shift + Delete
```

---

## 🎓 BONNES PRATIQUES

### Ton philosophique SOLOPLUGS
✅ **BON** : "Un refuge mental où chaque décision devient méditation"
❌ **MAUVAIS** : "Un jeu amusant pour passer le temps"

### Durée réaliste
✅ **BON** : "5-15 minutes" (précis et honnête)
❌ **MAUVAIS** : "Rapide" (vague)

### Bénéfices authentiques
✅ **BON** : Liés à la solitude positive, l'autonomie, la paix intérieure
❌ **MAUVAIS** : Marketing générique

### Emojis cohérents
```
🧠 Concentration / Mental
🎯 Stratégie / Objectifs
😌 Détente / Zen
⏸️ Patience / Temps
🔄 Résilience / Recommencer
🏆 Accomplissement / Victoire
💪 Force / Courage
🌱 Croissance / Évolution
```

---

## 📊 CHECKLIST AVANT PUBLICATION

Avant de publier un nouveau jeu, vérifiez :

- [ ] Le fichier PHP utilise bien `jeux-soloplugs.css`
- [ ] Le titre est unique et évocateur
- [ ] L'intro explique le rapport solitude/jeu
- [ ] Les stats sont réalistes
- [ ] L'URL de l'iframe fonctionne
- [ ] Les boutons pointent vers des URLs valides
- [ ] "Pourquoi ce jeu ?" a 2 paragraphes philosophiques
- [ ] Il y a 4-6 bénéfices bien rédigés
- [ ] Les emojis sont cohérents
- [ ] Test sur desktop ET mobile
- [ ] Aucune erreur dans la console (F12)

---

## 🎉 RÉSUMÉ

**VOUS AVEZ MAINTENANT :**

1. ✅ Un CSS universel pour tous les jeux
2. ✅ Un article Solitaire finalisé et fonctionnel
3. ✅ Un template pour créer des jeux en 5 minutes
4. ✅ Un design professionnel garanti
5. ✅ Un système facile à maintenir

**POUR AJOUTER UN JEU :**
→ Copier template-jeu.php
→ Remplacer [À PERSONNALISER]
→ Tester
→ Publier !

---

## 🆘 SUPPORT

**Si vous avez un problème :**

1. Vérifiez que `jeux-soloplugs.css` est bien dans `/css/`
2. Videz le cache navigateur
3. Vérifiez la console (F12) pour erreurs
4. Testez l'URL CSS : `http://localhost/Soloplugs/css/jeux-soloplugs.css`

---

**Système créé le : 11 décembre 2025**
**Version : 1.0 FINALE**
**Prêt à l'emploi ! 🚀**
