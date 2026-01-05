/**
 * SOLOPLUGS — Base de données centralisée des ressources
 * 
 * Structure universelle reproductible pour tous les pays francophones.
 * Chaque ressource est taguée pour filtrage par thématique.
 * 
 * Tags disponibles :
 * - "tous"       : Ressources universelles (urgence, info-social)
 * - "ado"        : Adolescents et jeunes
 * - "parent"     : Parents solos / familles monoparentales
 * - "aine"       : Personnes âgées / vieillir solo
 * - "deuil"      : Deuil et endeuillés
 * - "separation" : Séparation et divorce
 * - "vivre"      : Vivre solo au quotidien
 * 
 * Icônes : urgence, ecoute, sante, communaute, lecture, juridique
 */

const SOLOPLUGS_RESSOURCES = {
  
  // ============================================================
  // QUÉBEC / CANADA
  // ============================================================
  quebec: {
    
    // ----------------------------------------------------------
    // RESSOURCES PROVINCIALES (communes à toutes les régions)
    // ----------------------------------------------------------
    provinciales: {
      
      urgence: [
        {
          nom: "9-8-8",
          numero: "9-8-8",
          desc: "Ligne de crise santé mentale — 24/7 partout au Canada",
          lien: "tel:988",
          icon: "urgence",
          tags: ["tous"]
        },
        {
          nom: "Info-Social",
          numero: "811 (option 2)",
          desc: "Intervention psychosociale — 24/7",
          lien: "tel:811",
          icon: "sante",
          tags: ["tous"]
        },
        {
          nom: "1-866-APPELLE",
          numero: "1 866 277-3553",
          desc: "Prévention du suicide — 24/7",
          lien: "tel:18662773553",
          icon: "urgence",
          tags: ["tous"]
        },
        {
          nom: "911",
          numero: "911",
          desc: "Urgence immédiate — Danger pour soi ou autrui",
          lien: "tel:911",
          icon: "urgence",
          tags: ["tous"]
        }
      ],
      
      jeunes: [
        {
          nom: "Tel-jeunes",
          numero: "1 800 263-2266",
          desc: "12-17 ans — 24/7 — Texto: 514-600-1002",
          lien: "tel:18002632266",
          site: "https://www.teljeunes.com",
          icon: "ecoute",
          tags: ["ado", "tous"]
        },
        {
          nom: "Jeunesse, J'écoute",
          numero: "1 800 668-6868",
          desc: "Jeunes — 24/7 — Texto: PARLER au 686868",
          lien: "tel:18006686868",
          site: "https://jeunessejecoute.ca",
          icon: "ecoute",
          tags: ["ado", "tous"]
        },
        {
          nom: "LigneParents",
          numero: "1 800 361-5085",
          desc: "Soutien aux parents d'enfants et adolescents",
          lien: "tel:18003615085",
          site: "https://ligneparents.com",
          icon: "ecoute",
          tags: ["parent", "ado"]
        },
        {
          nom: "Interligne",
          numero: "1 888 505-1010",
          desc: "Jeunes LGBTQ+ et proches — 24/7",
          lien: "tel:18885051010",
          site: "https://interligne.co",
          icon: "ecoute",
          tags: ["ado"]
        },
        {
          nom: "AlterHéros",
          desc: "Soutien jeunes LGBTQ+ — Questionnements identité",
          lien: "https://alterheros.com",
          icon: "communaute",
          tags: ["ado"]
        },
        {
          nom: "ANEB Québec",
          desc: "Troubles alimentaires — Téléphone, texto, clavardage",
          lien: "https://anebquebec.com",
          icon: "ecoute",
          tags: ["ado"]
        },
        {
          nom: "Fondation Jeunes en Tête",
          desc: "Prévention détresse psychologique 11-18 ans",
          lien: "https://www.jeunesentete.org",
          icon: "communaute",
          tags: ["ado"]
        },
        {
          nom: "Réseau des Auberges du cœur",
          desc: "Hébergement jeunes 12-35 ans en difficulté — 24/7",
          lien: "https://aubergesducoeur.org",
          icon: "communaute",
          tags: ["ado"]
        },
        {
          nom: "Carrefours jeunesse-emploi",
          desc: "Accompagnement scolaire, emploi, projets",
          lien: "https://www.rcjeq.org",
          icon: "communaute",
          tags: ["ado"]
        }
      ],
      
      aines: [
        {
          nom: "Les Petits Frères",
          desc: "Accompagnement bénévole des 75+ isolés — 12 régions",
          lien: "https://www.petitsfreres.ca",
          icon: "communaute",
          tags: ["aine"]
        },
        {
          nom: "Tel-Aînés",
          numero: "514 353-2463",
          desc: "Écoute spécialisée pour aînés — Montréal",
          lien: "tel:5143532463",
          icon: "ecoute",
          tags: ["aine"]
        },
        {
          nom: "FADOQ",
          desc: "Réseau des aînés du Québec — 50 ans et plus",
          lien: "https://www.fadoq.ca",
          icon: "communaute",
          tags: ["aine"]
        },
        {
          nom: "L'APPUI pour les proches aidants",
          desc: "Soutien aux proches aidants d'aînés",
          lien: "https://www.lappui.org",
          icon: "communaute",
          tags: ["aine"]
        },
        {
          nom: "Centres d'action bénévole",
          desc: "Transport, popotes, accompagnement — Via 211",
          lien: "tel:211",
          icon: "communaute",
          tags: ["aine"]
        }
      ],
      
      parents: [
        {
          nom: "LigneParents",
          numero: "1 800 361-5085",
          desc: "Accompagnement du rôle parental",
          lien: "tel:18003615085",
          site: "https://ligneparents.com",
          icon: "ecoute",
          tags: ["parent"]
        },
        {
          nom: "FAFMRQ",
          numero: "514 729-6666",
          desc: "Fédération des familles monoparentales et recomposées",
          lien: "tel:5147296666",
          site: "https://www.fafmrq.org",
          icon: "communaute",
          tags: ["parent"]
        },
        {
          nom: "Pères séparés",
          numero: "514 254-6120",
          desc: "Soutien aux pères — Montréal",
          lien: "tel:5142546120",
          site: "https://www.peres-separes.qc.ca",
          icon: "communaute",
          tags: ["parent", "separation"]
        },
        {
          nom: "Service d'Entraide Passerelle",
          numero: "514 277-9870",
          desc: "Femmes en rupture — Montréal",
          lien: "tel:5142779870",
          site: "https://www.entraidepasserelle.org",
          icon: "communaute",
          tags: ["parent", "separation"]
        },
        {
          nom: "La Petite Maison de la Miséricorde",
          numero: "514 526-2639",
          desc: "Hébergement mères cheffes de famille — Montréal",
          lien: "tel:5145262639",
          icon: "communaute",
          tags: ["parent"]
        },
        {
          nom: "Maman va à l'école",
          desc: "Bourses pour mères monoparentales aux études",
          lien: "https://mamanvaalecole.lacsq.org",
          icon: "communaute",
          tags: ["parent"]
        },
        {
          nom: "MonoParental.ca",
          desc: "Ressources et informations pour parents solos — Montréal",
          lien: "https://www.monoparental.ca",
          icon: "lecture",
          tags: ["parent"]
        },
        {
          nom: "FQOCF",
          desc: "Organismes communautaires Famille — Halte-garderie, répit",
          lien: "https://fqocf.org",
          icon: "communaute",
          tags: ["parent"]
        }
      ],
      
      deuil: [
        {
          nom: "Ligne Le deuil",
          numero: "1 888 533-3845",
          desc: "Écoute pour endeuillés — 10h-22h, 365 jours",
          lien: "tel:18885333845",
          icon: "ecoute",
          tags: ["deuil"]
        },
        {
          nom: "Deuil Jeunesse",
          numero: "1 855 889-3666",
          desc: "Jeunes et familles — Maladie, décès, séparation",
          lien: "tel:18558893666",
          site: "https://deuil-jeunesse.com",
          icon: "ecoute",
          tags: ["deuil", "ado"]
        },
        {
          nom: "Parents Orphelins",
          numero: "1 844 338-4522",
          desc: "Deuil périnatal — Tout le Québec",
          lien: "tel:18443384522",
          site: "https://www.parentsorphelins.org",
          icon: "ecoute",
          tags: ["deuil", "parent"]
        },
        {
          nom: "Solidarité-Deuil d'enfant",
          numero: "418 990-0435",
          desc: "Parents ayant perdu un enfant",
          lien: "tel:4189900435",
          icon: "ecoute",
          tags: ["deuil", "parent"]
        },
        {
          nom: "Fondation Monbourquette",
          desc: "Répertoire de ~300 ressources en suivi de deuil",
          lien: "https://www.fondationmonbourquette.com",
          icon: "communaute",
          tags: ["deuil"]
        },
        {
          nom: "Maison Monbourquette",
          desc: "Ressources gratuites aux endeuillés — Montréal",
          lien: "https://www.maisonmonbourquette.com",
          icon: "communaute",
          tags: ["deuil"]
        },
        {
          nom: "Infodeuil.ca",
          desc: "Information sur le deuil, rituels, événements",
          lien: "https://infodeuil.ca",
          icon: "lecture",
          tags: ["deuil"]
        },
        {
          nom: "Suicide Action Montréal",
          numero: "1 866 277-3553",
          desc: "Suivi de deuil après suicide",
          lien: "tel:18662773553",
          site: "https://suicideactionmontreal.org",
          icon: "ecoute",
          tags: ["deuil"]
        }
      ],
      
      separation: [
        {
          nom: "Info-Séparation",
          desc: "Consultations juridiques gratuites — Partout au Québec",
          lien: "https://www.justicedeproximite.qc.ca/services/info-separation",
          icon: "juridique",
          tags: ["separation"]
        },
        {
          nom: "JuridiQC",
          desc: "Information juridique fiable — Séparation et divorce",
          lien: "https://juridiqc.gouv.qc.ca/separation-et-divorce",
          icon: "juridique",
          tags: ["separation"]
        },
        {
          nom: "Médiation familiale",
          desc: "Séances gratuites pour couples avec enfants",
          lien: "https://www.justice.gouv.qc.ca",
          icon: "juridique",
          tags: ["separation", "parent"]
        },
        {
          nom: "Aide juridique",
          numero: "1 800 842-2213",
          desc: "Avocat gratuit ou max 800$ si admissible",
          lien: "tel:18008422213",
          icon: "juridique",
          tags: ["separation"]
        },
        {
          nom: "ProBono Québec",
          numero: "514 904-1076",
          desc: "Services juridiques gratuits",
          lien: "tel:5149041076",
          site: "https://www.probonoquebec.ca",
          icon: "juridique",
          tags: ["separation"]
        },
        {
          nom: "Juripop",
          desc: "Services juridiques à coût abordable",
          lien: "https://www.juripop.org",
          icon: "juridique",
          tags: ["separation"]
        },
        {
          nom: "Pères séparés",
          numero: "514 254-6120",
          desc: "Soutien aux pères en séparation — Montréal",
          lien: "tel:5142546120",
          site: "https://www.peres-separes.qc.ca",
          icon: "communaute",
          tags: ["separation", "parent"]
        },
        {
          nom: "Service d'Entraide Passerelle",
          numero: "514 277-9870",
          desc: "Femmes en rupture/divorce — Montréal",
          lien: "tel:5142779870",
          icon: "communaute",
          tags: ["separation", "parent"]
        },
        {
          nom: "AutonHommie",
          numero: "418 648-6480",
          desc: "Centre de ressources pour hommes — Québec",
          lien: "tel:4186486480",
          site: "https://www.autonhommie.org",
          icon: "communaute",
          tags: ["separation"]
        },
        {
          nom: "ANCQ",
          numero: "1 877 847-3176",
          desc: "Action des nouvelles conjointes du Québec",
          lien: "tel:18778473176",
          icon: "communaute",
          tags: ["separation"]
        }
      ],
      
      reference: [
        {
          nom: "211 Québec",
          numero: "211",
          desc: "Info-référence vers ressources communautaires",
          lien: "tel:211",
          site: "https://211qc.ca",
          icon: "communaute",
          tags: ["tous"]
        }
      ],
      
      lecture: [
        {
          nom: "Magazine Soloplugs",
          desc: "Articles, témoignages et réflexions sur la solitude",
          lien: "magazine.php",
          icon: "lecture",
          tags: ["vivre", "tous"]
        },
        {
          nom: "Ici Radio-Canada — Balados",
          desc: "Podcasts sur le bien-être et la vie quotidienne",
          lien: "https://ici.radio-canada.ca/ohdio/balados",
          icon: "lecture",
          tags: ["vivre"]
        }
      ],
      
      themes: [
        {
          nom: "Vivre solo",
          desc: "L'art de vivre seul·e au quotidien",
          lien: "7_themes/vivre-solo.php",
          icon: "communaute",
          tags: ["vivre"]
        },
        {
          nom: "Voyages solo",
          desc: "Partir seul·e, revenir transformé·e",
          lien: "7_themes/voyages-solo.php",
          icon: "communaute",
          tags: ["vivre"]
        },
        {
          nom: "Sorties & loisirs",
          desc: "Sortir seul·e sans se sentir seul·e",
          lien: "7_themes/sorties-loisirs-rencontres.php",
          icon: "communaute",
          tags: ["vivre"]
        }
      ]
    },
    
    // ----------------------------------------------------------
    // RESSOURCES PAR RÉGION
    // ----------------------------------------------------------
    regions: {
      
      "01": {
        nom: "Bas-Saint-Laurent",
        codesPostaux: ["G0J", "G0K", "G0L", "G5J", "G5L", "G5M", "G5N", "G5R"],
        villes: ["Rimouski", "Rivière-du-Loup", "Matane", "Amqui", "Mont-Joli", "La Pocatière", "Trois-Pistoles", "Témiscouata-sur-le-Lac"],
        ressources: {
          ecoute: [
            { nom: "Tel-Aide Québec", numero: "1 877 700-2433", desc: "Écoute active — Bas-Saint-Laurent", lien: "tel:18777002433", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS du Bas-Saint-Laurent", desc: "Services psychosociaux", lien: "https://www.santebsl.gouv.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "02": {
        nom: "Saguenay–Lac-Saint-Jean",
        codesPostaux: ["G0V", "G0W", "G7A", "G7B", "G7G", "G7H", "G7J", "G7K", "G7N", "G7P", "G7S", "G7T", "G7X", "G7Y", "G7Z", "G8A", "G8B", "G8C", "G8E", "G8G", "G8H", "G8J", "G8K", "G8L", "G8M", "G8N", "G8P"],
        villes: ["Saguenay", "Chicoutimi", "Jonquière", "Alma", "Roberval", "Saint-Félicien", "Dolbeau-Mistassini", "La Baie"],
        ressources: {
          ecoute: [
            { nom: "Centre prévention suicide", numero: "1 888 600-2433", desc: "Saguenay–Lac-Saint-Jean — 24/7", lien: "tel:18886002433", tags: ["tous"] }
          ],
          sante: [
            { nom: "CIUSSS Saguenay–Lac-Saint-Jean", numero: "1 800 370-4980", desc: "Services de santé", lien: "https://www.santesaglac.gouv.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "03": {
        nom: "Capitale-Nationale",
        codesPostaux: ["G0A", "G1A", "G1B", "G1C", "G1E", "G1G", "G1H", "G1J", "G1K", "G1L", "G1M", "G1N", "G1P", "G1R", "G1S", "G1T", "G1V", "G1W", "G1X", "G1Y", "G2A", "G2B", "G2C", "G2E", "G2G", "G2J", "G2K", "G2L", "G2M", "G2N", "G3A", "G3B", "G3C", "G3E", "G3G", "G3H", "G3J", "G3K", "G3L", "G3M", "G3N", "G3Z"],
        villes: ["Québec", "Lévis", "Saint-Augustin-de-Desmaures", "L'Ancienne-Lorette", "Beauport", "Charlesbourg", "Sainte-Foy", "Cap-Rouge", "Stoneham", "Lac-Beauport", "Portneuf", "Pont-Rouge"],
        ressources: {
          ecoute: [
            { nom: "ACSM Québec", desc: "Centre d'écoute 24h/24", lien: "https://www.acsmquebec.org", tags: ["tous"] },
            { nom: "Expression", numero: "418 338-5522", desc: "Écoute active 24/7 — Thetford", lien: "tel:4183385522", tags: ["tous"] }
          ],
          sante: [
            { nom: "CIUSSS Capitale-Nationale", numero: "418 666-7000", desc: "Services de santé", lien: "https://www.ciussscn.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Albatros Capitale-Nationale", desc: "Accompagnement et deuil", lien: "https://albatrosquebec.ca", tags: ["deuil", "aine"] },
            { nom: "Carrefour Familles Monoparentales", desc: "Soutien aux parents solos — Québec", lien: "https://carrefourfm.org", tags: ["parent"] },
            { nom: "AutonHommie", numero: "418 648-6480", desc: "Centre de ressources pour hommes", lien: "tel:4186486480", tags: ["separation"] }
          ]
        }
      },
      
      "04": {
        nom: "Mauricie–Centre-du-Québec",
        codesPostaux: ["G0P", "G0X", "G0Y", "G0Z", "G8T", "G8V", "G8W", "G8Y", "G8Z", "G9A", "G9B", "G9C", "G9H", "G9N", "G9P", "G9R", "G9T", "J0A", "J0C", "J1R", "J1T", "J2A", "J2B", "J2C", "J2E", "J2R", "J2S", "J2W", "J2X", "J2Y"],
        villes: ["Trois-Rivières", "Shawinigan", "Drummondville", "Victoriaville", "Bécancour", "La Tuque", "Nicolet", "Plessisville"],
        ressources: {
          ecoute: [
            { nom: "CEPS Drummond", numero: "819 477-8855", desc: "Écoute et prévention suicide", lien: "tel:8194778855", tags: ["tous"] }
          ],
          sante: [
            { nom: "CIUSSS Mauricie–Centre-du-Québec", numero: "819 693-3938", desc: "Services de santé", lien: "https://www.santemcq.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "05": {
        nom: "Estrie",
        codesPostaux: ["J0B", "J0E", "J1E", "J1G", "J1H", "J1J", "J1K", "J1L", "J1M", "J1N", "J1S", "J1X", "J1Z", "J2K"],
        villes: ["Sherbrooke", "Magog", "Lac-Mégantic", "Coaticook", "Windsor", "East Angus", "Granby"],
        ressources: {
          ecoute: [
            { nom: "Écoute Estrie", numero: "819 564-2323", desc: "Écoute active", lien: "tel:8195642323", tags: ["tous"] },
            { nom: "Écoute Estrie (sans frais)", numero: "1 800 667-3841", desc: "Sans frais en Estrie", lien: "tel:18006673841", tags: ["tous"] },
            { nom: "JEVI Centre prévention suicide", numero: "819 564-7535", desc: "24/7", lien: "tel:8195647535", tags: ["tous"] }
          ],
          sante: [
            { nom: "CIUSSS de l'Estrie – CHUS", numero: "819 780-2222", desc: "Services de santé", lien: "https://www.santeestrie.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Maison Au Diapason", numero: "450 534-2002", desc: "Accompagnement deuil — Bromont", lien: "https://audiapason.org", tags: ["deuil"] },
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "06": {
        nom: "Montréal",
        codesPostaux: ["H1A", "H1B", "H1C", "H1E", "H1G", "H1H", "H1J", "H1K", "H1L", "H1M", "H1N", "H1P", "H1R", "H1S", "H1T", "H1V", "H1W", "H1X", "H1Y", "H1Z", "H2A", "H2B", "H2C", "H2E", "H2G", "H2H", "H2J", "H2K", "H2L", "H2M", "H2N", "H2P", "H2R", "H2S", "H2T", "H2V", "H2W", "H2X", "H2Y", "H2Z", "H3A", "H3B", "H3C", "H3E", "H3G", "H3H", "H3J", "H3K", "H3L", "H3M", "H3N", "H3P", "H3R", "H3S", "H3T", "H3V", "H3W", "H3X", "H3Y", "H3Z", "H4A", "H4B", "H4C", "H4E", "H4G", "H4H", "H4J", "H4K", "H4L", "H4M", "H4N", "H4P", "H4R", "H4S", "H4T", "H4V", "H4W", "H4X", "H4Y", "H4Z", "H5A", "H5B", "H8N", "H8P", "H8R", "H8S", "H8T", "H8Y", "H8Z", "H9A", "H9B", "H9C", "H9E", "H9G", "H9H", "H9J", "H9K", "H9P", "H9R", "H9S", "H9W", "H9X"],
        villes: ["Montréal", "Verdun", "LaSalle", "Lachine", "Saint-Laurent", "Anjou", "Montréal-Nord", "Rivière-des-Prairies", "Pointe-aux-Trembles", "Rosemont", "Plateau-Mont-Royal", "Outremont", "Westmount", "Côte-des-Neiges", "NDG", "Ahuntsic", "Villeray"],
        ressources: {
          ecoute: [
            { nom: "Tel-Écoute Montréal", numero: "514 493-4484", desc: "Écoute active", lien: "tel:5144934484", tags: ["tous"] },
            { nom: "Tel-Aînés", numero: "514 353-2463", desc: "Ligne pour aînés", lien: "tel:5143532463", tags: ["aine"] },
            { nom: "Ligne Le deuil", numero: "1 888 533-3845", desc: "Tout le Québec — 10h-22h", lien: "tel:18885333845", tags: ["deuil"] },
            { nom: "Écoute Entraide", numero: "514 278-2130", desc: "Écoute et référence", lien: "tel:5142782130", tags: ["tous"] },
            { nom: "Aide aux Trans du Québec", numero: "1 855 909-9038", desc: "Personnes trans et proches — 9h-21h", lien: "tel:18559099038", tags: ["ado", "tous"] }
          ],
          sante: [
            { nom: "CIUSSS Centre-Sud", numero: "514 842-7226", desc: "Centre-ville, Plateau", lien: "#", tags: ["tous"] },
            { nom: "CIUSSS Nord-de-l'Île", numero: "514 336-6673", desc: "Nord de Montréal", lien: "#", tags: ["tous"] },
            { nom: "CIUSSS Ouest-de-l'Île", numero: "514 630-2123", desc: "Ouest de l'île", lien: "#", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Suicide Action Montréal", numero: "1 866 277-3553", desc: "Suivi de deuil après suicide", lien: "tel:18662773553", tags: ["deuil"] },
            { nom: "Pères séparés", numero: "514 254-6120", desc: "Soutien aux pères", lien: "tel:5142546120", tags: ["parent", "separation"] },
            { nom: "Service d'Entraide Passerelle", numero: "514 277-9870", desc: "Femmes en rupture", lien: "tel:5142779870", tags: ["parent", "separation"] },
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] },
            { nom: "Le Phare enfants et familles", numero: "514 787-8818", desc: "Deuil d'enfant < 18 ans", lien: "tel:5147878818", tags: ["deuil", "parent"] },
            { nom: "Parents Orphelins", numero: "514 686-4880", desc: "Deuil périnatal", lien: "tel:5146864880", tags: ["deuil", "parent"] },
            { nom: "NOVA Ouest-de-l'Île", numero: "514 695-8335", desc: "Soutien au deuil — Ouest", lien: "tel:5146958335", tags: ["deuil"] },
            { nom: "AFPAD", numero: "514 396-7389", desc: "Familles victimes actes criminels", lien: "tel:5143967389", tags: ["deuil"] }
          ]
        }
      },
      
      "07": {
        nom: "Outaouais",
        codesPostaux: ["J0X", "J8L", "J8M", "J8N", "J8P", "J8R", "J8T", "J8V", "J8Y", "J8Z", "J9A", "J9B", "J9E", "J9H", "J9J"],
        villes: ["Gatineau", "Hull", "Aylmer", "Chelsea", "Buckingham", "Masson-Angers", "Cantley", "Val-des-Monts", "Maniwaki"],
        ressources: {
          ecoute: [
            { nom: "Tel-Aide Outaouais", numero: "819 775-3223", desc: "Gatineau", lien: "tel:8197753223", tags: ["tous"] },
            { nom: "Tel-Aide Outaouais (sans frais)", numero: "1 800 567-9699", desc: "Tout le Québec", lien: "tel:18005679699", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS de l'Outaouais", numero: "1 800 267-2325", desc: "Services de santé", lien: "https://www.santeoutaouais.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Entraide-Deuil de l'Outaouais", numero: "819 770-4814", desc: "Groupes d'entraide deuil", lien: "tel:8197704814", tags: ["deuil"] }
          ]
        }
      },
      
      "08": {
        nom: "Abitibi-Témiscamingue",
        codesPostaux: ["J0Y", "J0Z", "J9E", "J9L", "J9P", "J9T", "J9V", "J9X", "J9Y", "J9Z"],
        villes: ["Rouyn-Noranda", "Val-d'Or", "Amos", "La Sarre", "Ville-Marie", "Témiscaming"],
        ressources: {
          ecoute: [
            { nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS Abitibi-Témiscamingue", desc: "Services de santé — 811", lien: "https://www.santeabitibi.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "09": {
        nom: "Côte-Nord",
        codesPostaux: ["G0G", "G0H", "G4R", "G4S", "G4T", "G4V", "G4W", "G4X", "G4Z", "G5A", "G5B", "G5C"],
        villes: ["Baie-Comeau", "Sept-Îles", "Port-Cartier", "Havre-Saint-Pierre", "Fermont"],
        ressources: {
          ecoute: [
            { nom: "Centre prévention suicide", numero: "1 888 600-2433", desc: "Dessert Côte-Nord", lien: "tel:18886002433", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS de la Côte-Nord", desc: "Services de santé — 811", lien: "https://www.santecotenord.ca", tags: ["tous"] }
          ],
          communautaire: []
        }
      },
      
      "10": {
        nom: "Nord-du-Québec",
        codesPostaux: ["G0W", "J0M", "J0Y"],
        villes: ["Chibougamau", "Chapais", "Lebel-sur-Quévillon", "Matagami", "Radisson"],
        ressources: {
          ecoute: [
            { nom: "Ligne Espoir (Autochtones)", numero: "1 855 242-3310", desc: "24/7 — Adapté culturellement", lien: "tel:18552423310", tags: ["tous"] },
            { nom: "Service aide indien résidentiel", numero: "1 866 925-4419", desc: "24/7", lien: "tel:18669254419", tags: ["tous"] }
          ],
          sante: [
            { nom: "Conseil Cri santé Baie James", numero: "819 855-2844", desc: "Services adaptés culture crie", lien: "#", tags: ["tous"] },
            { nom: "Centre régional Baie-James", numero: "418 748-3575", desc: "Services de santé", lien: "#", tags: ["tous"] }
          ],
          communautaire: []
        }
      },
      
      "11": {
        nom: "Gaspésie–Îles-de-la-Madeleine",
        codesPostaux: ["G0C", "G0E", "G4R", "G4T", "G4V", "G4W", "G4X"],
        villes: ["Gaspé", "Percé", "Chandler", "New Richmond", "Carleton-sur-Mer", "Sainte-Anne-des-Monts", "Îles-de-la-Madeleine"],
        ressources: {
          ecoute: [
            { nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS de la Gaspésie", desc: "Services de santé", lien: "https://www.cisss-gaspesie.gouv.qc.ca", tags: ["tous"] },
            { nom: "CISSS des Îles", desc: "Services de santé", lien: "https://www.santeiles.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "12": {
        nom: "Chaudière-Appalaches",
        codesPostaux: ["G0M", "G0N", "G0R", "G0S", "G5X", "G5Y", "G5Z", "G6A", "G6B", "G6C", "G6E", "G6G", "G6H", "G6J", "G6K", "G6L", "G6P", "G6R", "G6S", "G6T", "G6V", "G6W", "G6X", "G6Y", "G6Z", "G7A"],
        villes: ["Lévis", "Saint-Georges", "Thetford Mines", "Montmagny", "Sainte-Marie", "Beauceville"],
        ressources: {
          ecoute: [
            { nom: "CEPS Beauce-Etchemin", numero: "418 228-0001", desc: "Écoute et prévention", lien: "tel:4182280001", tags: ["tous"] },
            { nom: "Tel-Écoute Convergence", numero: "418 838-4094", desc: "Lévis et région", lien: "tel:4188384094", tags: ["tous"] },
            { nom: "Tel-Écoute Convergence (sans frais)", numero: "1 877 747-4094", desc: "Sans frais", lien: "tel:18777474094", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS Chaudière-Appalaches", desc: "Services de santé", lien: "https://www.santeca.ca", tags: ["tous"] }
          ],
          communautaire: []
        }
      },
      
      "13": {
        nom: "Laval",
        codesPostaux: ["H7A", "H7B", "H7C", "H7E", "H7G", "H7H", "H7J", "H7K", "H7L", "H7M", "H7N", "H7P", "H7R", "H7S", "H7T", "H7V", "H7W", "H7X", "H7Y"],
        villes: ["Laval", "Chomedey", "Sainte-Dorothée", "Duvernay", "Vimont", "Auteuil", "Laval-des-Rapides", "Pont-Viau"],
        ressources: {
          ecoute: [
            { nom: "Centre d'écoute de Laval", numero: "450 664-2787", desc: "Écoute active", lien: "tel:4506642787", tags: ["tous"] },
            { nom: "Centre d'écoute de Laval (sans frais)", numero: "1 888 664-1558", desc: "Tout le Québec", lien: "tel:18886641558", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS de Laval", desc: "Services de santé", lien: "https://www.lavalensante.com", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Lumi-Vie", numero: "450 687-8311", desc: "Accompagnement deuil", lien: "tel:4506878311", tags: ["deuil"] },
            { nom: "Regroupement familles monoparentales", numero: "450 622-0524", desc: "Soutien parents solos", lien: "tel:4506220524", tags: ["parent"] },
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] },
            { nom: "Services populaires psychothérapie", numero: "450 975-2182", desc: "Psychothérapie accessible", lien: "tel:4509752182", tags: ["tous"] }
          ]
        }
      },
      
      "14": {
        nom: "Lanaudière",
        codesPostaux: ["J0K", "J5R", "J5T", "J5V", "J5W", "J5X", "J5Y", "J5Z", "J6A", "J6E", "J6N", "J6X", "J6Y", "J6Z"],
        villes: ["Joliette", "Repentigny", "Terrebonne", "L'Assomption", "Mascouche", "Saint-Charles-Borromée", "Rawdon", "Saint-Lin-Laurentides"],
        ressources: {
          ecoute: [
            { nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS de Lanaudière", desc: "Services de santé", lien: "https://www.santelanaudiere.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Aux Couleurs de la Vie", numero: "450 752-4436", desc: "Accompagnement deuil", lien: "tel:4507524436", tags: ["deuil"] },
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "15": {
        nom: "Laurentides",
        codesPostaux: ["J0N", "J0R", "J0T", "J0V", "J0W", "J7A", "J7B", "J7C", "J7E", "J7G", "J7H", "J7J", "J7K", "J7L", "J7M", "J7N", "J7P", "J7R", "J7T", "J7V", "J7Y", "J7Z", "J8A", "J8B", "J8C", "J8E", "J8G", "J8H"],
        villes: ["Saint-Jérôme", "Blainville", "Mirabel", "Saint-Eustache", "Sainte-Thérèse", "Boisbriand", "Rosemère", "Mont-Tremblant", "Saint-Sauveur", "Sainte-Agathe-des-Monts", "Lachute"],
        ressources: {
          ecoute: [
            { nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS des Laurentides", desc: "Services de santé", lien: "https://www.santelaurentides.gouv.qc.ca", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Maison Sercan", numero: "450 491-1912", desc: "Accompagnement deuil — Saint-Eustache", lien: "tel:4504911912", tags: ["deuil"] },
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      },
      
      "16": {
        nom: "Montérégie",
        codesPostaux: ["J0E", "J0G", "J0H", "J0J", "J0L", "J0P", "J0S", "J2G", "J2H", "J2J", "J2K", "J2L", "J2M", "J2N", "J2P", "J2R", "J2S", "J2T", "J2W", "J2X", "J2Y", "J3A", "J3B", "J3E", "J3G", "J3H", "J3L", "J3M", "J3N", "J3P", "J3R", "J3T", "J3V", "J3X", "J3Y", "J3Z", "J4B", "J4G", "J4H", "J4J", "J4K", "J4L", "J4M", "J4N", "J4P", "J4R", "J4S", "J4T", "J4V", "J4W", "J4X", "J4Y", "J4Z", "J5A", "J5B", "J5C", "J5J", "J5K", "J5L", "J5M", "J5R", "J6A", "J6J", "J6K", "J6N", "J6R", "J6S", "J6V", "J6W", "J6X", "J6Y", "J6Z", "J7R", "J7T", "J7V"],
        villes: ["Longueuil", "Brossard", "Saint-Jean-sur-Richelieu", "Boucherville", "Saint-Hyacinthe", "Châteauguay", "Chambly", "Saint-Bruno-de-Montarville", "Beloeil", "Sorel-Tracy", "Granby", "Varennes", "La Prairie", "Candiac", "Sainte-Julie"],
        ressources: {
          ecoute: [
            { nom: "Centre de crise", desc: "Via 1-866-APPELLE", lien: "tel:18662773553", tags: ["tous"] }
          ],
          sante: [
            { nom: "CISSS Montérégie-Centre", desc: "Services de santé", lien: "https://www.santemonteregie.qc.ca/centre", tags: ["tous"] },
            { nom: "CISSS Montérégie-Est", desc: "Services de santé", lien: "https://www.santemonteregie.qc.ca/est", tags: ["tous"] },
            { nom: "CISSS Montérégie-Ouest", desc: "Services de santé", lien: "https://www.santemonteregie.qc.ca/ouest", tags: ["tous"] }
          ],
          communautaire: [
            { nom: "Maison des petits tournesols", numero: "450 332-4862", desc: "Accompagnement deuil — Longueuil", lien: "tel:4503324862", tags: ["deuil"] },
            { nom: "Maison Victor-Gadbois", numero: "450 467-1710", desc: "Soutien au deuil — Rive-Sud", lien: "tel:4504671710", tags: ["deuil"] },
            { nom: "Les amis du crépuscule", numero: "450 252-2737", desc: "Deuil — Saint-Hyacinthe", lien: "tel:4502522737", tags: ["deuil"] },
            { nom: "Les rêves envolés", numero: "450 468-8111 p.82309", desc: "Deuil périnatal — Longueuil", lien: "tel:4504688111", tags: ["deuil", "parent"] },
            { nom: "Maison Source bleue", numero: "450 641-3165", desc: "Accompagnement deuil — Boucherville", lien: "tel:4506413165", tags: ["deuil"] },
            { nom: "Les Petits Frères", desc: "Accompagnement des aînés isolés", lien: "https://www.petitsfreres.ca", tags: ["aine"] }
          ]
        }
      }
    }
  }
};

// ============================================================
// FONCTIONS UTILITAIRES
// ============================================================

/**
 * Filtre les ressources par tag(s)
 * @param {Array} ressources - Liste de ressources
 * @param {Array|String} tags - Tag(s) à filtrer
 * @returns {Array} Ressources filtrées
 */
function filtrerParTags(ressources, tags) {
  if (!ressources) return [];
  const tagsArray = Array.isArray(tags) ? tags : [tags];
  
  return ressources.filter(r => {
    if (!r.tags) return false;
    return tagsArray.some(tag => r.tags.includes(tag) || r.tags.includes('tous'));
  });
}

/**
 * Récupère toutes les ressources provinciales pour une thématique
 * @param {String} theme - "ado", "parent", "aine", "deuil", "separation", "vivre"
 * @returns {Object} Ressources organisées par catégorie
 */
function getRessourcesProvinciales(theme) {
  const prov = SOLOPLUGS_RESSOURCES.quebec.provinciales;
  const tagsRecherches = theme === 'vivre' ? ['vivre', 'tous'] : [theme, 'tous'];
  
  return {
    urgence: filtrerParTags(prov.urgence, tagsRecherches),
    jeunes: theme === 'ado' ? prov.jeunes : filtrerParTags(prov.jeunes, tagsRecherches),
    aines: theme === 'aine' ? prov.aines : filtrerParTags(prov.aines, tagsRecherches),
    parents: theme === 'parent' ? prov.parents : filtrerParTags(prov.parents, tagsRecherches),
    deuil: theme === 'deuil' ? prov.deuil : filtrerParTags(prov.deuil, tagsRecherches),
    separation: theme === 'separation' ? prov.separation : filtrerParTags(prov.separation, tagsRecherches),
    reference: prov.reference,
    lecture: filtrerParTags(prov.lecture, tagsRecherches),
    themes: filtrerParTags(prov.themes, tagsRecherches)
  };
}

/**
 * Récupère les ressources régionales pour une thématique et une région
 * @param {String} codeRegion - Code de région (ex: "06" pour Montréal)
 * @param {String} theme - Thématique
 * @returns {Object} Ressources régionales filtrées
 */
function getRessourcesRegionales(codeRegion, theme) {
  const region = SOLOPLUGS_RESSOURCES.quebec.regions[codeRegion];
  if (!region) return null;
  
  const tagsRecherches = theme === 'vivre' ? ['vivre', 'tous', 'ado', 'parent', 'aine', 'deuil', 'separation'] : [theme, 'tous'];
  
  return {
    nom: region.nom,
    ecoute: filtrerParTags(region.ressources.ecoute, tagsRecherches),
    sante: filtrerParTags(region.ressources.sante, tagsRecherches),
    communautaire: filtrerParTags(region.ressources.communautaire, tagsRecherches)
  };
}

/**
 * Trouve la région par code postal (3 premiers caractères)
 * @param {String} codePostal - Code postal ou ses 3 premiers caractères
 * @returns {Object|null} Région trouvée ou null
 */
function trouverRegionParCodePostal(codePostal) {
  const code = codePostal.toUpperCase().replace(/\s/g, '').substring(0, 3);
  
  for (const [codeRegion, region] of Object.entries(SOLOPLUGS_RESSOURCES.quebec.regions)) {
    if (region.codesPostaux.includes(code)) {
      return { code: codeRegion, ...region };
    }
  }
  return null;
}

/**
 * Recherche une ville et retourne sa région
 * @param {String} recherche - Nom de ville (partiel ou complet)
 * @returns {Array} Liste de correspondances {ville, region, codeRegion}
 */
function rechercherVille(recherche) {
  const query = recherche.toUpperCase().trim();
  if (query.length < 2) return [];
  
  const resultats = [];
  
  for (const [codeRegion, region] of Object.entries(SOLOPLUGS_RESSOURCES.quebec.regions)) {
    for (const ville of region.villes) {
      if (ville.toUpperCase().includes(query)) {
        resultats.push({
          ville: ville,
          region: region.nom,
          codeRegion: codeRegion
        });
      }
    }
  }
  
  return resultats.slice(0, 8); // Limiter à 8 résultats
}

// Export pour utilisation dans d'autres scripts
if (typeof module !== 'undefined' && module.exports) {
  module.exports = {
    SOLOPLUGS_RESSOURCES,
    filtrerParTags,
    getRessourcesProvinciales,
    getRessourcesRegionales,
    trouverRegionParCodePostal,
    rechercherVille
  };
}
