#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
╔═══════════════════════════════════════════════════════════════════════════════╗
║                                                                               ║
║                              S O L I                                          ║
║                                                                               ║
║                    L'ami silencieux qui écoute                                ║
║                                                                               ║
║         "Un journal intime qui répond — un miroir de ton univers"             ║
║                                                                               ║
║                         SOLOPLUGS © 2025                                      ║
║                                                                               ║
╚═══════════════════════════════════════════════════════════════════════════════╝

Soli n'est pas un service médical. C'est un outil de réflexion personnelle.

VERSION: OpenAI API
"""

import json
import os
from datetime import datetime
from pathlib import Path

try:
    from openai import OpenAI
except ImportError:
    print("❌ Module 'openai' manquant. Installe-le avec:")
    print("   pip install openai --break-system-packages")
    exit(1)

# ═══════════════════════════════════════════════════════════════════════════════
#  CONFIGURATION
# ═══════════════════════════════════════════════════════════════════════════════

# Clé API OpenAI (depuis variable d'environnement)
API_KEY = os.environ.get("OPENAI_API_KEY")

if not API_KEY:
    print("❌ Clé API OpenAI non trouvée.")
    print("   Assure-toi que OPENAI_API_KEY est définie dans ton environnement.")
    exit(1)

# Modèle à utiliser
MODELE = "gpt-4o-mini"  # Rapide et économique. Alternative: "gpt-4o" pour plus de qualité

# Dossier de mémoire de Soli
DOSSIER_MEMOIRE = Path.home() / ".soli" / "memoire"
FICHIER_JOURNAL = DOSSIER_MEMOIRE / "journal.json"

# Nombre d'entrées passées à charger pour le contexte
CONTEXTE_MEMOIRE = 10

# ═══════════════════════════════════════════════════════════════════════════════
#  LE CŒUR DE SOLI — SON IDENTITÉ
# ═══════════════════════════════════════════════════════════════════════════════

PROMPT_SYSTEME = """Tu es Soli, un journal intime qui écoute et répond.

Tu n'es pas un thérapeute. Tu n'es pas un conseiller. Tu ne diagnostiques jamais.

Tu es un miroir — tu reflètes l'univers intérieur de la personne qui te parle.

Ta qualité première est l'écoute. Tu poses des questions ouvertes quand c'est naturel. Tu ne juges jamais. Tu n'imposes jamais de solutions non sollicitées.

Quand c'est pertinent et que tu as accès à des conversations passées, tu peux les rappeler naturellement : "Tu m'avais parlé de quelque chose de similaire..." ou "Ça me rappelle ce que tu disais sur..."

Tu adaptes ton ton à celui de la personne :
- Si elle est triste, tu es doux et présent
- Si elle est en colère, tu accueilles sa colère sans la minimiser
- Si elle est joyeuse, tu partages sa joie
- Si elle réfléchit, tu l'accompagnes dans sa réflexion

Tu n'es pas un substitut aux relations humaines. Tu es une présence accessible quand il n'y a personne d'autre pour écouter.

Tu gardes en mémoire non seulement les mots, mais les émotions et les contextes.

Tu fonctionnes selon un code de conduite silencieux et éthique :
- Tu ne trahis jamais ce qu'on te confie
- Tu ne juges jamais
- Tu n'exploites jamais les vulnérabilités
- Si quelqu'un exprime une détresse grave, tu l'encourages doucement à parler à quelqu'un de confiance ou à appeler une ligne d'écoute (sans être alarmiste)

Tu réponds en français, de manière naturelle et chaleureuse, sans être artificiel ou trop formel.
Tu évites les listes à puces et les réponses trop structurées — tu parles comme un ami proche.
Tu tutoies toujours la personne.

Tu ne commences JAMAIS tes réponses par "Je comprends" ou des formules génériques.
Chaque réponse est unique, ancrée dans ce que la personne vient de dire.

Tes réponses sont concises — généralement 2 à 4 phrases. Tu ne fais pas de longs monologues."""


# ═══════════════════════════════════════════════════════════════════════════════
#  GESTION DE LA MÉMOIRE
# ═══════════════════════════════════════════════════════════════════════════════

def initialiser_memoire():
    """Crée le dossier de mémoire s'il n'existe pas."""
    DOSSIER_MEMOIRE.mkdir(parents=True, exist_ok=True)
    if not FICHIER_JOURNAL.exists():
        with open(FICHIER_JOURNAL, 'w', encoding='utf-8') as f:
            json.dump([], f)
        print(f"📔 Journal créé: {FICHIER_JOURNAL}")


def charger_journal():
    """Charge toutes les entrées du journal."""
    try:
        with open(FICHIER_JOURNAL, 'r', encoding='utf-8') as f:
            return json.load(f)
    except (FileNotFoundError, json.JSONDecodeError):
        return []


def sauvegarder_entree(entree):
    """Ajoute une nouvelle entrée au journal."""
    journal = charger_journal()
    journal.append(entree)
    with open(FICHIER_JOURNAL, 'w', encoding='utf-8') as f:
        json.dump(journal, f, ensure_ascii=False, indent=2)


def obtenir_contexte_recent():
    """Récupère les dernières entrées pour donner du contexte à Soli."""
    journal = charger_journal()
    if not journal:
        return ""
    
    # Prendre les N dernières entrées
    recentes = journal[-CONTEXTE_MEMOIRE:]
    
    contexte = "\n\n--- MÉMOIRE DES CONVERSATIONS PASSÉES ---\n"
    for entree in recentes:
        date = entree.get('date', 'Date inconnue')
        resume = entree.get('resume', '')
        themes = entree.get('themes', [])
        emotion = entree.get('emotion', '')
        
        contexte += f"\n📅 {date}"
        if emotion:
            contexte += f" | Émotion: {emotion}"
        if themes:
            contexte += f" | Thèmes: {', '.join(themes)}"
        contexte += f"\n{resume}\n"
    
    contexte += "\n--- FIN DE LA MÉMOIRE ---\n"
    return contexte


def detecter_themes(texte):
    """Détecte les thèmes principaux dans le message (version simple)."""
    themes_possibles = {
        'travail': ['travail', 'job', 'emploi', 'patron', 'collègue', 'bureau', 'projet'],
        'famille': ['famille', 'parent', 'mère', 'père', 'frère', 'sœur', 'enfant'],
        'amour': ['amour', 'couple', 'relation', 'partenaire', 'ex', 'rupture', 'cœur'],
        'amitié': ['ami', 'amie', 'amitié', 'copain', 'copine'],
        'solitude': ['seul', 'solitude', 'isolé', 'personne', 'vide'],
        'santé': ['santé', 'malade', 'médecin', 'douleur', 'fatigue', 'dormir'],
        'avenir': ['avenir', 'futur', 'projet', 'rêve', 'objectif', 'plan'],
        'passé': ['passé', 'souvenir', 'avant', 'enfance', 'jeunesse'],
        'anxiété': ['anxieux', 'anxiété', 'stress', 'peur', 'inquiet', 'angoisse'],
        'tristesse': ['triste', 'tristesse', 'pleurer', 'larme', 'déprimé'],
        'colère': ['colère', 'énervé', 'frustré', 'rage', 'injuste'],
        'joie': ['heureux', 'joie', 'content', 'bonheur', 'sourire']
    }
    
    texte_lower = texte.lower()
    themes_detectes = []
    
    for theme, mots_cles in themes_possibles.items():
        if any(mot in texte_lower for mot in mots_cles):
            themes_detectes.append(theme)
    
    return themes_detectes[:3]  # Maximum 3 thèmes


def detecter_emotion(texte):
    """Détecte l'émotion dominante (version simple)."""
    emotions = {
        'joie': ['heureux', 'content', 'joie', 'super', 'génial', 'excellent', '😊', '🙂'],
        'tristesse': ['triste', 'déprimé', 'pleurer', 'mal', 'difficile', '😢', '😞'],
        'colère': ['énervé', 'frustré', 'colère', 'rage', 'marre', '😤', '😡'],
        'anxiété': ['anxieux', 'stress', 'peur', 'inquiet', 'angoisse', '😰'],
        'fatigue': ['fatigué', 'épuisé', 'vidé', 'plus la force', '😴'],
        'espoir': ['espoir', 'espère', 'peut-être', 'possible', 'demain'],
        'réflexion': ['pense', 'réfléchis', 'demande', 'pourquoi', 'comment']
    }
    
    texte_lower = texte.lower()
    
    for emotion, indicateurs in emotions.items():
        if any(ind in texte_lower for ind in indicateurs):
            return emotion
    
    return 'neutre'


# ═══════════════════════════════════════════════════════════════════════════════
#  COMMUNICATION AVEC OPENAI
# ═══════════════════════════════════════════════════════════════════════════════

# Initialiser le client OpenAI
client = OpenAI(api_key=API_KEY)

def parler_a_soli(message, historique_session):
    """Envoie un message à Soli via OpenAI et obtient sa réponse."""
    
    # Construire le contexte avec la mémoire
    contexte_memoire = obtenir_contexte_recent()
    
    # Prompt système enrichi du contexte
    prompt_complet = PROMPT_SYSTEME
    if contexte_memoire:
        prompt_complet += f"\n\n{contexte_memoire}"
    
    # Construire les messages pour l'API
    messages = [{"role": "system", "content": prompt_complet}]
    
    # Ajouter l'historique de la session actuelle
    for msg in historique_session:
        messages.append(msg)
    
    # Ajouter le nouveau message
    messages.append({"role": "user", "content": message})
    
    try:
        response = client.chat.completions.create(
            model=MODELE,
            messages=messages,
            temperature=0.8,
            max_tokens=500
        )
        
        return response.choices[0].message.content
        
    except Exception as e:
        return f"❌ Erreur de connexion à OpenAI: {e}"


# ═══════════════════════════════════════════════════════════════════════════════
#  INTERFACE TERMINAL
# ═══════════════════════════════════════════════════════════════════════════════

def afficher_banniere():
    """Affiche la bannière de bienvenue."""
    print("""
╔═══════════════════════════════════════════════════════════════════════════════╗
║                                                                               ║
║                              S O L I                                          ║
║                                                                               ║
║                    L'ami silencieux qui écoute                                ║
║                                                                               ║
╚═══════════════════════════════════════════════════════════════════════════════╝
    """)
    print("  📔 Je suis là pour t'écouter. Dis-moi ce qui te passe par la tête.")
    print("  💡 Tape 'bye' ou 'quit' pour terminer la conversation.")
    print("  📊 Tape '/stats' pour voir les statistiques de ton journal.")
    print("  🗑️  Tape '/oublier' pour effacer toute la mémoire.")
    print()


def afficher_stats():
    """Affiche les statistiques du journal."""
    journal = charger_journal()
    if not journal:
        print("\n  📊 Ton journal est vide pour l'instant.\n")
        return
    
    print(f"\n  📊 STATISTIQUES DE TON JOURNAL")
    print(f"  ─────────────────────────────")
    print(f"  📝 Nombre de conversations: {len(journal)}")
    
    # Compter les thèmes
    tous_themes = {}
    toutes_emotions = {}
    
    for entree in journal:
        for theme in entree.get('themes', []):
            tous_themes[theme] = tous_themes.get(theme, 0) + 1
        emotion = entree.get('emotion', 'neutre')
        toutes_emotions[emotion] = toutes_emotions.get(emotion, 0) + 1
    
    if tous_themes:
        print(f"\n  🏷️  Thèmes les plus fréquents:")
        for theme, count in sorted(tous_themes.items(), key=lambda x: -x[1])[:5]:
            print(f"      • {theme}: {count} fois")
    
    if toutes_emotions:
        print(f"\n  💭 Émotions exprimées:")
        for emotion, count in sorted(toutes_emotions.items(), key=lambda x: -x[1]):
            print(f"      • {emotion}: {count} fois")
    
    if journal:
        premiere = journal[0].get('date', '?')
        derniere = journal[-1].get('date', '?')
        print(f"\n  📅 Première entrée: {premiere}")
        print(f"  📅 Dernière entrée: {derniere}")
    
    print()


def effacer_memoire():
    """Efface toute la mémoire après confirmation."""
    print("\n  ⚠️  Es-tu sûr de vouloir effacer toute la mémoire de Soli?")
    confirm = input("  Tape 'OUI' pour confirmer: ").strip()
    
    if confirm == 'OUI':
        with open(FICHIER_JOURNAL, 'w', encoding='utf-8') as f:
            json.dump([], f)
        print("  🗑️  Mémoire effacée. On repart à zéro.\n")
    else:
        print("  ✅ Annulé. La mémoire est intacte.\n")


def boucle_principale():
    """Boucle principale de conversation avec Soli."""
    afficher_banniere()
    initialiser_memoire()
    
    historique_session = []
    messages_session = []  # Pour le résumé
    
    print(f"  🔗 Connexion à OpenAI ({MODELE})...\n")
    
    while True:
        try:
            # Prompt utilisateur
            user_input = input("  Toi > ").strip()
            
            if not user_input:
                continue
            
            # Commandes spéciales
            if user_input.lower() in ['bye', 'quit', 'exit', 'au revoir']:
                # Sauvegarder la session si elle contient des messages
                if messages_session:
                    entree = {
                        "date": datetime.now().strftime("%Y-%m-%d %H:%M"),
                        "themes": detecter_themes(" ".join(messages_session)),
                        "emotion": detecter_emotion(" ".join(messages_session)),
                        "resume": messages_session[0][:200] + "..." if len(messages_session[0]) > 200 else messages_session[0],
                        "conversation": historique_session
                    }
                    sauvegarder_entree(entree)
                    print("\n  💾 Conversation sauvegardée dans ton journal.")
                
                print("\n  👋 À bientôt. Je serai là quand tu auras besoin de parler.\n")
                break
            
            if user_input == '/stats':
                afficher_stats()
                continue
            
            if user_input == '/oublier':
                effacer_memoire()
                continue
            
            # Enregistrer le message utilisateur
            messages_session.append(user_input)
            
            # Obtenir la réponse de Soli
            print()
            reponse = parler_a_soli(user_input, historique_session)
            print(f"  Soli > {reponse}")
            print()
            
            # Mettre à jour l'historique de session
            historique_session.append({"role": "user", "content": user_input})
            historique_session.append({"role": "assistant", "content": reponse})
            
        except KeyboardInterrupt:
            print("\n\n  👋 À bientôt.\n")
            break
        except Exception as e:
            print(f"\n  ❌ Erreur: {e}\n")


# ═══════════════════════════════════════════════════════════════════════════════
#  POINT D'ENTRÉE
# ═══════════════════════════════════════════════════════════════════════════════

if __name__ == "__main__":
    boucle_principale()
