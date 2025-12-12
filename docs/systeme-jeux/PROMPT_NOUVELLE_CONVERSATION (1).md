# PROMPT POUR NOUVELLE CONVERSATION - AJOUT DE JEUX SOLOPLUGS

Bonjour Claude ! Je suis Solo, créateur de SOLOPLUGS Magazine.

## 🎯 CONTEXTE

J'ai un système de jeux intégré fonctionnel dans SOLOPLUGS et je veux **ajouter de nouveaux jeux**. Le système est déjà en place et fonctionne parfaitement.

---

## 🏗️ SYSTÈME EXISTANT

### Architecture technique
- **Stack** : WampServer, PHP/CSS/JS
- **Projet** : `C:\wamp64\www\Soloplugs\`
- **URL locale** : `http://localhost/Soloplugs/`

### Fichiers clés du système de jeux

#### 1. CSS universel (à ne PAS modifier)
```
Fichier : C:\wamp64\www\Soloplugs\css\jeux-soloplugs.css
Usage : CSS réutilisable pour TOUS les jeux
Statut : Fonctionnel ✅
```

#### 2. Template pour nouveaux jeux
```
Fichier : C:\wamp64\www\Soloplugs\articles\template-jeu-CORRECTED.php
Usage : À copier pour créer chaque nouveau jeu
Statut : Prêt à l'emploi ✅
```

#### 3. Exemple fonctionnel
```
Fichier : C:\wamp64\www\Soloplugs\articles\solitaire-klondike-FINAL.php
URL : http://localhost/Soloplugs/articles/solitaire-klondike-FINAL.php
Statut : En production, fonctionne parfaitement ✅
```

---

## 🎨 DESIGN SOLOPLUGS

### Palette de couleurs
- **Or principal** : #D4A574
- **Or foncé** : #C4956A
- **Crème clair** : #F5F1EB
- **Crème** : #FBF9F6
- **Texte** : #2C3338
- **Blanc** : #FFFFFF

### Polices
- **Titres** : Lora (serif)
- **Texte** : Inter (sans-serif)

### Ton éditorial
- Philosophique et contemplatif
- Valorise la solitude choisie
- Évite le ton médical ou prescriptif
- Focus sur l'autonomie et l'épanouissement

---

## 📋 STRUCTURE D'UN ARTICLE JEU

Chaque article de jeu contient :

1. **Badge** "🎮 Jeux en Solo" (doré)
2. **Titre** du jeu (or, Lora)
3. **Introduction** (1-2 phrases philosophiques)
4. **Stats** (durée, gratuit/payant, inscription)
5. **Iframe** du jeu (dans carte blanche avec ombre)
6. **Boutons** (plein écran, version mobile)
7. **Encadré** "💭 Pourquoi ce jeu ?" (2 paragraphes)
8. **Grille de bénéfices** (4-6 cartes avec emoji + titre + description)

---

## ⚠️ RÈGLE TECHNIQUE CRITIQUE

**TOUJOURS inclure cette ligne en début de fichier PHP :**

```php
<?php
$basePath = '../';  // ← OBLIGATOIRE pour que le CSS se charge !
$additionalCSS = ['articles.css', 'jeux-soloplugs.css'];
include '../components/head.php';
?>
```

**Sans `$basePath = '../';` le CSS ne se chargera pas !**

---

## 🎮 JEU QUE JE VEUX AJOUTER

**[À COMPLÉTER LORS DE LA CONVERSATION]**

Nom du jeu : _____________________
URL iframe : _____________________
Durée typique : _____________________
Type : Gratuit / Freemium / Payant
Inscription requise : Oui / Non / Optionnelle

---

## 💬 CE QUE J'ATTENDS DE TOI

1. **M'aider à créer le fichier PHP** pour le nouveau jeu
2. **Rédiger le contenu** dans le ton SOLOPLUGS (philosophique, bienveillant)
3. **Choisir les bénéfices pertinents** avec emojis appropriés
4. **Vérifier la structure** et la cohérence avec le système existant
5. **Tester que tout fonctionne** avant de finaliser

---

## 📚 DOCUMENTS DE RÉFÉRENCE

Si besoin, voici les documents créés lors du setup initial :
- `GUIDE_SYSTEME_JEUX.md` - Guide complet du système
- `CHECKLIST_INSTALLATION.md` - Checklist de vérification
- `PROBLEME_RESOLU.md` - Documentation du debugging CSS

---

## ✅ CONFIRMATION

Le système actuel fonctionne parfaitement. J'ai testé l'article Solitaire et tout s'affiche correctement :
- Badge doré ✅
- Couleurs SOLOPLUGS ✅
- Design responsive ✅
- Jeu intégré ✅

**Je suis prêt à ajouter un nouveau jeu !**

---

## 🎯 PROCESSUS ATTENDU

1. Je te donne les infos du jeu (nom, URL, type)
2. Tu crées le fichier PHP complet
3. Tu rédiges le contenu dans le ton SOLOPLUGS
4. Je teste localement
5. On ajuste si nécessaire
6. Finalisation !

---

**Commençons ! Quel jeu veux-tu que j'ajoute ?**
