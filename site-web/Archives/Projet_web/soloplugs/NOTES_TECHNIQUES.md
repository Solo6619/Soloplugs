# 📝 NOTES TECHNIQUES — SOLOPLUGS

## Corrections apportées

### 1. Encodage UTF-8
Tous les fichiers ont été sauvegardés en UTF-8 sans BOM.
Les caractères spéciaux français sont maintenant corrects partout.

### 2. Fichiers créés de toutes pièces
- `includes/header.html`
- `includes/footer.html`
- `solo.html` (structure de base)
- `soli.html` (structure de base)
- `ressources.html` (structure de base)
- `apropos.html` (avec un peu de contenu)
- `magazine_photos.html` (structure de base)

### 3. Chemins de fichiers standardisés
- Pages principales : utilisent `css/` et `includes/`
- Pages thématiques (7_themes/) : utilisent `../css/` et `../includes/`

### 4. Système d'inclusion
Le script `include.js` charge automatiquement :
- Le header dans `<div include-html="includes/header.html"></div>`
- Le footer dans `<div include-html="includes/footer.html"></div>`

**Important** : Nécessite un serveur local pour fonctionner !

---

## Prochaines étapes recommandées

### Contenu
1. Remplir les pages Solo, Soli, Ressources
2. Enrichir le contenu des 7 thèmes
3. Ajouter des articles au magazine

### Design
1. Créer ou trouver des images de fond pour les thèmes
2. Ajouter des photos pour le magazine
3. Créer un favicon pour le site

### Fonctionnalités
1. Système de newsletter (si souhaité)
2. Formulaire de contact
3. Partage sur réseaux sociaux
4. Version anglaise (déjà prévu dans selection.html)

### Technique
1. Optimiser les images (compression)
2. Ajouter un système de cache
3. Tester sur différents navigateurs
4. Vérifier l'accessibilité (WCAG)

---

## Points d'attention

### Chemins absolus
Les chemins utilisent actuellement `/soloplugs/` dans header et footer.
Si tu changes l'emplacement du site, pense à modifier ces chemins.

### Images manquantes
Le site référence des images qui n'existent pas encore :
- `images/mag1.jpg` à `mag5.jpg` dans magazine.html
- `images/backgrounds/bg_*.jpg` pour les thèmes

### Pages en construction
5 pages attendent du contenu :
- solo.html
- soli.html  
- ressources.html
- magazine_photos.html
- contact.html (référencée dans footer mais non créée)

---

## Compatibilité

### Navigateurs testés
- ✅ Chrome/Edge (recommandé)
- ✅ Firefox
- ✅ Safari
- ⚠️ Internet Explorer : non supporté

### Responsive
Le site est responsive et s'adapte aux mobiles, tablettes et desktop.

### Serveur local requis
Le système d'inclusion header/footer nécessite un serveur.
Ne fonctionne PAS en ouvrant directement les fichiers HTML.

---

## Ressources utiles

### Polices utilisées
- **Lora** : titres élégants (Google Fonts)
- **Inter** : texte moderne et lisible (Google Fonts)

### Palette de couleurs
- **#1A2332** : Bleu nuit (fond sombre)
- **#3B495A** : Bleu gris (dégradés)
- **#D4A574** : Doré clair (accent principal)
- **#C17B6F** : Terracotta (dégradés)
- **#E63946** : Rouge cerise (logo "plugs")
- **#FBF9F6** : Beige très clair (fond principal)
- **#2C3338** : Gris foncé (texte)

### Animations CSS
- Fade-in au chargement des pages
- Hover effects sur les cartes
- Header qui se compacte au scroll
- Transitions douces sur tous les éléments interactifs

---

## Support

Si tu as des questions ou rencontres des problèmes :
1. Vérifie d'abord ce fichier et le README.md
2. Assure-toi d'utiliser un serveur local
3. Vérifie l'encodage UTF-8 de tes fichiers
4. Consulte la console du navigateur pour les erreurs

---

**Date de création :** Octobre 2025
**Version :** 1.0.0 — Encodage UTF-8 corrigé
