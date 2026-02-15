# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**SOLOPLUGS** is a French-language PHP website about solitude — helping people navigate different experiences of being alone. It runs on WAMP (Windows, Apache, MySQL, PHP) at `C:\wamp64\www\Soloplugs`. No framework — plain PHP with includes. The project has been in development for over 25 years (since the early 2000s).

The site's slogan: *"La voix de la solitude"* (The voice of solitude).
Core philosophy: *"La solitude est la voix silencieuse universelle"*.

Target audience: French speakers across Quebec, France, Belgium, and Switzerland.

## ⚠️ Workflow Rules — READ FIRST

- **NEVER modify a page without explaining the proposed changes first and getting confirmation.** Always describe what you plan to change and why, then wait for approval.
- **Work file by file** — never batch-modify multiple files without showing changes for each one.
- **Always preserve the existing visual identity** — colors, fonts, spacing, tone.

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
- **`magazine/`** — Solo Magazine pages and assets (quarterly publication)
- **`hobbies/`** — Individual hobby pages (aquarelle, calligraphie, etc.)
- **`soli/`** — Soli AI chatbot module (PHP frontend + OpenAI API backend + Python local variant via Ollama) — *currently disabled (button removed from pages) to focus on content development*
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
- **Soli is temporarily disabled** — focus is currently on Solo Magazine and content development
- Backend: `soli/soli-api.php` calls OpenAI API, `soli/soli.py` is a local variant using Ollama/Mistral

### Soloplugs-Master — The Orchestra Model

SOLOPLUGS development follows an **orchestra model** with three distinct roles:

```
THE COMPOSER — Solo (the human creator)
    |  Vision, decisions, artistic direction, final approval
    |
THE CONDUCTOR — Soloplugs-Master (Claude Desktop / Claude Code)
    |  Orchestrates, analyzes, executes, maintains coherence
    |  Reads this CLAUDE.md + all project files via MCP
    |  Can adopt any theme's "mode" based on the task at hand
    |
THE 7 SECTIONS — The themes
         |-- vivre-solo         (daily autonomy, personal growth)
         |-- ado-solo           (youth language, bullying, identity)
         |-- parent-solo        (single parenting, family resources)
         |-- separations-deuil  (grief, divorce, loss)
         |-- vieillir-solo      (aging, health, maintaining connections)
         |-- voyages-solo       (solo travel, safety, self-discovery)
         |-- sorties-loisirs    (hobbies, creativity, solo activities)
```

**How it works:** Claude Desktop (or Claude Code), connected to the project via MCP, acts as Soloplugs-Master — the central intelligence that understands the entire ecosystem. It reads this file, the chartes, the ontology, all source code, and all content. It can work on any theme while maintaining global coherence across the project.

**The Composer always decides.** Soloplugs-Master proposes, explains, and waits for approval. It never acts unilaterally.

### The 7 SOLI Agents (Public-Facing)

For visitors on the website, 7 specialized AI agents provide theme-specific guidance. Each has its own personality, tone, and ethical guardrails:

| Agent | Theme | Tone | Status |
|-------|-------|------|--------|
| **SOLI-Vie** | vivre-solo | Encouraging, practical | Prompt pending |
| **SOLI-Ado** | ado-solo | Dynamic, non-condescending, youth language | Prompt created |
| **SOLI-Parent** | parent-solo | Supportive, resourceful | Prompt pending |
| **SOLI-Deuil** | separations-deuil | Soft, patient, never rushing | Prompt created |
| **SOLI-Aine** | vieillir-solo | Respectful, clear, reassuring | Prompt pending |
| **SOLI-Voyage** | voyages-solo | Adventurous, safety-conscious | Prompt pending |
| **SOLI-Loisirs** | sorties-loisirs | Light, inspiring, creative | Prompt pending |

**Each agent has:**
- A dedicated **system prompt file** (e.g., `soli-ado-prompt.txt`) — defines personality, tone, boundaries
- A dedicated **knowledge base file** — theme-specific resources, FAQ, regional info
- Its own **ethical guardrails** (e.g., SOLI-Deuil is especially vigilant for distress signals)

**Public implementation:** `solotech_v2.py` handles agent routing for the website chatbots. Each agent loads its own prompt + KB at runtime.

**Development implementation:** Soloplugs-Master (Claude Desktop/Code) can adopt any agent's perspective when working on theme-specific content or code, using the chartes and prompt files already in the project.

### Legacy: SOLOTECH

SOLOTECH was the original Python-based analytical engine (`solotech.py` / `solotech_v2.py`). It remains functional as the public-facing chatbot backend. Its role as development orchestrator has been superseded by Soloplugs-Master (Claude Desktop/Code), which has direct access to all project files and deeper analytical capabilities.


### Solitude Scale (Échelle de la Solitude)

The homepage (`index.php`) features an interactive 12-level solitude scale with 3 zones:
- **Green (1-4)**: Solitude habitée (chosen/accepted solitude)
- **Yellow (5-8)**: Solitude en tension (intermittent/relational isolation)
- **Red (9-12)**: Solitude souffrante (chronic/crisis)

Selection redirects to appropriate theme pages or emergency resources via `parcours` query parameter.

## Solo Magazine — Current Priority

Solo Magazine is a **quarterly publication** tied to the SOLOPLUGS library. It is the current development priority.

### Magazine Principles
- Shares SOLOPLUGS' DNA but is **closer to people** — more accessible, warmer tone
- Every article **must reference at least one theme** from the 7 library themes
- Card-based responsive layout with mobile-first approach
- Located in the `magazine/` directory

### Magazine vs. Library Distinction
| Library (7 Themes) | Magazine |
|---------------------|----------|
| Philosophical depth | Accessible, everyday tone |
| Reference content | Timely, seasonal articles |
| Structured by theme | Cross-theme exploration |
| Permanent resource | Quarterly editions |

## Content & Tone Guidelines

- **Language**: French (Quebec French primarily). Tutoiement throughout.
- **Tone**: Warm, sober, poetic but not pretentious. Short sentences. Meaningful silences (ellipses).
- **Never**: clinical language, presumptuous empathy ("Je comprends ta douleur"), unsolicited advice, long-winded explanations
- **Inclusive writing**: uses `seul·e`, `fort·e` (French inclusive dots)
- **Voice**: We speak **to** people living solitude, never **about** them. Respectful, never patronizing or condescending.

### ⚠️ Absolute Editorial Rules

- **NEVER use the codes SOL_001 or SOL_002 in articles or user-facing content.** These are internal ontology identifiers only. In articles, write naturally: "solitude choisie" or "solitude subie".
- **The two forms of solitude do not always need to be mentioned together.** An article can focus exclusively on one form without referencing the other.
- Every article should feel like a conversation, not a lecture.

## File Conventions

- PHP files use descriptive kebab-case names: `vivre-solo.php`, `send-contact.php`
- CSS files mirror their PHP counterparts: `vivre-solo.css`
- Images organized by theme in `images/` subfolders matching theme names
- Backup copies use ` - Copie` suffix (French Windows convention) — these are gitignored

## Security Notes

- `config/soli-config.php` contains API keys — gitignored, never commit
- `soli-api.php` checks `SOLI_ACCESS` constant to prevent direct access
- `.gitignore` excludes: config files, `.env`, logs, backups, Python venvs, temp files
