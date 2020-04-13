Reissuesa on Reissuesan matkablogille kehitetty WordPress-teema. Teeman tekeminen oli osa Esa Isopahkalan TAMK:n opinnäytetyötä <a href="https://www.theseus.fi/handle/10024/334323">WordPress-aloitusteeman valinta ja kehittäminen</a>.

Aloitusteemana on käytetty <a href="https://github.com/aucor/aucor-starter">Aucor Starteria</a>, johon on lisätty CSS Grid -tuki Digitoimisto Duden aloitusteemasta <a href="https://github.com/digitoimistodude/air-light">Air Lightista</a>.

Reissuesa-teema on nähtävissä tuotantokäytössä Reissuesan matkablogissa osoitteessa https://www.matkablogi.fi/:

- etusivu on toteutettu front-page.php:llä, blogin indeksi home.php:llä
- arkistonäkymien ruudukkolayout on tehty CSS Gridillä
- etusivulla on listaukset paitsi uusimmista postauksista myös suosituimpien kategorioiden (maanosien tai maiden) uusimmista postauksista sekä kaikkien aikojen luetuimmista postauksista
- tiisereissä käytetään poimintoja, otsikkokuvan puuttuessa käytetään oletuskuvaa, tiiserikuvat samaa kuvasuhdetta css:llä
- suosituimmilla kategorioilla omia sivupohjia, esim. category-vali-amerikka.php sisältää postauslistauksen lisäksi kartan
- suosituimmat kategoriat ja tagit näyttävät oman hero-kuvansa arkistolistauksessa (partials/content/hero-archive.php)
- vimpainalueita (sidebar) on 4 kpl, otettuna käyttöön esim. sivupohjan page-sidebar-about.php kautta
- yksittäisten postausten edellinen ja seuraava postaus -linkit varustettu pikkukuvilla
- kuvien näyttämisessä on Lazy Loading aktivoituna
- käyttöliittymässä kaikki suomen kielellä jos kieleksi valittu suomi (muuten englanniksi)
- fontteina on käytetty Google-fontteja Open Sans ja Montserrat
- kommentit on muotoiltu isoilla pyöreillä (gr)avatareilla ja puhekuplilla

Sivuston matkablogi.fi -suorituskykytestit 22.11.2019:

- Google Page Insights 89/90 (mobiili/työpöytä)
- GTMetrix 94/80, latausaika 1.2s (PageSpeed/YSlow)
- Pingdom Tools 84
- WebPageTest 5 x A

Teemanhyväksyntätesti Theme Check -pluginilla:

- WordPress.org, vaatimukset täytetään, mutta 10 varoitusta
- ThemeForest, vaatimukset täytetään, mutta 7 varoitusta

Reissuesan matkablogissa on käytössä seuraavat ilmaiset pluginit:

- Akismet-roskaviestisuodatus
- AMP (AMP-projektin virallinen plugin)
- Aucor Core (Aucor Starterin toiminnallisuuden säätely, suomen kieli)
- Envira Gallery Lite (galleriasovellus käytössä joissakin vanhoissa postauksissa)
- Glue for Yoast SEO & AMP (varmistaa AMP-pluginin käyttävän Yoast-pluginin metadataa)
- RS FeedBurner (WordPressin natiivin RSS:n sijaan käyttöön Google FeedBurner)
- Site Kit by Google (Googlen palveluiden integrointi)
- Smart Slider 3 (etusivun kuvakarusellin toteutus)
- Smash Balloon Instagram Feed (etusivun Instagram-tilin mainoksen totetutus)
- Subscribe to Comments Reloaded (kommentoijat voivat tilata ilmoitukset uusista kommenteista)
- Ultimate Tag Cloud Widget (alapalkin muokattava avainsanapilvi)
- WP Super Cache (välimuisti nopeuttamaan sivunlatausta)
- Yoast SEO (hakukoneoptimointi, sisältää myös sivukartan)

Käytössä on yksi maksullinen plugin:

- Advanced Custom Fields PRO (kartta käydyt maat -sivulla)
