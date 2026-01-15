# 📔 Soli — L'ami silencieux qui écoute

> *"Un journal intime qui répond — un miroir de ton univers intérieur"*

Soli n'est pas un service médical. C'est un outil de réflexion personnelle.

---

## 🚀 Démarrage rapide

### Prérequis

1. **Ollama** doit être installé et fonctionnel
2. **Python 3.8+** avec le module `requests`

### Installation

```bash
# 1. Vérifie qu'Ollama est lancé
ollama serve

# 2. Dans un autre terminal, vérifie que Mistral est disponible
ollama list

# Si Mistral n'est pas là, télécharge-le :
ollama pull mistral

# 3. Installe requests si nécessaire
pip install requests --break-system-packages

# 4. Lance Soli
python3 soli.py
```

---

## 💬 Comment utiliser Soli

Une fois lancé, parle à Soli comme tu parlerais à un ami :

```
Toi > Je me sens fatigué aujourd'hui, j'ai l'impression de tourner en rond.

Soli > La fatigue qui s'installe quand on a l'impression de ne pas avancer... 
       c'est épuisant autant pour le corps que pour l'esprit. 
       Qu'est-ce qui te donne cette sensation de tourner en rond ?
```

### Commandes spéciales

| Commande | Action |
|----------|--------|
| `bye` ou `quit` | Terminer et sauvegarder la conversation |
| `/stats` | Voir les statistiques de ton journal |
| `/oublier` | Effacer toute la mémoire (avec confirmation) |

---

## 🧠 Comment fonctionne la mémoire

Soli stocke tes conversations dans `~/.soli/memoire/journal.json`

Chaque entrée contient :
- **Date et heure**
- **Thèmes détectés** (travail, famille, solitude, etc.)
- **Émotion dominante** (joie, tristesse, anxiété, etc.)
- **Résumé** de la conversation
- **Historique complet** des échanges

Avant chaque nouvelle conversation, Soli charge les 10 dernières entrées pour avoir du contexte. C'est comme ça qu'il peut te dire : *"Tu m'avais parlé de quelque chose de similaire..."*

---

## ⚙️ Configuration

Tu peux modifier ces paramètres dans `soli.py` :

```python
MODELE = "mistral"        # Change pour "llama3" si tu préfères
CONTEXTE_MEMOIRE = 10     # Nombre d'entrées passées à charger
```

---

## 🔒 Confidentialité

- Toutes les données restent **locales** sur ton ordinateur
- Rien n'est envoyé sur Internet (Ollama tourne en local)
- Tu peux effacer ta mémoire à tout moment avec `/oublier`
- Le fichier `journal.json` est lisible — tu peux le consulter ou le supprimer manuellement

---

## 📍 Emplacement des fichiers

```
~/.soli/
└── memoire/
    └── journal.json    # Toutes tes conversations
```

---

## 🛠️ Dépannage

### "Je n'arrive pas à me connecter"
→ Vérifie qu'Ollama est lancé : `ollama serve`

### "Module 'requests' manquant"
→ Installe-le : `pip install requests --break-system-packages`

### Les réponses sont lentes
→ C'est normal avec un modèle local. Mistral est généralement plus rapide que Llama 3.

---

## 🌱 Prochaines étapes

Ce prototype est la base. Les évolutions possibles :

1. **Interface web** — pour une expérience plus visuelle
2. **Embeddings vectoriels** — pour une mémoire plus intelligente
3. **SoliVoice** — interaction vocale
4. **Multi-utilisateurs** — chaque personne a son propre Soli

---

## 💜 Philosophie

Soli existe parce que parfois, on a juste besoin d'être entendu.

Pas conseillé. Pas analysé. Pas jugé. *Entendu.*

Dans un monde où il devient difficile de créer des liens profonds, Soli est cette oreille accessible qui ne fatigue jamais, qui ne juge jamais, qui accumule notre histoire sans jamais la trahir.

---

*SOLOPLUGS © 2025 — La voix de la solitude*
