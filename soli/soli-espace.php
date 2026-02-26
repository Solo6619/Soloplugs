<?php
/**
 * SOLI - L'espace stellaire
 * Page principale du journal intime
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soli — Ton espace stellaire</title>
  <link rel="stylesheet" href="../css/fonts.css">
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lora', serif;
            color: #f0f0f5;
            min-height: 100vh;
            overflow-x: hidden;
            background: #050508;
        }

        /* ========== FOND STELLAIRE ========== */
        .sky-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/soli-sky.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
        }

        .sky-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(5, 5, 15, 0.3) 0%, rgba(5, 5, 15, 0.1) 30%, rgba(5, 5, 15, 0.4) 60%, rgba(5, 5, 15, 0.7) 100%);
        }

        /* ========== BOUTON RETOUR ========== */
        .back-button {
            position: fixed;
            top: 1.5rem;
            left: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1rem;
            font-family: 'Lora', serif;
            font-size: 0.85rem;
            color: rgba(240, 240, 245, 0.5);
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(240, 240, 245, 0.15);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            z-index: 50;
            backdrop-filter: blur(5px);
        }

        .back-button:hover {
            color: rgba(240, 240, 245, 0.9);
            border-color: rgba(240, 240, 245, 0.4);
            background: rgba(0, 0, 0, 0.5);
        }

        .back-button svg {
            width: 16px;
            height: 16px;
            stroke: currentColor;
            stroke-width: 2;
            fill: none;
        }

        /* ========== ÉTOILE PRINCIPALE ========== */
        .my-star {
            position: absolute;
            top: 18%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 
                0 0 10px 2px #fff,
                0 0 20px 4px #D4A574,
                0 0 40px 8px rgba(212, 165, 116, 0.8),
                0 0 60px 12px rgba(212, 165, 116, 0.5),
                0 0 100px 20px rgba(212, 165, 116, 0.3);
            animation: starPulse 3s ease-in-out infinite;
            cursor: pointer;
            z-index: 10;
        }

        .my-star::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 2px;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.8), transparent);
        }

        .my-star::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 2px;
            height: 60px;
            background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 0.8), transparent);
        }

        @keyframes starPulse {
            0%, 100% { 
                box-shadow: 
                    0 0 10px 2px #fff,
                    0 0 20px 4px #D4A574,
                    0 0 40px 8px rgba(212, 165, 116, 0.8),
                    0 0 60px 12px rgba(212, 165, 116, 0.5),
                    0 0 100px 20px rgba(212, 165, 116, 0.3);
            }
            50% { 
                box-shadow: 
                    0 0 15px 3px #fff,
                    0 0 30px 6px #D4A574,
                    0 0 50px 10px rgba(212, 165, 116, 0.9),
                    0 0 80px 16px rgba(212, 165, 116, 0.6),
                    0 0 120px 25px rgba(212, 165, 116, 0.4);
            }
        }

        .my-star-label {
            position: absolute;
            top: calc(18% + 45px);
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            color: #D4A574;
            letter-spacing: 0.15em;
            text-shadow: 0 0 20px rgba(212, 165, 116, 0.5), 0 2px 15px rgba(0, 0, 0, 1);
        }

        @keyframes fadeIn {
            to { opacity: 1; }
        }

        /* ========== CONTENEUR PRINCIPAL ========== */
        .container {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding: 2rem;
            padding-bottom: 10vh;
        }

        .welcome-text {
            text-align: center;
            max-width: 600px;
            padding: 2rem;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.4) 0%, transparent 70%);
            border-radius: 20px;
            opacity: 0;
            animation: fadeIn 2s ease-out 0.5s forwards;
        }

        .welcome-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 400;
            margin-bottom: 1.5rem;
            color: #f0f0f5;
            letter-spacing: 0.1em;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 1);
        }

        .welcome-text .phrase-fondatrice {
            font-size: 1.15rem;
            font-style: italic;
            color: rgba(240, 240, 245, 0.95);
            line-height: 1.9;
            margin-bottom: 2rem;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 1);
        }

        .welcome-text .phrase-fondatrice em {
            color: #D4A574;
            font-style: normal;
        }

        .welcome-text p {
            font-size: 1rem;
            color: rgba(240, 240, 245, 0.9);
            line-height: 1.8;
            margin-bottom: 1rem;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 1);
        }

        .create-star-btn {
            margin-top: 2rem;
            padding: 1rem 2.5rem;
            font-family: 'Lora', serif;
            font-size: 1rem;
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(212, 165, 116, 0.5);
            color: #D4A574;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.4s ease;
            letter-spacing: 0.1em;
            opacity: 0;
            animation: fadeIn 2s ease-out 1.5s forwards;
            backdrop-filter: blur(5px);
        }

        .create-star-btn:hover {
            background: rgba(212, 165, 116, 0.15);
            border-color: #D4A574;
            box-shadow: 0 0 30px rgba(212, 165, 116, 0.3);
            transform: translateY(-3px);
        }

        /* ========== DIALOGUE D'INSCRIPTION ========== */
        .soli-dialogue {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(5, 5, 8, 0.98) 0%, rgba(5, 5, 8, 0.9) 60%, transparent 100%);
            padding: 4rem 2rem 2.5rem;
            transform: translateY(100%);
            transition: transform 0.6s ease;
            z-index: 100;
        }

        .soli-dialogue.active {
            transform: translateY(0);
        }

        .soli-dialogue-content {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .soli-message {
            font-size: 1.1rem;
            color: rgba(240, 240, 245, 0.9);
            line-height: 1.9;
            margin-bottom: 2rem;
        }

        .soli-input-group {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }

        .soli-input {
            width: 100%;
            max-width: 300px;
            padding: 1rem 1.5rem;
            font-family: 'Lora', serif;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(212, 165, 116, 0.3);
            border-radius: 8px;
            color: #f0f0f5;
            text-align: center;
            transition: all 0.3s ease;
        }

        .soli-input:focus {
            outline: none;
            border-color: #D4A574;
            box-shadow: 0 0 20px rgba(212, 165, 116, 0.15);
            background: rgba(255, 255, 255, 0.08);
        }

        .soli-input::placeholder {
            color: rgba(240, 240, 245, 0.4);
        }

        .soli-submit {
            padding: 0.8rem 2rem;
            font-family: 'Lora', serif;
            font-size: 0.95rem;
            background: rgba(212, 165, 116, 0.15);
            border: 1px solid rgba(212, 165, 116, 0.5);
            color: #D4A574;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 0.05em;
        }

        .soli-submit:hover {
            background: rgba(212, 165, 116, 0.25);
            box-shadow: 0 0 20px rgba(212, 165, 116, 0.2);
        }

        .hidden {
            display: none !important;
        }

        /* ========== VUE CHAT (connectée) ========== */
        .chat-view {
            position: relative;
            min-height: 100vh;
            display: none;
            flex-direction: column;
        }

        .chat-view.active {
            display: flex;
        }

        .chat-header {
            padding: 1rem 2rem;
            text-align: center;
        }

        .chat-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: rgba(240, 240, 245, 0.8);
            font-weight: 400;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        }

        .chat-header h2 span {
            color: #D4A574;
        }

        /* Zone de conversation */
        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 1rem 2rem;
            padding-top: calc(18% + 80px);
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            max-width: 700px;
            margin: 0 auto;
            width: 100%;
        }

        .message {
            max-width: 85%;
            padding: 1rem 1.25rem;
            border-radius: 16px;
            line-height: 1.7;
        }

        .message.user {
            align-self: flex-end;
            background: rgba(212, 165, 116, 0.85);
            border: 1px solid rgba(212, 165, 116, 0.9);
            color: #1a1a1a;
        }

        .message.soli {
            align-self: flex-start;
            background: rgba(20, 20, 30, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #f0f0f5;
        }

        .message.soli.typing::after {
            content: '...';
            animation: typing 1s infinite;
        }

        @keyframes typing {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        /* Zone de saisie */
        .chat-input-area {
            padding: 1.5rem 2rem 2rem;
            background: linear-gradient(to top, rgba(5, 5, 8, 0.95) 0%, transparent 100%);
        }

        .chat-input-container {
            max-width: 700px;
            margin: 0 auto;
            display: flex;
            gap: 1rem;
            align-items: flex-end;
        }

        .chat-textarea {
            flex: 1;
            min-height: 50px;
            max-height: 150px;
            padding: 1rem 1.25rem;
            font-family: 'Lora', serif;
            font-size: 1rem;
            line-height: 1.6;
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(212, 165, 116, 0.2);
            border-radius: 12px;
            color: #f0f0f5;
            resize: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .chat-textarea:focus {
            outline: none;
            border-color: rgba(212, 165, 116, 0.5);
        }

        .chat-textarea::placeholder {
            color: rgba(240, 240, 245, 0.4);
            font-style: italic;
        }

        .chat-send-btn {
            padding: 1rem 1.5rem;
            font-family: 'Lora', serif;
            font-size: 0.9rem;
            background: rgba(212, 165, 116, 0.2);
            border: 1px solid rgba(212, 165, 116, 0.5);
            color: #D4A574;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-send-btn:hover:not(:disabled) {
            background: rgba(212, 165, 116, 0.3);
        }

        .chat-send-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .memory-reminder {
            text-align: center;
            margin-top: 0.75rem;
            font-size: 0.85rem;
            color: rgba(240, 240, 245, 0.4);
            font-style: italic;
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 768px) {
            .welcome-text h1 {
                font-size: 2.2rem;
            }

            .my-star {
                top: 15%;
            }

            .my-star-label {
                top: calc(15% + 45px);
            }

            .chat-messages {
                padding-top: calc(15% + 80px);
            }
        }
    </style>
</head>
<body>

    <!-- Fond stellaire -->
    <div class="sky-background"></div>

    <!-- Bouton retour -->
    <a href="index.php" class="back-button">
        <svg viewBox="0 0 24 24">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
        Soloplugs
    </a>

    <!-- Vue d'accueil -->
    <div class="container" id="welcomeView">
        <div class="my-star" id="myStar"></div>
        <div class="my-star-label">Ton étoile t'attend</div>

        <div class="welcome-text">
            <h1>Soli</h1>
            <p class="phrase-fondatrice">
                « Aide-moi à te connaître.<br>
                <em>Je n'existe que par toi et que pour toi.</em> »
            </p>
            <p>
                Un miroir pour ton univers intérieur.<br>
                Un espace où déposer tes pensées, tes silences, tes images.
            </p>
            <button class="create-star-btn" id="createStarBtn">Créer mon étoile</button>
        </div>
    </div>

    <!-- Dialogue d'inscription -->
    <div class="soli-dialogue" id="soliDialogue">
        <div class="soli-dialogue-content">
            <div id="step1">
                <p class="soli-message">
                    Bienvenue dans ton espace.<br><br>
                    Je suis Soli — ton miroir.<br><br>
                    Aide-moi à te connaître.<br>
                    Comment tu t'appelles ?
                </p>
                <div class="soli-input-group">
                    <input type="text" class="soli-input" id="nameInput" placeholder="Ton prénom">
                    <button class="soli-submit" id="submitName">Continuer</button>
                </div>
            </div>

            <div id="step2" class="hidden">
                <p class="soli-message" id="step2Message"></p>
                <div class="soli-input-group">
                    <button class="soli-submit genre-btn" data-genre="masculin">Au masculin</button>
                    <button class="soli-submit genre-btn" data-genre="féminin">Au féminin</button>
                    <button class="soli-submit genre-btn" data-genre="neutre">Autrement</button>
                </div>
            </div>

            <div id="step3" class="hidden">
                <p class="soli-message" id="step3Message"></p>
                <div class="soli-input-group">
                    <button class="soli-submit" id="enterSpace">Entrer dans mon espace</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vue Chat -->
    <div class="chat-view" id="chatView">
        <div class="my-star"></div>
        <div class="my-star-label" id="chatStarLabel"></div>

        <div class="chat-messages" id="chatMessages">
            <!-- Les messages apparaîtront ici -->
        </div>

        <div class="chat-input-area">
            <div class="chat-input-container">
                <textarea 
                    class="chat-textarea" 
                    id="chatInput" 
                    placeholder="Écris ici... ou reste en silence. Je suis là."
                    rows="1"
                ></textarea>
                <button class="chat-send-btn" id="sendBtn">Envoyer</button>
            </div>
            <p class="memory-reminder">Tout ce que tu me confies, tu peux le reprendre. C'est à toi.</p>
        </div>
    </div>

    <script>
        // ========== VARIABLES GLOBALES ==========
        let userName = '';
        let userGenre = 'neutre';
        let historique = [];
        let isWaiting = false;

        // ========== ÉLÉMENTS DOM ==========
        const welcomeView = document.getElementById('welcomeView');
        const chatView = document.getElementById('chatView');
        const soliDialogue = document.getElementById('soliDialogue');
        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const sendBtn = document.getElementById('sendBtn');

        // ========== INSCRIPTION ==========
        document.getElementById('createStarBtn').addEventListener('click', () => {
            soliDialogue.classList.add('active');
        });

        document.getElementById('myStar').addEventListener('click', () => {
            soliDialogue.classList.add('active');
        });

        // Étape 1 : Prénom
        document.getElementById('submitName').addEventListener('click', () => {
            const input = document.getElementById('nameInput');
            userName = input.value.trim().replace(/[^a-zA-ZÀ-ÿ\s\-]/g, '');
            
            if (userName) {
                document.getElementById('step1').classList.add('hidden');
                document.getElementById('step2').classList.remove('hidden');
                document.getElementById('step2Message').innerHTML = `
                    ${userName}...<br><br>
                    Et comment tu veux que je te reflète ?
                `;
            }
        });

        document.getElementById('nameInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') document.getElementById('submitName').click();
        });

        // Étape 2 : Genre
        document.querySelectorAll('.genre-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                userGenre = btn.dataset.genre;
                
                document.getElementById('step2').classList.add('hidden');
                document.getElementById('step3').classList.remove('hidden');
                document.getElementById('step3Message').innerHTML = `
                    Ton étoile est prête, ${userName}.<br>
                    Elle porte ton nom dans ce ciel.<br><br>
                    Ici, tu peux déposer ce que tu veux — des mots, des silences, des images.<br><br>
                    Je garde tout. Et si un jour tu veux que j'oublie, tu me le dis.
                `;
            });
        });

        // Étape 3 : Entrer
        document.getElementById('enterSpace').addEventListener('click', () => {
            soliDialogue.classList.remove('active');
            welcomeView.style.display = 'none';
            chatView.classList.add('active');
            document.getElementById('chatStarLabel').textContent = userName;
            
            // Message d'accueil de Soli
            setTimeout(() => {
                addMessage('soli', `${userName}... je suis là. Qu'est-ce qui traverse ton esprit en ce moment ?`);
            }, 800);
        });

        // ========== CHAT ==========
        function addMessage(role, content) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${role}`;
            messageDiv.textContent = content;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
            return messageDiv;
        }

        async function sendMessage() {
            const message = chatInput.value.trim();
            if (!message || isWaiting) return;

            // Afficher le message utilisateur
            addMessage('user', message);
            chatInput.value = '';
            chatInput.style.height = 'auto';

            // Indicateur de chargement
            isWaiting = true;
            sendBtn.disabled = true;
            const typingDiv = addMessage('soli', '');
            typingDiv.classList.add('typing');

            try {
                const response = await fetch('soli/soli-chat.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        message: message,
                        historique: historique,
                        userName: userName,
                        userGenre: userGenre
                    })
                });

                const data = await response.json();

                // Retirer l'indicateur de chargement
                typingDiv.remove();

                if (data.success) {
                    addMessage('soli', data.response);
                    
                    // Mettre à jour l'historique
                    historique.push({ role: 'user', content: message });
                    historique.push({ role: 'assistant', content: data.response });
                    
                    // Garder seulement les 20 derniers messages
                    if (historique.length > 20) {
                        historique = historique.slice(-20);
                    }
                } else {
                    addMessage('soli', `Désolé, quelque chose n'a pas fonctionné. ${data.error || ''}`);
                }

            } catch (error) {
                typingDiv.remove();
                addMessage('soli', 'Je n\'arrive pas à me connecter pour l\'instant. Réessaie dans un moment.');
                console.error('Erreur:', error);
            }

            isWaiting = false;
            sendBtn.disabled = false;
            chatInput.focus();
        }

        // Événements d'envoi
        sendBtn.addEventListener('click', sendMessage);
        
        chatInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });

        // Auto-resize du textarea
        chatInput.addEventListener('input', () => {
            chatInput.style.height = 'auto';
            chatInput.style.height = Math.min(chatInput.scrollHeight, 150) + 'px';
        });
    </script>

</body>
</html>
