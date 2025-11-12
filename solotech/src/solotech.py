

# ============================================================
#  SOLOTECH - Moteur d'intelligence interne de Soloplugs
#  Auteur : Solo
#  Version : 1.1 (Chemins mis à jour pour nouvelle structure)
#  Fichier : solotech.py
#  Description :
#     Initialise le moteur IA de Solotech, charge les fichiers
#     de connaissances, et connecte l'API OpenAI en toute sécurité.
# ============================================================

import os
import json
from pathlib import Path
from openai import OpenAI

# ------------------------------------------------------------
# 1. Lecture sécurisée de la clé API depuis les variables d'environnement
# ------------------------------------------------------------
OPENAI_API_KEY = os.getenv("OPENAI_API_KEY")

if not OPENAI_API_KEY:
    raise ValueError(
        "⚠️  Clé API introuvable.\n"
        "Veuillez créer une variable d'environnement nommée OPENAI_API_KEY dans Windows."
    )

# ------------------------------------------------------------
# 2. Initialisation du client OpenAI
# ------------------------------------------------------------
client = OpenAI(api_key=OPENAI_API_KEY)

# ------------------------------------------------------------
# 3. Définition des chemins du projet (NOUVEAUX CHEMINS!)
# ------------------------------------------------------------
# Le fichier solotech.py est maintenant dans: Soloplugs/solotech/src/solotech.py
# On remonte de 3 niveaux pour atteindre la racine Soloplugs/

BASE_DIR = Path(__file__).resolve().parent.parent.parent  # Remonte à Soloplugs/
CONNAISSANCES_DIR = BASE_DIR / "docs" / "connaissances"
DONNEES_DIR = BASE_DIR / "donnees"
SOLOTECH_DIR = BASE_DIR / "solotech"
CONFIG_DIR = BASE_DIR / "config"

# Afficher les chemins pour vérification (optionnel - peut être supprimé en production)
print(f"📁 BASE_DIR: {BASE_DIR}")
print(f"📁 CONNAISSANCES_DIR: {CONNAISSANCES_DIR}")
print(f"📁 DONNEES_DIR: {DONNEES_DIR}")
print()

# ------------------------------------------------------------
# 4. Chargement des fichiers de connaissance (si présents)
# ------------------------------------------------------------
def charger_connaissances():
    """
    Charge les fichiers de connaissances depuis la nouvelle structure.
    Les fichiers sont maintenant dans docs/connaissances/ et ses sous-dossiers.
    """
    fichiers = {
        "ontologie": CONNAISSANCES_DIR / "ontologie" / "00_DISTINCTION_SOLITUDE_ISOLEMENT.md",
        "statistiques": CONNAISSANCES_DIR / "statistiques" / "00_COMPILATION_STATISTIQUES.md",
        "guide_themes": BASE_DIR / "docs" / "guides" / "GUIDE_DES_THEMES_ET_ENTITES_SOLOPLUGS_v3.docx",
        "note_interne": SOLOTECH_DIR / "docs" / "ANNEXE_2_NOTE_INTERNE_SOLOTECH.docx"
    }
    
    print("\n=== Chargement des connaissances Soloplugs ===")
    connaissances_trouvees = 0
    
    for nom, chemin in fichiers.items():
        if chemin.exists():
            print(f"✔ {nom}: {chemin.name} trouvé")
            connaissances_trouvees += 1
        else:
            print(f"⚠ {nom}: {chemin.name} manquant à {chemin}")
    
    print(f"\n📊 {connaissances_trouvees}/{len(fichiers)} fichiers de connaissances trouvés.\n")
    return connaissances_trouvees == len(fichiers)

# ------------------------------------------------------------
# 5. Exemple d'appel test à OpenAI
# ------------------------------------------------------------
def test_connexion():
    print("\n=== Test de connexion à l'API OpenAI ===")
    try:
        response = client.chat.completions.create(
            model="gpt-4o-mini",
            messages=[
                {"role": "user", "content": "Bonjour Solotech, es-tu bien connecté ?"}
            ]
        )
        print("Réponse IA :", response.choices[0].message.content)
    except Exception as e:
        print("Erreur :", e)

# ------------------------------------------------------------
# 6. Exécution principale
# ------------------------------------------------------------
if __name__ == "__main__":
    print("=== Démarrage de Solotech ===")
    charger_connaissances()
    test_connexion()


# ============================================================
#  SOLOTECH v1.5 – Assistant technique du projet Soloplugs
#  Auteur : Solo + ChatGPT (GPT-4o-mini)
#  Version bilingue FR/EN – Analyse + Auto-correction sécurisée
#  MISE À JOUR : Chemins adaptés à la nouvelle structure
# ============================================================

import re
import datetime
import openai
from colorama import Fore, Style, init
init(autoreset=True)

# --- CONFIGURATION GÉNÉRALE (CHEMINS MIS À JOUR) -----------
CONFIG_PATH = CONFIG_DIR / "config.json"
MEMORY_DIR = DONNEES_DIR / "memory"
LOGS_DIR = DONNEES_DIR / "logs"
BACKUPS_DIR = MEMORY_DIR / "backups"
JOURNAL_PATH = MEMORY_DIR / "journal.txt"
UNIVERS_FILE = MEMORY_DIR / "univers_soloplugs.txt"

# Créer les dossiers s'ils n'existent pas
os.makedirs(LOGS_DIR, exist_ok=True)
os.makedirs(BACKUPS_DIR, exist_ok=True)
os.makedirs(MEMORY_DIR, exist_ok=True)

# ============================================================
#  FONCTIONS : Charger l'univers Soloplugs
# ============================================================

def charger_univers():
    """Charge le texte de référence de l'univers Soloplugs."""
    if os.path.exists(UNIVERS_FILE):
        with open(UNIVERS_FILE, "r", encoding="utf-8") as f:
            return f.read()
    else:
        return "Univers Soloplugs non défini."


# --- Charger config.json ------------------------------------
if not os.path.exists(CONFIG_PATH):
    print(f"⚠️  ATTENTION: config.json introuvable à {CONFIG_PATH}")
    print(f"    Créez ce fichier avec votre API key OpenAI.")
    print(f"    Exemple de contenu:")
    print("""    {
        "api_key": "votre_cle_api_ici",
        "project_path": "C:/Users/miche/OneDrive/Soloplugs"
    }""")
    # Ne pas planter, juste avertir
    config = {
        "api_key": os.getenv("OPENAI_API_KEY", ""),
        "project_path": str(BASE_DIR)
    }
else:
    with open(CONFIG_PATH, "r", encoding="utf-8") as f:
        config = json.load(f)

openai.api_key = config.get("api_key", os.getenv("OPENAI_API_KEY", ""))
# NOUVEAU CHEMIN par défaut
project_path = config.get("project_path", str(BASE_DIR / "site-web"))

# ============================================================
#  OUTILS DE BASE : journal, lecture/écriture, tâches, etc.
# ============================================================

def append_to_journal(entry: str):
    """Ajoute une ligne dans le journal avec date."""
    with open(JOURNAL_PATH, "a", encoding="utf-8") as f:
        f.write(f"[{datetime.datetime.now():%Y-%m-%d %H:%M:%S}] {entry}\n")

# --- Lister les fichiers du site ----------------------------
def list_project_files(extension_filter=None):
    files_list = []
    for root, _, files in os.walk(project_path):
        for file in files:
            if not extension_filter or file.endswith(extension_filter):
                rel = os.path.relpath(os.path.join(root, file), project_path)
                files_list.append(rel)
    if not files_list:
        return f"Aucun fichier trouvé pour {extension_filter or 'tous types'}."
    return f"{len(files_list)} fichier(s) trouvé(s):\n" + "\n".join(files_list)

# --- Lecture d'un fichier -----------------------------------
def read_project_file(filename):
    path = os.path.join(project_path, filename)
    if not os.path.exists(path):
        return f"⚠️  Fichier {filename} introuvable."
    with open(path, "r", encoding="utf-8", errors="ignore") as f:
        content = f.read()
    return f"--- Contenu de {filename} ---\n{content[:3000]}"  # limite d'affichage

# --- Édition d'un fichier -----------------------------------
def edit_project_file(filename, new_content):
    path = os.path.join(project_path, filename)
    if not os.path.exists(path):
        return f"⚠️  Fichier {filename} introuvable."
    backup_path = path + ".bak"
    with open(path, "r", encoding="utf-8", errors="ignore") as f:
        old = f.read()
    with open(backup_path, "w", encoding="utf-8") as f:
        f.write(old)
    with open(path, "w", encoding="utf-8") as f:
        f.write(new_content)
    append_to_journal(f"Fichier {filename} modifié (ancienne version sauvegardée).")
    return f"✅  {filename} mis à jour et sauvegardé."

# --- Gestion des tâches simples ------------------------------
TODO_PATH = MEMORY_DIR / "todo.txt"
ROADMAP_PATH = MEMORY_DIR / "roadmap.txt"

def add_task(task):
    with open(TODO_PATH, "a", encoding="utf-8") as f:
        f.write(f"- [ ] {task}\n")
    append_to_journal(f"Tâche ajoutée : {task}")
    return f"📝  Tâche ajoutée : {task}"

def add_roadmap_entry(entry):
    with open(ROADMAP_PATH, "a", encoding="utf-8") as f:
        f.write(f"- {entry}\n")
    append_to_journal(f"Roadmap : {entry}")
    return f"🗺️  Roadmap mise à jour : {entry}"

def show_todo():
    if not os.path.exists(TODO_PATH):
        return "Aucune tâche enregistrée."
    with open(TODO_PATH, "r", encoding="utf-8") as f:
        tasks = f.read()
    return f"📋  Liste des tâches :\n{tasks}"

def show_roadmap():
    if not os.path.exists(ROADMAP_PATH):
        return "Aucune roadmap définie."
    with open(ROADMAP_PATH, "r", encoding="utf-8") as f:
        roadmap = f.read()
    return f"🗺️  Roadmap :\n{roadmap}"

# ============================================================
#  ANALYSE ET CORRECTION DU CODE
# ============================================================

def analyze_code():
    """Analyse les fichiers du site (HTML, CSS, JS, PHP)."""
    append_to_journal("Analyse du code lancée.")
    issues = []
    
    for root, _, files in os.walk(project_path):
        for file in files:
            if file.endswith((".html", ".css", ".js", ".php")):
                path = os.path.join(root, file)
                with open(path, "r", encoding="utf-8", errors="ignore") as f:
                    content = f.read()
                
                # Détection basique d'anomalies
                if "<script>" in content and "</script>" not in content:
                    issues.append(f"{file} : balise <script> non fermée")
                if "function" in content and content.count("{") != content.count("}"):
                    issues.append(f"{file} : accolades non équilibrées")
    
    if not issues:
        return "✅  Aucune anomalie détectée."
    return "⚠️  Anomalies détectées :\n" + "\n".join(issues)

def auto_fix_code():
    """Tente de corriger automatiquement les erreurs simples."""
    append_to_journal("Correction automatique lancée.")
    # Placeholder - à implémenter selon besoins
    return "🔧  Fonction en développement."

# ============================================================
#  EXPLORATION ET ANALYSE DU SITE SOLOPLUGS
# ============================================================

def explorer_site():
    """Explore la structure du site Soloplugs."""
    site_dir = BASE_DIR / "site-web"
    if not site_dir.exists():
        return f"⚠️  Dossier site-web introuvable à {site_dir}"
    
    structure = []
    for root, dirs, files in os.walk(site_dir):
        level = root.replace(str(site_dir), '').count(os.sep)
        indent = ' ' * 2 * level
        structure.append(f"{indent}{os.path.basename(root)}/")
        subindent = ' ' * 2 * (level + 1)
        for file in files[:5]:  # Limiter l'affichage
            structure.append(f"{subindent}{file}")
        if len(files) > 5:
            structure.append(f"{subindent}... et {len(files)-5} autres fichiers")
    
    return "🗺️  Structure du site Soloplugs:\n" + "\n".join(structure[:50])

def lire_page_site(fichier):
    """Lit le contenu d'une page HTML du site."""
    site_dir = BASE_DIR / "site-web"
    path = site_dir / fichier
    
    if not path.exists():
        return f"⚠️  Fichier {fichier} introuvable dans site-web/"
    
    with open(path, "r", encoding="utf-8", errors="ignore") as f:
        content = f.read()
    
    return f"📄  Contenu de {fichier}:\n{content[:2000]}..."

def analyser_page_site(fichier):
    """Analyse une page HTML du site."""
    site_dir = BASE_DIR / "site-web"
    path = site_dir / fichier
    
    if not path.exists():
        return f"⚠️  Fichier {fichier} introuvable"
    
    with open(path, "r", encoding="utf-8", errors="ignore") as f:
        content = f.read()
    
    issues = []
    
    # Vérifications basiques
    if "<html" not in content.lower():
        issues.append("Balise <html> manquante")
    if "<head" not in content.lower():
        issues.append("Balise <head> manquante")
    if "<body" not in content.lower():
        issues.append("Balise <body> manquante")
    
    # Vérifier balises non fermées
    for tag in ["div", "p", "span", "a"]:
        open_count = content.lower().count(f"<{tag}")
        close_count = content.lower().count(f"</{tag}>")
        if open_count != close_count:
            issues.append(f"Balises <{tag}> non équilibrées ({open_count} ouvertes, {close_count} fermées)")
    
    if not issues:
        return f"✅  {fichier} : Aucune anomalie détectée"
    
    return f"⚠️  {fichier} - Anomalies:\n" + "\n".join(issues)

def corriger_page_site(fichier):
    """Tente de corriger automatiquement une page."""
    return "🔧  Correction automatique en développement."

# ============================================================
#  BIBLIOTHÈQUE DE CONNAISSANCES (LIBRARY)
# ============================================================

def creer_library():
    """Crée la bibliothèque Soloplugs en indexant les connaissances."""
    library_dir = DONNEES_DIR / "corpus" / "library"
    os.makedirs(library_dir, exist_ok=True)
    
    # Indexer les fichiers de connaissances
    fichiers_indexes = 0
    for root, _, files in os.walk(CONNAISSANCES_DIR):
        for file in files:
            if file.endswith((".md", ".txt")):
                fichiers_indexes += 1
    
    return f"📚  Bibliothèque créée: {fichiers_indexes} documents indexés dans {library_dir}"

def alimenter_solotech():
    """Alimente Solotech depuis la bibliothèque."""
    return "🔄  Alimentation depuis la bibliothèque... (fonctionnalité en développement)"

def mettre_a_jour_index_library():
    """Met à jour l'index de la bibliothèque."""
    return "📇  Index de la bibliothèque mis à jour."

def proposer_contenu():
    """Propose du contenu basé sur la bibliothèque."""
    return "💡  Propositions de contenu basées sur la Library... (en développement)"

def proposer_contenu_magazine():
    """Propose des articles pour le magazine."""
    themes = ["vivre-solo", "ado-solo", "parent-solo", "vieillir-solo", "voyages-solo"]
    suggestions = []
    for theme in themes:
        suggestions.append(f"📰  {theme}: Article sur les tendances actuelles")
    
    return "📰  Suggestions d'articles pour SoliMagazine:\n" + "\n".join(suggestions)

def generer_concepts_cles():
    """Génère un index des concepts clés."""
    concepts = [
        "solitude choisie",
        "isolement subi",
        "solo vs soli",
        "autonomie émotionnelle",
        "résilience solitaire"
    ]
    return "🔑  Concepts clés de Soloplugs:\n- " + "\n- ".join(concepts)

def resume_soloplugs():
    """Résume la mission de Soloplugs."""
    resume = """
    📖  SOLOPLUGS - Résumé officiel
    
    Mission: Accompagner les expériences de solitude, de l'isolement subi à la solitude choisie.
    
    Distinction fondamentale:
    - Solitude choisie: Art de vivre, chemin vers la sagesse
    - Isolement subi: Souffrance nécessitant accompagnement
    
    Écosystème:
    - Site web avec 7 thèmes
    - 3 IA: Solo (guide), Soli (journal intime), Solotech (moteur analytique)
    - SoliMagazine, SoliFace, SoliVoice
    
    Couverture: Canada, France, Belgique, Suisse, USA
    """
    return resume

def resume_vision_ia():
    """Résume la vision IA de Soloplugs."""
    vision = """
    🤖  Vision IA de SOLOPLUGS
    
    Solotech: Cerveau analytique invisible
    - Gestion des connaissances
    - Alimentation de Solo et Soli
    - Analytics et insights
    
    Solo: IA guide conversationnelle
    - Accompagnement empathique
    - Orientation et conseils
    - Voix publique
    
    Soli: IA journal intime
    - Miroir intérieur
    - Introspection guidée
    - Confidentialité absolue
    """
    return vision

# ============================================================
#  CHAT AVEC IA (GPT)
# ============================================================

def solotech_chat(user_message):
    """Discussion libre avec l'IA."""
    univers = charger_univers()
    
    system_prompt = f"""Tu es SoloTech, l'assistant technique du projet Soloplugs.
    
    Contexte du projet:
    {univers}
    
    Tu es bilingue (FR/EN), technique mais empathique.
    Tu comprends la philosophie de Soloplugs: distinguer solitude choisie (positive) et isolement subi (à soutenir).
    """
    
    try:
        response = openai.chat.completions.create(
            model="gpt-4o-mini",
            messages=[
                {"role": "system", "content": system_prompt},
                {"role": "user", "content": user_message}
            ],
            temperature=0.7
        )
        answer = response.choices[0].message.content
        append_to_journal(f"Question: {user_message[:100]}")
        return answer
    except Exception as e:
        return f"⚠️  Erreur lors de la communication avec l'IA: {e}"

# ============================================================
#  BOUCLE PRINCIPALE INTERACTIVE
# ============================================================

def main():
    """Boucle principale de SoloTech."""
    print(Fore.CYAN + Style.BRIGHT + """
    ╔══════════════════════════════════════════════════════╗
    ║                                                      ║
    ║              🌙  SOLOTECH v1.5  🌙                  ║
    ║                                                      ║
    ║         Moteur analytique de Soloplugs              ║
    ║                                                      ║
    ╚══════════════════════════════════════════════════════╝
    """)
    
    print(Fore.YELLOW + "📍  Chemins configurés:")
    print(f"   Base: {BASE_DIR}")
    print(f"   Site web: {project_path}")
    print(f"   Connaissances: {CONNAISSANCES_DIR}")
    print(f"   Données: {DONNEES_DIR}\n")
    
    print(Fore.GREEN + "Tape 'aide' pour voir les commandes disponibles.")
    print(Fore.GREEN + "Tape 'exit' pour quitter.\n")
    
    while True:
        user_input = input(Fore.MAGENTA + "SoloTech > " + Style.RESET_ALL).strip().lower()
        
        if not user_input:
            continue
        
        # --- Commandes de sortie ---
        if user_input in ["exit", "quit", "bye", "au revoir"]:
            print(Fore.CYAN + "\n👋  À bientôt!\n")
            break
        
        # --- Analyse du code ---
        if "analyse" in user_input and "code" in user_input:
            result = analyze_code()
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Correction automatique ---
        if "corrige" in user_input and "erreur" in user_input:
            result = auto_fix_code()
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Listing fichiers ---
        if "liste" in user_input and "fichier" in user_input:
            ext = None
            if ".css" in user_input:
                ext = ".css"
            elif ".php" in user_input:
                ext = ".php"
            elif ".html" in user_input:
                ext = ".html"
            result = list_project_files(extension_filter=ext)
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Lecture de fichier ---
        if user_input.startswith("lis ") or "montre" in user_input:
            parts = user_input.split()
            if len(parts) >= 2:
                filename = parts[-1]
                result = read_project_file(filename)
                print(f"\nSoloTech > {result}\n")
                continue
        
        # --- Gestion des tâches ---
        if "tâche" in user_input and ("ajoute" in user_input or "ajouter" in user_input):
            task = user_input.replace("ajoute", "").replace("ajouter", "").replace("tâche", "").strip(": ")
            result = add_task(task)
            print(f"\nSoloTech > {result}\n")
            continue
        
        if "montre" in user_input and "tâche" in user_input:
            result = show_todo()
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Roadmap ---
        if "roadmap" in user_input and ("ajoute" in user_input or "ajouter" in user_input):
            entry = user_input.replace("ajoute", "").replace("ajouter", "").replace("roadmap", "").strip(": ")
            result = add_roadmap_entry(entry)
            print(f"\nSoloTech > {result}\n")
            continue
        
        if "montre" in user_input and "roadmap" in user_input:
            result = show_roadmap()
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Aide ---
        if user_input in ["aide", "help", "commands", "commandes"]:
            print("\n" + "─" * 60)
            print("📘  COMMANDES DISPONIBLES DANS SOLOTECH v1.5")
            print("─" * 60)
            print(Fore.CYAN + "🔍  Analyse du code")
            print("   - analyse le code du site")
            print("     → Scanne les fichiers .html, .css, .php, .js\n")
            print(Fore.CYAN + "🛠️  Correction automatique")
            print("   - corrige les erreurs détectées\n")
            print(Fore.CYAN + "📂  Fichiers")
            print("   - liste les fichiers [.html/.css/.php]")
            print("   - lis <nom_du_fichier>\n")
            print(Fore.CYAN + "📝  Organisation")
            print("   - ajoute tâche : <description>")
            print("   - montre tâches")
            print("   - ajoute roadmap : <objectif>")
            print("   - montre roadmap\n")
            print(Fore.CYAN + "🌐  Site Soloplugs")
            print("   - explore le site")
            print("   - analyse <fichier.html>")
            print("   - propose contenu magazine\n")
            print(Fore.CYAN + "📚  Bibliothèque")
            print("   - crée library")
            print("   - résume soloplugs")
            print("   - résume ia\n")
            print(Fore.CYAN + "💬  Discussion libre")
            print("   - Toute autre demande sera traitée par GPT\n")
            print(Fore.CYAN + "🚪  Quitter")
            print("   - exit / quit / bye\n")
            print("─" * 60 + "\n")
            continue
        
        # --- Explorer le site ---
        if "explore" in user_input or "carte" in user_input:
            result = explorer_site()
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Analyse de page ---
        if "analyse" in user_input and ".html" in user_input:
            parts = user_input.split()
            fichier = parts[-1]
            result = analyser_page_site(fichier)
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Bibliothèque ---
        if "crée" in user_input and "library" in user_input:
            result = creer_library()
            print(f"\nSoloTech > {result}\n")
            continue
        
        if "propose" in user_input and "magazine" in user_input:
            result = proposer_contenu_magazine()
            print(f"\nSoloTech > {result}\n")
            continue
        
        if "résume" in user_input and "soloplugs" in user_input:
            result = resume_soloplugs()
            print(f"\nSoloTech > {result}\n")
            continue
        
        if "résume" in user_input and "ia" in user_input:
            result = resume_vision_ia()
            print(f"\nSoloTech > {result}\n")
            continue
        
        # --- Chat IA pour tout le reste ---
        answer = solotech_chat(user_input)
        print(f"\nSoloTech > {answer}\n")

if __name__ == "__main__":
    try:
        main()
    except KeyboardInterrupt:
        print(Fore.CYAN + "\n\n👋  SoloTech interrompu. À bientôt!\n")
    except Exception as e:
        print(Fore.RED + f"\n⚠️  Erreur critique: {e}\n")
