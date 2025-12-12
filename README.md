# 🌿 SOLOPLUGS — LA VOIX DE LA SOLITUDE

> *"Là où la rencontre ne se fait pas avec les autres, mais avec soi-même."*

---

## 🎯 À PROPOS

**Soloplugs** est une plateforme dédiée à la compréhension et à l'accompagnement de la solitude humaine. Elle distingue la **solitude choisie** (enrichissante) de **l'isolement subi** (douloureux), et propose des ressources adaptées à chaque situation.

### Les 3 piliers de l'écosystème

| Module | Rôle | Description |
|--------|------|-------------|
| **SOLO** | La Voix | Guide conversationnel, bibliothécaire des ressources |
| **SOLI** | L'Oreille | Journal intime intelligent, miroir émotionnel |
| **SOLOTECH** | Le Moteur | Intelligence documentaire, cohérence philosophique |

---

## 📂 STRUCTURE DU PROJET

```
Soloplugs_11/
│
├── 📄 Pages principales (PHP)
│   ├── index.php           # Page d'accueil
│   ├── solo.php            # Page Solo (guide)
│   ├── soli.php            # Page Soli (journal)
│   ├── magazine.php        # Magazine avec articles
│   ├── ressources.php      # Ressources et liens utiles
│   └── apropos.php         # À propos de Soloplugs
│
├── 📁 7_themes/            # Les 7 thématiques
│   ├── vivre-solo.php
│   ├── ado-solo.php
│   ├── parent-solo.php
│   ├── vieillir-solo.php
│   ├── voyages-solo.php
│   ├── sorties-loisirs-rencontres.php
│   └── divorces-separations-deces.php
│
├── 📁 components/          # Composants PHP réutilisables
│   ├── head.php            # Meta tags, CSS, fonts
│   ├── header.php          # Logo + menu + menu thèmes
│   ├── footer.php          # Pied de page
│   ├── scripts.php         # JavaScript
│   └── emergency-banner.php # Bandeau ressources d'urgence
│
├── 📁 css/                 # Feuilles de style
│   ├── global.css          # Styles communs (header, footer, etc.)
│   ├── magazine.css        # Styles du magazine
│   └── [theme]-enhanced.css # Styles par thème (7 fichiers)
│
├── 📁 docs/                # Documentation Solotech
│   ├── architecture/       # Architecture technique
│   ├── connaissances/      # Ontologie, statistiques
│   └── guides/             # Guides éditoriaux
│
├── 📁 solotech/            # Module Solotech
│   ├── docs/               # Documentation interne
│   └── src/                # Code source
│
├── 📁 images/              # Images et logos
├── 📁 donnees/             # Données (memory, logs)
└── 📁 config/              # Configuration
```

---

## 🚀 INSTALLATION

### Prérequis

- **WAMP** (Windows) ou **MAMP** (Mac) ou **LAMP** (Linux)
- PHP 7.4+ 
- Navigateur moderne (Chrome, Firefox, Edge)

### Installation locale

1. **Clone le repository**
   ```bash
   git clone https://github.com/Solo6619/Soloplugs.git
   ```

2. **Place le dossier dans ton serveur local**
   ```
   C:\wamp64\www\Soloplugs_11\
   ```

3. **Lance WAMP** et démarre les services

4. **Ouvre dans ton navigateur**
   ```
   http://localhost/Soloplugs_11/
   ```

---

## 🎨 LES 7 THÈMES

| Thème | Public cible | Couleur |
|-------|--------------|---------|
| **Vivre solo** | Personnes vivant seules | Or `#D4A574` |
| **Ado solo** | Adolescents | Violet `#9B59B6` |
| **Parent solo** | Parents célibataires | Vert `#6BA368` |
| **Vieillir solo** | Seniors | Or/Terre `#C9A26F` |
| **Voyages solo** | Voyageurs solitaires | Bleu `#3498DB` |
| **Sorties & loisirs** | Personnes cherchant activités | Magenta `#E91E63` |
| **Séparation & deuil** | Personnes en transition | Bleu-gris `#7BA5C1` |

---

## 🛠️ ARCHITECTURE PHP

### Variables de page

Chaque page PHP utilise ces variables :

```php
<?php
$pageTitle = "Titre de la page";
$pageDescription = "Description pour SEO";
$currentPage = "accueil"; // Pour menu actif
$basePath = "";           // "" pour racine, "../" pour sous-dossiers
$additionalCSS = ["style-specifique.css"];
?>
```

### Inclusion des composants

```php
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include 'components/head.php'; ?>
</head>
<body>
  <?php include 'components/header.php'; ?>
  
  <!-- Contenu de la page -->
  
  <?php include 'components/footer.php'; ?>
  <?php include 'components/scripts.php'; ?>
</body>
</html>
```

---

## 📱 FONCTIONNALITÉS

### ✅ Implémentées

- [x] Architecture PHP modulaire
- [x] 7 thèmes complets avec contenu
- [x] Menu déroulant des thèmes
- [x] Header responsive (réduction au scroll)
- [x] Design magazine littéraire
- [x] Bandeau ressources d'urgence
- [x] Back-to-top button
- [x] Animations au scroll

### 🔜 À venir

- [ ] Contenu complet pages Solo et Soli
- [ ] Système d'articles pour le magazine
- [ ] Intégration IA conversationnelle
- [ ] Multi-langue (FR/EN)
- [ ] Espace membre

---

## 🌐 DÉPLOIEMENT

### Hébergement recommandé

- **Hostpapa** (prévu)
- Tout hébergeur PHP (OVH, Infomaniak, etc.)

### Checklist déploiement

- [ ] Uploader tous les fichiers via FTP
- [ ] Vérifier les chemins `$basePath`
- [ ] Tester toutes les pages
- [ ] Configurer le domaine

---

## 📚 DOCUMENTATION SOLOTECH

La documentation complète se trouve dans `/docs/` :

- **Architecture** : Structure technique du projet
- **Ontologie** : Distinction solitude/isolement, concepts clés
- **Statistiques** : Données sur la solitude (France, Canada)
- **Guides** : Tonalités par thème, publics cibles

---

## 🤝 CONTRIBUTION

Ce projet est développé par **Solo** avec l'aide de **Claude (Anthropic)**.

Pour contribuer :
1. Fork le projet
2. Crée une branche (`git checkout -b feature/ma-feature`)
3. Commit (`git commit -m "Ajout de ma feature"`)
4. Push (`git push origin feature/ma-feature`)
5. Ouvre une Pull Request

---

## 📧 CONTACT

- **Site** : [soloplugs.com](https://soloplugs.com) *(à venir)*
- **GitHub** : [github.com/Solo6619/Soloplugs](https://github.com/Solo6619/Soloplugs)

---

## 📜 LICENCE

© 2025 Soloplugs — La voix de la solitude

*"Parce que bien vivre seul, c'est d'abord apprendre l'art de sa propre compagnie."*

---

## 📋 CHANGELOG

### v1.1 — 30 novembre 2025
- ✅ Migration HTML → PHP complète
- ✅ Composants réutilisables (head, header, footer, scripts)
- ✅ Menu déroulant des 7 thèmes
- ✅ Nouveau thème : Séparation & deuil
- ✅ Header scrolled fonctionnel
- ✅ Nettoyage fichiers obsolètes

### v1.0 — Novembre 2025
- 🚀 Lancement initial
- 📄 7 thèmes créés
- 🎨 Design magazine littéraire
