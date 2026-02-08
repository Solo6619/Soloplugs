# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**Soloplugs** is a French-language PHP website about solitude — helping people navigate different experiences of being alone. It runs on WAMP (Windows, Apache, MySQL, PHP) at `C:\wamp64\www\Soloplugs`. No framework — plain PHP with includes.

The site's slogan: *"La voix de la solitude"* (The voice of solitude).

## Running the Project

- Start WAMP64 and access at `http://localhost/Soloplugs/`
- No build step, no package manager, no compilation — edit PHP/CSS/JS and reload
- Configuration: copy `config/soli-config.php.example` to `config/soli-config.php` and add API keys (never commit the real config)

## Architecture

### Page Assembly Pattern

Pages in the root and `7_themes/` follow this pattern:

```php
<?php
  $pageTitle = 'Page Title';
  $basePath = '../';              // '' for root pages, '../' for subfolders
  $additionalCSS = ['components.css', 'specific-page.css'];
  include '../components/head.php';
?>
<body>
  <?php include '../components/header.php'; ?>
  <!-- page content -->
  <?php $basePath = '../'; include '../components/footer.php'; ?>
</body>
```

The `$basePath` variable is critical — it prefixes all asset paths and links. Root pages use `''`, subfolder pages use `'../'`.

### Key Directories

- **`components/`** — Reusable PHP partials: `head.php` (meta, fonts, dynamic CSS loading), `header.php` (nav with hamburger + theme submenu), `footer.php` (unified footer), `scripts.php`
- **`7_themes/`** — The 7 main theme pages: vivre-solo, ado-solo, parent-solo, vieillir-solo, voyages-solo, sorties-loisirs-rencontres, divorces-separations-deces
- **`articles/`** — Individual article pages (standalone PHP files)
- **`hobbies/`** — Individual hobby pages (aquarelle, calligraphie, etc.)
- **`soli/`** — Soli AI chatbot module (PHP frontend + OpenAI API backend + Python local variant via Ollama)
- **`css/`** — One CSS file per page/theme + `global.css` (variables, reset, header, footer) + `theme-base.css` (shared theme styles) + `components.css`
- **`data/ressources/`** — JSON files for regional resources (Quebec)
- **`_templates/`** — Article templates (framed and fullwidth variants)
- **`docs/`** — Project documentation, chartes, ontology

### CSS Architecture

- **`global.css`** defines CSS custom properties (variables) used everywhere:
  - `--bg-primary: #FBF9F6`, `--accent-gold: #D4A574`, `--text-primary: #2C3338`, etc.
- **`theme-base.css`** provides shared layout for all theme pages (must be loaded before theme-specific CSS)
- Each theme/page has its own CSS file (e.g., `vivre-solo.css`, `magazine.css`)
- No CSS framework — all custom styles
- Fonts: Playfair Display (headings), Lora (body serif), Inter (UI/sans-serif) via Google Fonts

### The Two AI Companions: Solo & Soli

This is a core concept — see `docs/connaissances/entites/CHARTE_SOLO.md` and `CHARTE_SOLI.md`.

| Solo | Soli |
|------|------|
| Public companion on every page | Private intimate mirror |
| Talks **to** you | Helps you talk **to yourself** |
| Guides toward resources & help | Reflects your inner world |
| Widget (bottom-right) | Dedicated stellar space |

- **Solo** uses tutoiement (informal "tu"), short phrases, never pretends to be human, never says "Je comprends", guides users in distress toward help resources
- **Soli** is a journal-like mirror, adapts to user's voice over time, asks permission before exploring intimate topics, directs distress cases to Solo
- Backend: `soli/soli-api.php` calls OpenAI API, `soli/soli.py` is a local variant using Ollama/Mistral

### Solitude Scale (Échelle de la Solitude)

The homepage (`index.php`) features an interactive 12-level solitude scale with 3 zones:
- **Green (1-4)**: Solitude habitée (chosen/accepted solitude)
- **Yellow (5-8)**: Solitude en tension (intermittent/relational isolation)
- **Red (9-12)**: Solitude souffrante (chronic/crisis)

Selection redirects to appropriate theme pages or emergency resources via `parcours` query parameter.

## Content & Tone Guidelines

- **Language**: French (Quebec French primarily). Tutoiement throughout.
- **Tone**: Warm, sober, poetic but not pretentious. Short sentences. Meaningful silences (ellipses).
- **Never**: clinical language, presumptuous empathy ("Je comprends ta douleur"), unsolicited advice, long-winded explanations
- **Inclusive writing**: uses `seul·e`, `fort·e` (French inclusive dots)

## File Conventions

- PHP files use descriptive kebab-case names: `vivre-solo.php`, `send-contact.php`
- CSS files mirror their PHP counterparts: `vivre-solo.css`
- Images organized by theme in `images/` subfolders matching theme names
- Backup copies use ` - Copie` suffix (French Windows convention) — these are gitignored

## Security Notes

- `config/soli-config.php` contains API keys — gitignored, never commit
- `soli-api.php` checks `SOLI_ACCESS` constant to prevent direct access
- `.gitignore` excludes: config files, `.env`, logs, backups, Python venvs, temp files
