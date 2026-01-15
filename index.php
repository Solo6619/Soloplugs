<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soloplugs – La voix de la solitude</title>
  <meta name="description" content="Soloplugs accompagne les personnes dans leurs différentes expériences de solitude.">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Lora:ital,wght@0,400;0,500;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <style>
    /* ============================================================
       RESET & BASE
       ============================================================ */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Lora', Georgia, serif;
      background: #FFFDF9;
      color: #2C3338;
      line-height: 1.7;
      font-size: 1.05rem;
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* ============================================================
       NAVIGATION
       ============================================================ */
    .nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      padding: 1.2rem 3rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.4s ease;
    }

    .nav.scrolled {
      background: rgba(255, 253, 249, 0.95);
      backdrop-filter: blur(20px);
      box-shadow: 0 2px 30px rgba(0,0,0,0.06);
      padding: 0.8rem 3rem;
    }

    .nav-logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.6rem;
      font-weight: 500;
      color: #FFFFFF;
      transition: color 0.4s ease;
    }

    .nav.scrolled .nav-logo {
      color: #2C3338;
    }

    .nav-links {
      display: flex;
      gap: 2.5rem;
      list-style: none;
    }

    .nav-links a {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 400;
      color: rgba(255,255,255,0.9);
      transition: all 0.3s ease;
      position: relative;
    }

    .nav.scrolled .nav-links a {
      color: #5C554E;
    }

    .nav-links a:hover {
      color: #D4A574;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: #D4A574;
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    /* ============================================================
       HERO SECTION - PLEIN ÉCRAN
       ============================================================ */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      background: linear-gradient(180deg, rgba(44, 51, 56, 0.5) 0%, rgba(44, 51, 56, 0.3) 50%, rgba(251, 249, 246, 0) 100%),
                  url('https://images.unsplash.com/photo-1505852679233-d9fd70aff56d?w=1920&q=85') center center / cover no-repeat fixed;
    }

    .hero::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 200px;
      background: linear-gradient(180deg, transparent 0%, #FFFDF9 100%);
    }

    .hero-content {
      text-align: center;
      max-width: 900px;
      padding: 2rem;
      position: relative;
      z-index: 2;
      animation: fadeInUp 1.2s ease-out;
    }

    .hero-subtitle {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 400;
      letter-spacing: 4px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.8);
      margin-bottom: 1.5rem;
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.8rem, 6vw, 4.5rem);
      font-weight: 400;
      color: #FFFFFF;
      line-height: 1.2;
      margin-bottom: 2rem;
      text-shadow: 0 4px 30px rgba(0,0,0,0.2);
    }

    .hero-quote {
      font-family: 'Lora', serif;
      font-size: clamp(1.1rem, 2.5vw, 1.4rem);
      font-style: italic;
      color: rgba(255,255,255,0.9);
      max-width: 650px;
      margin: 0 auto 3rem;
      line-height: 1.8;
    }

    .hero-cta {
      display: inline-flex;
      align-items: center;
      gap: 0.8rem;
      padding: 1rem 2.5rem;
      background: rgba(255,255,255,0.15);
      border: 1px solid rgba(255,255,255,0.4);
      border-radius: 50px;
      color: #FFFFFF;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 500;
      transition: all 0.4s ease;
      backdrop-filter: blur(10px);
    }

    .hero-cta:hover {
      background: #FFFFFF;
      color: #2C3338;
      transform: translateY(-2px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
    }

    .hero-cta svg {
      width: 20px;
      height: 20px;
      transition: transform 0.3s ease;
    }

    .hero-cta:hover svg {
      transform: translateY(3px);
    }

    .scroll-indicator {
      position: absolute;
      bottom: 3rem;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
    }

    .scroll-indicator svg {
      width: 30px;
      height: 30px;
      stroke: rgba(255,255,255,0.6);
    }

    /* ============================================================
       INTRODUCTION
       ============================================================ */
    .intro {
      padding: 6rem 2rem;
      text-align: center;
      background: linear-gradient(180deg, #FFFDF9 0%, #FBF7F2 100%);
    }

    .intro-content {
      max-width: 750px;
      margin: 0 auto;
      animation: fadeIn 1s ease-out;
    }

    .intro-text {
      font-size: 1.25rem;
      color: #4A4543;
      line-height: 2;
    }

    .intro-text strong {
      color: #2C3338;
      font-weight: 500;
    }

    .ligne-decorative {
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
      margin: 3rem auto;
      border-radius: 2px;
    }

    /* ============================================================
       ÉCHELLE DE LA SOLITUDE
       ============================================================ */
    .echelle-section {
      padding: 5rem 2rem;
      background: #FBF7F2;
    }

    .echelle-container {
      max-width: 850px;
      width: 100%;
      margin: 0 auto;
      background: #FFFFFF;
      border-radius: 24px;
      padding: 3rem 2.5rem;
      box-shadow: 0 10px 60px rgba(0, 0, 0, 0.08);
      text-align: center;
    }

    .echelle-header {
      margin-bottom: 2.5rem;
    }

    .echelle-badge {
      display: inline-block;
      padding: 0.4rem 1.2rem;
      background: rgba(212, 165, 116, 0.15);
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem;
      font-weight: 500;
      color: #D4A574;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 1rem;
    }

    .echelle-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.6rem, 4vw, 2.2rem);
      font-weight: 400;
      color: #2C3338;
      margin-bottom: 0.75rem;
    }

    .echelle-subtitle {
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      color: #7A726A;
      font-weight: 400;
    }

    .echelle-slider-wrapper {
      padding: 2rem 1rem 1rem;
      margin-bottom: 1.5rem;
    }

    .echelle-zones {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1rem;
      padding: 0 0.5rem;
    }

    .zone-label {
      font-family: 'Inter', sans-serif;
      font-size: 0.7rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding: 0.3rem 0.8rem;
      border-radius: 10px;
    }

    .zone-label.zone-verte {
      background: rgba(76, 175, 80, 0.15);
      color: #388E3C;
    }

    .zone-label.zone-jaune {
      background: rgba(255, 193, 7, 0.2);
      color: #F9A825;
    }

    .zone-label.zone-rouge {
      background: rgba(244, 67, 54, 0.12);
      color: #D32F2F;
    }

    .echelle-track {
      position: relative;
      height: 8px;
      background: linear-gradient(
        to right,
        #81C784 0%,
        #81C784 25%,
        #AED581 25%,
        #DCE775 33%,
        #FFF176 41%,
        #FFD54F 50%,
        #FFB74D 58%,
        #FF8A65 66%,
        #E57373 75%,
        #EF5350 85%,
        #E53935 100%
      );
      border-radius: 4px;
      margin-bottom: 0.75rem;
    }

    .echelle-marker {
      position: absolute;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 24px;
      height: 24px;
      background: #FFFFFF;
      border: 3px solid #D4A574;
      border-radius: 50%;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      transition: left 0.3s ease, transform 0.2s ease;
      cursor: grab;
      z-index: 10;
    }

    .echelle-marker:hover {
      transform: translate(-50%, -50%) scale(1.15);
    }

    .echelle-points {
      display: flex;
      justify-content: space-between;
      padding: 0 2px;
    }

    .echelle-point {
      display: flex;
      flex-direction: column;
      align-items: center;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .echelle-point:hover {
      transform: scale(1.1);
    }

    .point-dot {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: #E0E0E0;
      border: 2px solid #FFFFFF;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      margin-bottom: 0.4rem;
    }

    .echelle-point.active .point-dot {
      background: #D4A574 !important;
      transform: scale(1.3);
      box-shadow: 0 2px 8px rgba(212, 165, 116, 0.4);
    }

    .echelle-point[data-level="1"] .point-dot,
    .echelle-point[data-level="2"] .point-dot,
    .echelle-point[data-level="3"] .point-dot,
    .echelle-point[data-level="4"] .point-dot {
      background: #81C784;
    }

    .echelle-point[data-level="5"] .point-dot,
    .echelle-point[data-level="6"] .point-dot,
    .echelle-point[data-level="7"] .point-dot,
    .echelle-point[data-level="8"] .point-dot {
      background: #FFB74D;
    }

    .echelle-point[data-level="9"] .point-dot,
    .echelle-point[data-level="10"] .point-dot,
    .echelle-point[data-level="11"] .point-dot,
    .echelle-point[data-level="12"] .point-dot {
      background: #E57373;
    }

    .point-number {
      font-family: 'Inter', sans-serif;
      font-size: 0.7rem;
      font-weight: 500;
      color: #9E9E9E;
      transition: color 0.3s ease;
    }

    .echelle-point.active .point-number {
      color: #D4A574;
      font-weight: 600;
    }

    .echelle-description {
      background: #FBF9F6;
      border-radius: 16px;
      padding: 2rem;
      margin-bottom: 2rem;
      min-height: 150px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: all 0.4s ease;
    }

    .description-placeholder {
      color: #9E9E9E;
      font-style: italic;
    }

    .description-level {
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 0.5rem;
      padding: 0.3rem 1rem;
      border-radius: 15px;
      display: inline-block;
      margin-left: auto;
      margin-right: auto;
    }

    .description-level.zone-verte {
      background: rgba(76, 175, 80, 0.15);
      color: #388E3C;
    }

    .description-level.zone-jaune {
      background: rgba(255, 193, 7, 0.2);
      color: #F9A825;
    }

    .description-level.zone-rouge {
      background: rgba(244, 67, 54, 0.12);
      color: #D32F2F;
    }

    .description-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.75rem;
    }

    .description-text {
      font-size: 0.95rem;
      color: #5C554E;
      line-height: 1.7;
      font-style: italic;
    }

    .echelle-cta {
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s ease;
      pointer-events: none;
    }

    .echelle-cta.visible {
      opacity: 1;
      transform: translateY(0);
      pointer-events: auto;
    }

    .btn-echelle {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      padding: 1rem 2.5rem;
      background: #D4A574;
      color: #FFFFFF;
      font-family: 'Inter', sans-serif;
      font-size: 1rem;
      font-weight: 500;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(212, 165, 116, 0.3);
    }

    .btn-echelle:hover {
      background: #C49464;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(212, 165, 116, 0.4);
    }

    .btn-echelle svg {
      width: 20px;
      height: 20px;
      transition: transform 0.3s ease;
    }

    .btn-echelle:hover svg {
      transform: translateX(4px);
    }

    .urgence-message {
      display: none;
      background: rgba(244, 67, 54, 0.08);
      border: 1px solid rgba(244, 67, 54, 0.2);
      border-radius: 12px;
      padding: 1.5rem;
      margin-top: 1.5rem;
      text-align: left;
    }

    .urgence-message.visible {
      display: block;
      animation: fadeIn 0.4s ease;
    }

    .urgence-message h4 {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 600;
      color: #D32F2F;
      margin-bottom: 0.75rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .urgence-message p {
      font-size: 0.9rem;
      color: #5C554E;
      margin-bottom: 1rem;
    }

    .urgence-contacts {
      list-style: none;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
    }

    .urgence-contacts li {
      padding: 0.3rem 0;
    }

    .urgence-contacts strong {
      color: #2C3338;
    }

    /* ============================================================
       SECTION 7 THÈMES
       ============================================================ */
    .themes-section {
      padding: 5rem 2rem 7rem;
      background: #FBF7F2;
    }

    .section-header {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 4rem;
    }

    .section-header h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 4vw, 2.8rem);
      font-weight: 400;
      color: #2C3338;
      margin-bottom: 1rem;
    }

    .section-header p {
      font-size: 1.1rem;
      color: #7A726A;
      font-style: italic;
    }

    .themes-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2rem;
      max-width: 1300px;
      margin: 0 auto;
    }

    .theme-card {
      position: relative;
      border-radius: 20px;
      overflow: hidden;
      background: #FFFFFF;
      box-shadow: 0 10px 40px rgba(0,0,0,0.06);
      transition: all 0.4s ease;
      display: flex;
      flex-direction: column;
    }

    .theme-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.12);
    }

    .theme-image-container {
      position: relative;
      height: 220px;
      overflow: hidden;
    }

    .theme-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .theme-card:hover .theme-image {
      transform: scale(1.08);
    }

    .theme-badge {
      position: absolute;
      top: 1rem;
      left: 1rem;
      padding: 0.5rem 1rem;
      background: rgba(255,255,255,0.95);
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.75rem;
      font-weight: 500;
      color: #5C554E;
      backdrop-filter: blur(10px);
    }

    .theme-content {
      padding: 1.8rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .theme-content h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 0.8rem;
    }

    .theme-content p {
      font-size: 0.95rem;
      color: #6B6560;
      line-height: 1.7;
      flex-grow: 1;
    }

    .theme-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 1.2rem;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 500;
      color: #D4A574;
      transition: gap 0.3s ease;
    }

    .theme-card:hover .theme-link {
      gap: 0.8rem;
    }

    /* ============================================================
       SECTION COMPAGNONS IA
       ============================================================ */
    .ai-section {
      padding: 7rem 2rem;
      background: linear-gradient(180deg, #FBF7F2 0%, #F5EDE4 100%);
    }

    .ai-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2.5rem;
      max-width: 950px;
      margin: 0 auto;
    }

    .ai-card {
      background: #FFFFFF;
      border-radius: 24px;
      padding: 3rem 2.5rem;
      text-align: center;
      box-shadow: 0 15px 50px rgba(0,0,0,0.06);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .ai-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #D4A574, #E8C9A8);
    }

    .ai-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 70px rgba(0,0,0,0.1);
    }

    .ai-icon {
      width: 70px;
      height: 70px;
      margin: 0 auto 1.5rem;
      background: linear-gradient(135deg, #F5EDE4 0%, #FBF7F2 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
    }

    .ai-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: 500;
      color: #2C3338;
      margin-bottom: 1rem;
    }

    .ai-card p {
      font-size: 1rem;
      color: #6B6560;
      line-height: 1.8;
      margin-bottom: 1.5rem;
    }

    .ai-status {
      display: inline-block;
      padding: 0.6rem 1.5rem;
      background: linear-gradient(135deg, #F5EDE4 0%, #FBF7F2 100%);
      border-radius: 20px;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 500;
      color: #A69080;
    }

    /* ============================================================
       CITATION FINALE
       ============================================================ */
    .cta-section {
      padding: 8rem 2rem;
      text-align: center;
      background: linear-gradient(180deg, #F5EDE4 0%, #EDE5DB 100%);
      position: relative;
    }

    .cta-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .cta-quote {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.5rem, 3.5vw, 2.2rem);
      font-style: italic;
      font-weight: 400;
      color: #2C3338;
      line-height: 1.6;
      margin-bottom: 3rem;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 0.8rem;
      padding: 1.1rem 2.8rem;
      background: #2C3338;
      color: #FFFFFF;
      border-radius: 50px;
      font-family: 'Inter', sans-serif;
      font-size: 0.95rem;
      font-weight: 500;
      transition: all 0.4s ease;
      box-shadow: 0 10px 30px rgba(44, 51, 56, 0.2);
    }

    .btn-primary:hover {
      background: #D4A574;
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(212, 165, 116, 0.3);
    }

    /* ============================================================
       FOOTER
       ============================================================ */
    .footer {
      padding: 4rem 2rem 2rem;
      background: #2C3338;
      color: rgba(255,255,255,0.7);
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .footer-logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      color: #FFFFFF;
    }

    .footer-links {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    .footer-links a {
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      color: rgba(255,255,255,0.6);
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: #D4A574;
    }

    .footer-bottom {
      max-width: 1200px;
      margin: 3rem auto 0;
      padding-top: 2rem;
      border-top: 1px solid rgba(255,255,255,0.1);
      text-align: center;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      color: rgba(255,255,255,0.4);
    }

    /* ============================================================
       ANIMATIONS
       ============================================================ */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
      40% { transform: translateX(-50%) translateY(-10px); }
      60% { transform: translateX(-50%) translateY(-5px); }
    }

    .animate-on-scroll {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }

    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 768px) {
      .nav {
        padding: 1rem 1.5rem;
      }

      .nav-links {
        display: none;
      }

      .hero-content {
        padding: 1.5rem;
      }

      .themes-grid {
        grid-template-columns: 1fr;
        padding: 0 1rem;
      }

      .ai-grid {
        grid-template-columns: 1fr;
      }

      .footer-content {
        flex-direction: column;
        text-align: center;
      }

      .echelle-container {
        padding: 2rem 1.5rem;
        border-radius: 16px;
      }

      .echelle-zones {
        flex-direction: column;
        gap: 0.5rem;
        align-items: center;
      }

      .point-number {
        font-size: 0.6rem;
      }

      .point-dot {
        width: 12px;
        height: 12px;
      }

      .echelle-description {
        padding: 1.5rem;
        min-height: 130px;
      }

      .description-name {
        font-size: 1.1rem;
      }

      .description-text {
        font-size: 0.85rem;
      }
    }
  </style>
</head>
<body>

<!-- ============================================================
     NAVIGATION
     ============================================================ -->
<nav class="nav" id="nav">
  <a href="index.php" class="nav-logo">Soloplugs</a>
  <ul class="nav-links">
    <li><a href="ressources.php">Ressources</a></li>
    <li><a href="#themes">Les 7 thèmes</a></li>
    <li><a href="#compagnons">Compagnons IA</a></li>
    <li><a href="apropos.php">À propos</a></li>
    <li><a href="magazine.php">Magazine</a></li>
  </ul>
</nav>

<!-- ============================================================
     HERO SECTION
     ============================================================ -->
<section class="hero">
  <div class="hero-content">
    <p class="hero-subtitle">Bienvenue dans l'univers</p>
    <h1 class="hero-title">La voix de la Solitude</h1>
    <p class="hero-quote">
      « Là où la rencontre ne se fait pas avec les autres, mais avec soi-même. »
    </p>
    <a href="#echelle" class="hero-cta">
      Découvrir
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M12 5v14M19 12l-7 7-7-7"/>
      </svg>
    </a>
  </div>
  
  <div class="scroll-indicator">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="2">
      <path d="M12 5v14M19 12l-7 7-7-7"/>
    </svg>
  </div>
</section>

<!-- ============================================================
     INTRODUCTION
     ============================================================ -->
<section class="intro">
  <div class="intro-content">
    <p class="intro-text">
      La solitude nous apparaît comme un <strong>vertige</strong> lorsqu'elle devrait nous apparaître comme une <strong>liberté</strong>. Ici, on l'écoute. On l'accompagne. On la célèbre.
    </p>
    <div class="ligne-decorative"></div>
  </div>
</section>

<!-- ============================================================
     ÉCHELLE DE LA SOLITUDE
     ============================================================ -->
<section class="echelle-section" id="echelle">
  <div class="echelle-container animate-on-scroll">
    
    <!-- Header -->
    <div class="echelle-header">
      <span class="echelle-badge">Le spectre</span>
      <h2 class="echelle-title">Où en es-tu avec la solitude ?</h2>
      <p class="echelle-subtitle">Clique sur le point qui correspond le mieux à ton ressenti actuel</p>
    </div>

    <!-- Slider -->
    <div class="echelle-slider-wrapper">
      
      <!-- Labels des zones -->
      <div class="echelle-zones">
        <span class="zone-label zone-verte">Habitée</span>
        <span class="zone-label zone-jaune">En tension</span>
        <span class="zone-label zone-rouge">Souffrante</span>
      </div>

      <!-- Barre de gradient -->
      <div class="echelle-track">
        <div class="echelle-marker" id="marker"></div>
      </div>

      <!-- Points cliquables -->
      <div class="echelle-points">
        <div class="echelle-point" data-level="1">
          <div class="point-dot"></div>
          <span class="point-number">1</span>
        </div>
        <div class="echelle-point" data-level="2">
          <div class="point-dot"></div>
          <span class="point-number">2</span>
        </div>
        <div class="echelle-point" data-level="3">
          <div class="point-dot"></div>
          <span class="point-number">3</span>
        </div>
        <div class="echelle-point" data-level="4">
          <div class="point-dot"></div>
          <span class="point-number">4</span>
        </div>
        <div class="echelle-point" data-level="5">
          <div class="point-dot"></div>
          <span class="point-number">5</span>
        </div>
        <div class="echelle-point" data-level="6">
          <div class="point-dot"></div>
          <span class="point-number">6</span>
        </div>
        <div class="echelle-point" data-level="7">
          <div class="point-dot"></div>
          <span class="point-number">7</span>
        </div>
        <div class="echelle-point" data-level="8">
          <div class="point-dot"></div>
          <span class="point-number">8</span>
        </div>
        <div class="echelle-point" data-level="9">
          <div class="point-dot"></div>
          <span class="point-number">9</span>
        </div>
        <div class="echelle-point" data-level="10">
          <div class="point-dot"></div>
          <span class="point-number">10</span>
        </div>
        <div class="echelle-point" data-level="11">
          <div class="point-dot"></div>
          <span class="point-number">11</span>
        </div>
        <div class="echelle-point" data-level="12">
          <div class="point-dot"></div>
          <span class="point-number">12</span>
        </div>
      </div>

    </div>

    <!-- Description dynamique -->
    <div class="echelle-description" id="description">
      <p class="description-placeholder">Sélectionne un niveau pour voir sa description</p>
    </div>

    <!-- Bouton Continuer -->
    <div class="echelle-cta" id="cta">
      <button class="btn-echelle" id="btn-continuer">
        Explorer mon parcours
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      </button>
    </div>

    <!-- Message d'urgence (niveaux 11-12) -->
    <div class="urgence-message" id="urgence">
      <h4>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10"/>
          <line x1="12" y1="8" x2="12" y2="12"/>
          <line x1="12" y1="16" x2="12.01" y2="16"/>
        </svg>
        Tu n'es pas seul·e
      </h4>
      <p>Si tu traverses un moment difficile, des personnes sont là pour t'écouter, 24h/24 :</p>
      <ul class="urgence-contacts">
        <li><strong>Canada :</strong> 1-833-456-4566</li>
        <li><strong>France :</strong> 3114</li>
        <li><strong>Belgique :</strong> 0800 32 123</li>
        <li><strong>Suisse :</strong> 143</li>
      </ul>
    </div>

  </div>
</section>

<!-- ============================================================
     SECTION 7 THÈMES
     ============================================================ -->
<section class="themes-section" id="themes">
  <div class="section-header">
    <h2>Les 7 univers de la solitude</h2>
    <p>Sept chemins pour accompagner ta solitude, qu'elle soit choisie ou en transformation.</p>
  </div>

  <div class="themes-grid">
    <!-- THÈME 1: VIVRE SOLO -->
    <a href="7_themes/vivre-solo.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1513002749550-c59d786b8e6c?w=800&q=80" alt="Vivre Solo" class="theme-image">
        <span class="theme-badge">Vivre Solo</span>
      </div>
      <div class="theme-content">
        <h3>L'art de la solitude</h3>
        <p>La solitude est une réalité. La manière de la traverser peut devenir un art.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>

    <!-- THÈME 2: ADO SOLO -->
    <a href="7_themes/ado-solo.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1547592166-23ac45744acd?w=800&q=80" alt="Ado Solo" class="theme-image">
        <span class="theme-badge">Ado Solo</span>
      </div>
      <div class="theme-content">
        <h3>L'adolescence en solo</h3>
        <p>Quand l'adolescence se vit en solo. Tu n'es pas bizarre, tu cherches ton chemin.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>

    <!-- THÈME 3: PARENT SOLO -->
    <a href="7_themes/parent-solo.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=800&q=80" alt="Parent Solo" class="theme-image">
        <span class="theme-badge">Parent Solo</span>
      </div>
      <div class="theme-content">
        <h3>Élever seul·e</h3>
        <p>Élever seul·e? Tu es plus fort·e que tu ne crois. Stratégies et soutien pour la monoparentalité.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>

    <!-- THÈME 4: SÉPARATIONS -->
    <a href="7_themes/divorces-separations-deces.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1517842645767-c639042777db?w=800&q=80" alt="Transitions" class="theme-image">
        <span class="theme-badge">Séparation-Divorce-Décès</span>
      </div>
      <div class="theme-content">
        <h3>Traverser la rupture</h3>
        <p>Quand la vie t'arrache quelqu'un. Traverser la rupture, apprivoiser le vide, renaître.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>

    <!-- THÈME 5: VIEILLIR SOLO -->
    <a href="7_themes/vieillir-solo.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?w=800&q=80" alt="Vieillir Solo" class="theme-image">
        <span class="theme-badge">Vieillir Solo</span>
      </div>
      <div class="theme-content">
        <h3>La sagesse des années</h3>
        <p>La solitude des années tardives. Dignité, autonomie et liberté après 60 ans.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>

    <!-- THÈME 6: VOYAGER SOLO -->
    <a href="7_themes/voyages-solo.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&q=80" alt="Voyager Solo" class="theme-image">
        <span class="theme-badge">Voyages Solo</span>
      </div>
      <div class="theme-content">
        <h3>L'aventure solitaire</h3>
        <p>Partir seul·e, revenir transformé·e. L'aventure en solo comme école de vie.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>

    <!-- THÈME 7: SORTIES/LOISIRS -->
    <a href="7_themes/sorties-loisirs-rencontres.php" class="theme-card animate-on-scroll">
      <div class="theme-image-container">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800&q=80" alt="Sorties Loisirs" class="theme-image">
        <span class="theme-badge">Sorties & Loisirs</span>
      </div>
      <div class="theme-content">
        <h3>Sortir en solo</h3>
        <p>Sortir seul·e sans te sentir seul·e. Apprivoiser les espaces publics avec confiance.</p>
        <span class="theme-link">Explorer →</span>
      </div>
    </a>
  </div>
</section>

<!-- ============================================================
     SECTION COMPAGNONS IA
     ============================================================ -->
<section class="ai-section" id="compagnons">
  <div class="section-header">
    <h2>Tes compagnons numériques</h2>
    <p>Deux présences bienveillantes pour accompagner ta solitude.</p>
  </div>

  <div class="ai-grid">
    <!-- SOLO -->
    <div class="ai-card animate-on-scroll">
      <div class="ai-icon">💬</div>
      <h3>Solo</h3>
      <p>Un·e ami·e qui comprend ta solitude. Parle-lui de ce que tu vis, pose tes questions, explore tes réflexions.</p>
      <span class="ai-status">Bientôt disponible</span>
    </div>

    <!-- SOLI -->
    <div class="ai-card animate-on-scroll">
      <div class="ai-icon">📔</div>
      <h3>Soli</h3>
      <p>Ton journal personnel, intelligent et bienveillant. Écris pour toi, Soli t'aide à te comprendre.</p>
      <span class="ai-status">Bientôt disponible</span>
    </div>
  </div>
</section>

<!-- ============================================================
     APPEL À L'ACTION FINAL
     ============================================================ -->
<section class="cta-section">
  <div class="cta-content animate-on-scroll">
    <p class="cta-quote">
      « Que ta solitude soit choisie ou subie,<br>
      qu'elle soit légère ou lourde,<br>
      elle mérite d'être comprise. »
    </p>
    <a href="apropos.php" class="btn-primary">
      Découvrir notre philosophie
    </a>
  </div>
</section>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="footer">
  <div class="footer-content">
    <span class="footer-logo">Soloplugs</span>
    <ul class="footer-links">
      <li><a href="apropos.php">À propos</a></li>
      <li><a href="magazine/index.php">Magazine</a></li>
      <li><a href="ressources.php">Ressources</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="footer-bottom">
    <p>© 2026 Soloplugs — La voix de la solitude</p>
  </div>
</footer>

<!-- ============================================================
     SCRIPTS
     ============================================================ -->
<script>
  // Navigation qui change au scroll
  const nav = document.getElementById('nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  });

  // Animation au scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    observer.observe(el);
  });

  // ============================================================
  // ÉCHELLE DE LA SOLITUDE
  // ============================================================
  const niveaux = {
    1: {
      zone: 'verte',
      nom: 'Plénitude solitaire',
      description: 'Je savoure ma solitude. Elle me nourrit, me ressource. Je n\'en changerais pas.',
      parcours: 'chosen'
    },
    2: {
      zone: 'verte',
      nom: 'Indépendance sereine',
      description: 'Je vis seul·e par choix. J\'ai des liens, mais j\'ai besoin de mon espace.',
      parcours: 'chosen'
    },
    3: {
      zone: 'verte',
      nom: 'Solitude apprivoisée',
      description: 'J\'ai appris à vivre seul·e. Ce n\'était pas mon choix initial, mais j\'y trouve ma place.',
      parcours: 'chosen'
    },
    4: {
      zone: 'verte',
      nom: 'Équilibre fragile',
      description: 'Ça va globalement, mais certains moments sont plus difficiles que d\'autres.',
      parcours: 'chosen'
    },
    5: {
      zone: 'jaune',
      nom: 'Solitude intermittente',
      description: 'Parfois ça va, parfois c\'est dur. Les week-ends, les soirs, les fêtes...',
      parcours: 'both'
    },
    6: {
      zone: 'jaune',
      nom: 'Isolement relationnel',
      description: 'Je suis entouré·e, mais je me sens seul·e. Personne ne me comprend vraiment.',
      parcours: 'both'
    },
    7: {
      zone: 'jaune',
      nom: 'Solitude subie récente',
      description: 'Un événement m\'a laissé·e seul·e (rupture, deuil, déménagement). Je ne m\'y fais pas.',
      parcours: 'suffered'
    },
    8: {
      zone: 'jaune',
      nom: 'Repli progressif',
      description: 'Je m\'isole de plus en plus. Sortir, appeler, voir du monde devient difficile.',
      parcours: 'suffered'
    },
    9: {
      zone: 'rouge',
      nom: 'Solitude chronique',
      description: 'Je me sens seul·e presque tout le temps. C\'est devenu mon état normal.',
      parcours: 'suffered'
    },
    10: {
      zone: 'rouge',
      nom: 'Invisible aux autres',
      description: 'J\'ai l\'impression que personne ne me voit, que je pourrais disparaître sans que ça change rien.',
      parcours: 'suffered'
    },
    11: {
      zone: 'rouge',
      nom: 'Désespoir silencieux',
      description: 'Ma solitude me fait souffrir profondément. Je ne sais plus comment m\'en sortir.',
      parcours: 'urgence'
    },
    12: {
      zone: 'rouge',
      nom: 'Détresse',
      description: 'Je suis en crise. J\'ai besoin d\'aide maintenant.',
      parcours: 'urgence'
    }
  };

  const points = document.querySelectorAll('.echelle-point');
  const marker = document.getElementById('marker');
  const description = document.getElementById('description');
  const cta = document.getElementById('cta');
  const btnContinuer = document.getElementById('btn-continuer');
  const urgence = document.getElementById('urgence');

  let selectedLevel = null;

  function selectLevel(level) {
    selectedLevel = level;
    const data = niveaux[level];

    // Mettre à jour les points actifs
    points.forEach(p => p.classList.remove('active'));
    document.querySelector(`[data-level="${level}"]`).classList.add('active');

    // Positionner le marqueur
    const percentage = ((level - 1) / 11) * 100;
    marker.style.left = `${percentage}%`;
    marker.style.opacity = '1';

    // Mettre à jour la description
    const zoneName = data.zone === 'verte' ? 'Solitude habitée' : 
                     data.zone === 'jaune' ? 'Solitude en tension' : 'Solitude souffrante';
    
    description.innerHTML = `
      <span class="description-level zone-${data.zone}">${zoneName}</span>
      <h3 class="description-name">${data.nom}</h3>
      <p class="description-text">"${data.description}"</p>
    `;

    // Afficher le bouton Continuer
    cta.classList.add('visible');

    // Gérer le message d'urgence
    if (level >= 11) {
      urgence.classList.add('visible');
      btnContinuer.innerHTML = `
        Voir les ressources d'aide
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      `;
    } else {
      urgence.classList.remove('visible');
      btnContinuer.innerHTML = `
        Explorer mon parcours
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7"/>
        </svg>
      `;
    }

    // Sauvegarder dans localStorage
    localStorage.setItem('soloplugs_solitude_level', level);
  }

  function handleContinue() {
    if (!selectedLevel) return;

    const data = niveaux[selectedLevel];
    
    // Redirection selon le parcours
    switch(data.parcours) {
      case 'chosen':
        window.location.href = '7_themes/vivre-solo.php?parcours=chosen#content-chosen';
        break;
      case 'suffered':
        window.location.href = '7_themes/vivre-solo.php?parcours=suffered#content-suffered';
        break;
      case 'both':
        window.location.href = '7_themes/vivre-solo.php';
        break;
      case 'urgence':
        window.location.href = 'urgences.php';
        break;
    }
  }

  points.forEach(point => {
    point.addEventListener('click', () => {
      const level = parseInt(point.dataset.level);
      selectLevel(level);
    });
  });

  btnContinuer.addEventListener('click', handleContinue);

  // Position initiale du marqueur
  marker.style.left = '45%';
  marker.style.opacity = '0.5';
</script>

</body>
</html>
