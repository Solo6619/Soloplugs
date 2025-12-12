# ============================================================
#  SOLOTECH v2.1 - Moteur d'intelligence de Soloplugs
#  LA SOLITUDE EST LA VOIX SILENCIEUSE UNIVERSELLE
# ============================================================
#!/usr/bin/env python3
# --------------------------------------------------------
# Solotech v2.x – Version Locale (Ollama – Llama 3.1)
# --------------------------------------------------------

import os
import json
from ollama import Client

# --------------------------------------------------------
# CONFIGURATION
# --------------------------------------------------------

# Modèle à utiliser dans Ollama
MODEL_NAME = "llama3.1"

# Connexion au serveur Ollama
client = Client(host='http://localhost:11434')

# Dossiers internes de Soloplugs
BASE_DIR = "/mnt/c/wamp64/www/Soloplugs"
CONNAISSANCES_DIR = os.path.join(BASE_DIR, "docs", "connaissances")
DONNEES_DIR = os.path.join(BASE_DIR, "donnees")


# --------------------------------------------------------
# Chargement des fichiers de connaissances
# --------------------------------------------------------

def charger_fichiers_connaissances():
    connaissances = {}
    if not os.path.exists(CONNAISSANCES_DIR):
        print(f"[ERREUR] Dossier introuvable : {CONNAISSANCES_DIR}")
        return connaissances

    for filename in os.listdir(CONNAISSANCES_DIR):
        if filename.endswith(".txt") or filename.endswith(".md"):
            path = os.path.join(CONNAISSANCES_DIR, filename)
            with open(path, "r", encoding="utf-8") as f:
                connaissances[filename.replace(".txt", "").replace(".md", "")] = f.read()

    return connaissances


# --------------------------------------------------------
# Appel au modèle IA local (Ollama)
# --------------------------------------------------------

def generer_reponse(prompt, contexte=None):
    messages = []

    if contexte:
        messages.append({"role": "system", "content": contexte})

    messages.append({"role": "user", "content": prompt})

    try:
        response = client.chat(
            model=MODEL_NAME,
            messages=messages
        )

        return response["message"]["content"]

    except Exception as e:
        return f"[ERREUR IA] {e}"


# --------------------------------------------------------
# Interface en ligne de commande
# --------------------------------------------------------

def interface_shell(connaissances):
    print("\n🌙  SOLOTECH – Mode Local (Ollama)")
    print("-----------------------------------------------------")
    print("Tape 'exit' pour quitter.\n")

    contexte_systeme = (
        "Tu es Solotech, assistant technique du projet Soloplugs. "
        "Tu analyses du code PHP, HTML, CSS, JS, des architectures, des dossiers. "
        "Tu donnes des réponses techniques, claires, concises et fiables."
    )

    while True:
        try:
            user_input = input("SoloTech > ").strip()
        except (EOFError, KeyboardInterrupt):
            print("\nAu revoir ✨")
            break

        if user_input.lower() in ["exit", "quit"]:
            print("Fermeture de Solotech…")
            break

        # Contexte chargé depuis les fichiers internes
        contexte_txt = "\n\n".join(
            f"[{k}]\n{v}" for k, v in connaissances.items()
        )

        # On alimente l’IA avec le contexte + la question
        reponse = generer_reponse(
            prompt=user_input,
            contexte=contexte_systeme + "\n\n" + contexte_txt
        )

        print("\n" + reponse + "\n")


# --------------------------------------------------------
# Programme principal
# --------------------------------------------------------

if __name__ == "__main__":
    print("\n=== Démarrage Solotech – Version Locale (Ollama) ===\n")

    print("📂 Chemin du projet :", BASE_DIR)
    print("📂 Fichiers de connaissances :", CONNAISSANCES_DIR)

    print("\n=== Chargement des connaissances ===")
    connaissances = charger_fichiers_connaissances()

    if connaissances:
        for nom, contenu in connaissances.items():
            print(f"✓ {nom} : {len(contenu.splitlines())} lignes")
    else:
        print("⚠️ Aucun fichier de connaissances trouvé.")

    print("\n=== Solotech prêt ===")
    interface_shell(connaissances)
