# SOLOPLUGS - Spectre de Solitude
## Guide d'intégration PHP

---

## Fichiers fournis

| Fichier | Destination | Description |
|---------|-------------|-------------|
| `spectre-btn.php` | `/includes/` | Bouton miniature pour le header |
| `spectre-modal.php` | `/includes/` | Modale complète |
| `spectre-solitude.css` | `/css/` | Styles |
| `spectre-solitude.js` | `/js/` | Script |

---

## Installation en 4 étapes

### Étape 1 : Copier les fichiers

```
/Soloplugs/
├── css/
│   └── spectre-solitude.css   ← COPIER ICI
├── js/
│   └── spectre-solitude.js    ← COPIER ICI
└── includes/
    ├── spectre-btn.php        ← COPIER ICI
    └── spectre-modal.php      ← COPIER ICI
```

---

### Étape 2 : Modifier header.php

Ajoute le CSS dans le `<head>` (si tu as un head.php ou en haut de header.php) :

```php
<link rel="stylesheet" href="/css/spectre-solitude.css">
```

Ajoute le bouton dans ta navigation (après "Magazine" ou à la fin de la nav) :

```php
<nav>
    <a href="/ressources.php">Ressources</a>
    <a href="/7_themes/">Les 7 thèmes</a>
    <a href="#">Compagnons IA</a>
    <a href="/apropos.php">À propos</a>
    <a href="/magazine.php">Magazine</a>
    
    <?php include('includes/spectre-btn.php'); ?>  <!-- AJOUTER CETTE LIGNE -->
</nav>
```

---

### Étape 3 : Modifier footer.php

Ajoute la modale et le script juste avant `</body>` :

```php
    <?php include('includes/spectre-modal.php'); ?>
    <script src="/js/spectre-solitude.js"></script>
</body>
</html>
```

---

### Étape 4 : Retirer l'ancienne échelle

Dans `index.php`, supprime ou commente la section qui affiche l'échelle de solitude actuelle (celle qui prend trop de place sur la page d'accueil).

---

## Structure finale

```
/Soloplugs/
├── css/
│   ├── style.css
│   └── spectre-solitude.css      ✓
├── js/
│   └── spectre-solitude.js       ✓
├── includes/
│   ├── header.php                (modifié: ajout du bouton)
│   ├── footer.php                (modifié: ajout modale + script)
│   ├── spectre-btn.php           ✓
│   └── spectre-modal.php         ✓
└── index.php                     (modifié: retrait ancienne échelle)
```

---

## Fonctionnalités

### Bouton header
- Mini jauge colorée (48px)
- Curseur blanc qui reflète la dernière position choisie
- Tooltip "Où en suis-je ?" au survol

### Modale
- 12 niveaux du spectre
- 3 zones : Habitée (vert), En tension (orange), Souffrante (rouge)
- Feedback immédiat après sélection
- Message d'aide spécial pour niveaux 9-12
- Bouton "Explorer mon parcours" avec redirection intelligente
- Fermeture : clic extérieur, bouton ✕, touche Escape
- Position sauvegardée en localStorage

### Redirections du bouton "Explorer"
- Niveaux 1-4 (Habitée) → `/7_themes/activites-solo.php`
- Niveaux 5-8 (Tension) → `/7_themes/`
- Niveaux 9-12 (Souffrante) → `/ressources.php`

---

## Personnalisation

### Changer le tooltip du bouton

Dans `spectre-btn.php` :
```html
<span class="spectre-btn-tooltip">Ton nouveau texte</span>
```

### Changer les redirections

Dans `spectre-solitude.js`, section `exploreBtn` :
```javascript
if (level >= 9) {
    destination = '/ressources.php';
} else if (level >= 5) {
    destination = '/7_themes/';
} else {
    destination = '/7_themes/activites-solo.php';
}
```

### Modifier les textes des 12 niveaux

Dans `spectre-solitude.js`, objet `spectreData` au début du fichier.

---

## Dépannage

### Le bouton n'apparaît pas
- Vérifie que `spectre-solitude.css` est bien chargé
- Vérifie le chemin du include dans header.php

### La modale ne s'ouvre pas
- Vérifie que `spectre-solitude.js` est bien chargé
- Vérifie qu'il n'y a pas d'erreur JS dans la console (F12)

### Le style est cassé
- Vérifie que le CSS n'entre pas en conflit avec ton CSS existant
- Les classes sont préfixées avec `spectre-` pour éviter les conflits

---

## Test

1. Ouvre ton site en local
2. Clique sur la mini jauge dans le header
3. La modale doit s'ouvrir avec animation
4. Clique sur un point du spectre
5. Le résultat doit apparaître
6. Pour les niveaux 9-12, un message d'aide doit apparaître
7. Clique sur "Explorer mon parcours" → redirection
8. Recharge la page → le curseur du header doit être à la dernière position

---

*Document créé le 15 janvier 2026*
