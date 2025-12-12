# ✅ CHECKLIST INSTALLATION - SYSTÈME JEUX SOLOPLUGS

## 🎯 INSTALLATION EN 3 ÉTAPES

### ÉTAPE 1 : Installer le CSS universel
```
[ ] Télécharger jeux-soloplugs.css
[ ] Placer dans : C:\wamp64\www\Soloplugs\css\
[ ] Vérifier : http://localhost/Soloplugs/css/jeux-soloplugs.css
```

### ÉTAPE 2 : Installer l'article Solitaire
```
[ ] Télécharger solitaire-klondike-FINAL.php
[ ] Placer dans : C:\wamp64\www\Soloplugs\articles\
[ ] Tester : http://localhost/Soloplugs/articles/solitaire-klondike-FINAL.php
```

### ÉTAPE 3 : Garder le template pour plus tard
```
[ ] Télécharger template-jeu.php
[ ] Le garder comme modèle pour futurs jeux
[ ] Lire GUIDE_SYSTEME_JEUX.md pour comprendre comment l'utiliser
```

---

## 🧪 TESTS À FAIRE

### Test 1 : CSS se charge
```
[ ] Ouvrir : http://localhost/Soloplugs/css/jeux-soloplugs.css
[ ] Doit afficher le code CSS (pas d'erreur 404)
```

### Test 2 : Article Solitaire fonctionne
```
[ ] Ouvrir : http://localhost/Soloplugs/articles/solitaire-klondike-FINAL.php
[ ] Voir badge doré "🎮 Jeux en Solo"
[ ] Voir ligne dorée en haut
[ ] Voir titre or "Solitaire Klondike"
[ ] Voir 3 stats (durée, gratuit, sans inscription)
[ ] Voir jeu dans carte blanche
[ ] Voir 2 boutons (or + blanc)
[ ] Voir encadré "Pourquoi ce jeu ?"
[ ] Voir grille de 6 bénéfices
[ ] Voir ligne dorée en bas
```

### Test 3 : Responsive fonctionne
```
[ ] Réduire fenêtre navigateur
[ ] Boutons passent en pleine largeur
[ ] Grille bénéfices passe en 1 colonne
[ ] Tout reste lisible
```

---

## 🎨 VÉRIFICATION VISUELLE

### Couleurs attendues
```
[ ] Or : #D4A574 (badge, titres, bordures)
[ ] Crème : #FBF9F6 (fond section)
[ ] Blanc : #FFFFFF (cartes, boutons secondaires)
[ ] Texte : #2C3338 (paragraphes)
```

### Effets interactifs
```
[ ] Boutons s'élèvent au survol (hover)
[ ] Cartes bénéfices s'élèvent au survol
[ ] Transitions fluides
```

---

## 📂 STRUCTURE FINALE DE VOS DOSSIERS

```
C:\wamp64\www\Soloplugs\
│
├── css\
│   ├── global.css
│   ├── articles.css
│   └── jeux-soloplugs.css ← NOUVEAU !
│
├── articles\
│   ├── solitude-invisible.php
│   ├── solitaire-klondike-FINAL.php ← NOUVEAU !
│   └── (autres articles...)
│
└── (autres dossiers...)
```

---

## 🚨 TROUBLESHOOTING

### Le CSS ne se charge pas
```
PROBLÈME : Badge et couleurs n'apparaissent pas
SOLUTION :
1. Vérifiez que jeux-soloplugs.css est dans /css/
2. Videz cache : Ctrl + Shift + Delete
3. Rechargez : Ctrl + R
4. Vérifiez console (F12) pour erreurs
```

### Le jeu ne s'affiche pas
```
PROBLÈME : Iframe vide ou erreur
SOLUTION :
1. Vérifiez l'URL de l'iframe
2. Testez l'URL directement dans navigateur
3. Certains sites bloquent l'intégration iframe
```

### Les boutons ne fonctionnent pas
```
PROBLÈME : Clic sur bouton ne fait rien
SOLUTION :
1. Vérifiez les URLs dans href=""
2. Assurez-vous que target="_blank" est présent
```

---

## 📝 PROCHAINES ÉTAPES (OPTIONNEL)

Une fois l'installation validée :

```
[ ] Lire GUIDE_SYSTEME_JEUX.md en entier
[ ] Planifier quels jeux ajouter ensuite
[ ] Copier template-jeu.php pour créer un nouveau jeu
[ ] Tester l'ajout d'un 2e jeu (Échecs, Sudoku, etc.)
```

---

## 🎉 VALIDATION FINALE

**Tout fonctionne si vous voyez :**

✅ Badge doré avec gradient
✅ Lignes dorées haut et bas
✅ Fond crème avec gradient
✅ Jeu dans carte blanche avec ombre
✅ Boutons or et blanc stylisés
✅ Grille de bénéfices responsive
✅ Texte philosophique SOLOPLUGS
✅ Design professionnel cohérent

---

## 📸 VALIDATION PAR CAPTURE D'ÉCRAN

```
[ ] Faire capture écran HAUT de page
[ ] Faire capture écran BAS de page
[ ] Comparer avec les captures de test-jeu-v3.php
[ ] Doivent être identiques !
```

---

## ✅ INSTALLATION COMPLÈTE !

**Si toutes les cases sont cochées :**

🎉 **FÉLICITATIONS !**
🎯 **Le système jeux SOLOPLUGS est opérationnel !**
🚀 **Vous pouvez maintenant ajouter autant de jeux que vous voulez !**

---

**Date d'installation : _____________**
**Installé par : Solo**
**Version : 1.0 FINALE**
